<?php
/**
 * 笔记列表
 * User: hanvs
 * Date: 2016/11/9
 * Time: 9:33
 */
namespace Home\Controller;

class NoteController extends CommonController
{
    //定义所有笔记分类
    private $list_type = ['html', 'css', 'javascript', 'jquery', 'php', 'mysql', 'linux', 'ffmpeg',
        'csharp', 'nodejs', 'apache', 'nginx', 'winserver', 'photoshop', 'go'];

    /**
     * 首页分类
     */
    public function index()
    {
        //读取缓存
        $noteCount = S('noteCount');
        if (empty($noteCount)) {
            //获取当前日期
            $date = date('Ymd', time());
            //初始化各分类的值
            for ($i = 0; $i < count($this->list_type); $i++) {
                $noteCount[$this->list_type[$i]]['num'] = 0;
                $noteCount[$this->list_type[$i]]['up'] = 0;
            }

            //实例化Model
            $model = M('note');
            //查询数据库所有文章数据
            $res = $model->field('type,date')->select();

            //遍历数据，计算各分类总数
            foreach ($res as $v) {
                //获取转行后的日期
                $thisDate = date('Ymd', $v['date']);
                //获取类型
                $type = strtolower(trim($v['type']));
                //判断该分类是否正确
                if (!in_array($type, $this->list_type)) {
                    //跳出本次循环
                    continue;
                }
                //累加该分类数量
                $noteCount[$type]['num'] += 1;
                //对比当前日期获取今日更新数量
                $noteCount[$type]['up'] += $thisDate == $date ? 1 : 0;
            }
            S('noteCount',$noteCount,300);
        }
        $this->assign('res', $noteCount);
        $this->display('home');
    }


    /**
     * 文章列表
     */
    public function lists()
    {

        //获取请求文章类型
        $type = strtolower(trim(base64_decode(I('get.class'))));

        //判断请求的笔记类型
        if (!in_array($type, $this->list_type)) {

            //如果请求的分类不在范围内则跳转到错误页面，并传入错误信息
            $this->redirect("index.php/Err/error",
                array('errtitle' => base64_encode('查找错误'), 'content' => base64_encode('没有该文章分类！')
                )
            );

            //终止程序
            exit;
        }

        //实例化Model
        $model = M('note');
        //判断是否有数据
        if ($model->count() >= 1) {
            //根据文章类型降序查询第一页，每页10条数据
            $res = $model->order('id desc')->page('1,10')->where("type='$type'")->select();
            //获取元素总数
            $count = count($res);
            //判断元素总数
            if ($count >= 1) {
                //定义随机数据数组
                $classNum = array();
                //循环遍历8次
                for ($i = 0; $i < 8; $i++) {
                    //获取0-$list_type总长度的随机数
                    $rand = mt_rand(0, count($this->list_type) - 1);
                    //根据随机获取的类型查询该类型文章的总数并对应的装入数组
                    $classNum[$this->list_type[$rand]] = count($model->where(['type' => $this->list_type[$rand]])->select());
                }
                //开始查询子表信息
                foreach ($res as $k => $v) {
                    //查询子表中对应的评论总数,装入数组
                    $res[$k]['discussNum'] = count($model->table('h_note_discuss')->where(['pids' => $v['id'], 'status' => 1])->select());
                }
                //传入模板
                $this->assign('title', $type);
                $this->assign('res', $res);
                $this->assign('classNum', $classNum);
            } else {
                //如果请求的分类查找不到则跳转提示
                $this->redirect("index.php/Err/error",
                    array('errtitle' => base64_encode('未查找到'), 'content' => base64_encode('对不起！该分类暂无内容。')
                    )
                );
                //终止程序
                exit;
            }
        }
        $this->display('list');
    }

    /**
     * 显示文章
     */
    public function article()
    {

        //获取请求的文章名称并替换空格为base64的符号和base64解密
        $name = trim(base64_decode(str_replace(' ', '+', I('get.name'))));
        //获取请求的文章类型并替换空格为base64的符号和base64解密
        $type = trim(base64_decode(str_replace(' ', '+', I('get.class'))));

        //实例化model
        $model = M('note');
        //查询该文章的数据
        $res = $model->where(['name' => $name, 'type' => $type])->select()[0];
        $res['view'] += 1;
        //判断该文章是否为空并且判断者数据库中是否存在
        if (empty($name) || !$res) {
            //如果请求的文章查找不到或为空则跳转提示
            $this->redirect("index.php/Err/error",
                array('errtitle' => base64_encode('查找错误'), 'content' => base64_encode('对不起！没有找到该文章。')
                )
            );
            //停止程序
            exit;
        }

        //查询该文章评论数据
        $discuss = $model->table('h_note_discuss')->field('name,content,date')->order('id desc')->where(['pids' => $res['id'], 'status' => 1])->select();
        //获取评论总数装入数组
        $discuss['count'] = count($discuss);


        //查询并计算该分类的总数
        $classNum = $model->field('count(*) as typenum')->where("type='" . $res['type'] . "'")->select()[0]['typenum'];
        //定义每页的条数
        $n = 6;
        //进一法计算该分类的总页数
        $numPage = (int)ceil($classNum / $n);
        //随机取出一页数据
        $rand = mt_rand(1, $numPage);
        //取出指定页的推荐数据
        $recommend = $model->field('name')->page($rand, $n)->where("type='" . $res['type'] . "'")->select();

        //增加查看数量
        $view = ((int)$res['view']);
        $model->execute("update h_note set view=$view where id=" . $res['id']);

        //数据传入模板
        $this->assign('res', $res);
        $this->assign('discuss', $discuss);
        $this->assign('recommend', $recommend);
        $this->display();
    }

    /**
     * 评论
     */
    public function discuss()
    {
        //判断是否是post请求
        if (!IS_POST) {
            //终止程序
            die;
        }
        //获取用户名
        $name = trim(I('post.name'));
        //获取评论内容
        $content = trim(I('post.content'));
        //获取联系方式
        $contact = trim(I('post.contact'));
        //获取文章所属分类
        $type = trim(I('post.textType'));
        //获取文章名称
        $textName = trim(I('post.textName'));

        //如果名称错误则返回错误代码-1
        if (empty($name)) {
            echo -1;
            //停止程序
            die;
        }
        //如果内容错误则返回错误代码-2
        if (empty($content) || strlen($content) < 3) {
            echo -2;
            //停止程序
            die;
        }
        //验证该联系方式是否是邮箱或网址
        if (!filter_var($contact, FILTER_VALIDATE_EMAIL) && !filter_var($contact, FILTER_VALIDATE_URL)) {
            $contact = '';
        }
        //获取当前时间戳
        $time = time();
        //实例化Model
        $model = M('note');
        //根据该文章名称获取id
        $parentID = $model->field('id')->where("name='$textName' and type='$type'")->select()[0]['id'];
        //获取当前用户ip
        $ip = get_client_ip();

        //查询当前用户是否已评论过该文章
        if (M()->table('h_note_discuss')->where(['pids' => $parentID, 'uip' => $ip])->select()) {
            //返回错误代码
            echo -3;
            //终止程序
            die;
        }

        //定义需要插入的数据
        $dataArr = array(
            'pids' => $parentID,
            'name' => $name,
            'content' => $content,
            'date' => $time,
            'contact' => $contact,
            'uip'=>get_client_ip()
        );

        //插入评论数据，并判断返回的id
        if (M()->table('h_note_discuss')->add($dataArr) > 0) {
            //返回成功代码
            echo 'ok';
        } else {
            //返回失败代码
            echo -4;
        }
    }
}