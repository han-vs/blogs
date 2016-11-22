self.onload = function () {
    /*日志文章列表*/
    search.listText();

};


var note = {
    /*文章评论提交事件*/
    submit: function (result, nick, textarea) {
        setTimeout(function () {
            $('.comment-prompt').css('display', 'none');
            $('.comment-success').css('display', 'block');
            var isRes = true;
            var err = '';
            switch (result) {
                case '-1':
                    nick.css('border', 'solid 2px red');
                    err = '昵称不能为空！';
                    isRes = false;
                    break;
                case '-2':
                    $('.comment-box').css('border', 'solid 2px red');
                    $('#comment-submit').css('border-right', 'solid 2px red').css('border-bottom', 'solid 2px red');
                    err = '内容太短！';
                    isRes = false;
                    break;
                case '-3':
                    err = '您已评论过该文章！';
                    isRes = false;
                    break;
                case '-4':
                    err = '评论失败，请稍后重试！';
                    isRes = false;
                    break;
                case 'ok':
                    nick.val('');
                    textarea.val('');
                    $('input[name=contact]').val('');
                    $('.comment-success .fa').text('');
                    $('.comment-success .comment-prompt-text').text('评论提交成功,等待审核...').parent().css('background-color', '#FBFBFB').find('.fa').addClass('fa-check');
                    $('.comment-box').css('border', 'solid 2px #F2F2F2');
                    $('#comment-submit').css('border-right', 'solid 2px #F2F2F2').css('border-bottom', 'solid 2px #F2F2F2');
                    break;
                default:
                    err = '请求超时，请稍后重试！';
                    isRes = false;
                    break;
            }
            if (!isRes) {
                $('.comment-success .fa').removeClass('fa-check').text('×');
                $('.comment-success .comment-prompt-text').text(err).parent().css('background-color', 'rgb(243,180,180)');
            }
            setTimeout(function () {
                $('.comment-success').css('display', 'none');
            }, 4000);
        }, 2000);
    },
    /**
     * 文章分享
     */
    share: function () {
        $('.bdsharebuttonbox').html(
            '<div id="ckepop"> <span class="jiathis_txt">分享到：</span>' +
            ' <a class="jiathis_button_weixin">微信</a> <a id="share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>' +
            '<a class="jiathis_counter_style"></a></div><script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"><\/script></div>'
        );
        $('#share').focus(function () {
            $(this).attr('href', 'javascript:void(0);');
        }).click(function () {
            $('.jiathis_button_expanded').trigger("click");
        });
        $('.jiathis_style').css('z-index', '888').css('width', '500px');
    }
};
/**
 * 日志
 * @type {{day: search.day}}
 */
var search = {
    /**
     * 三级联动搜索日期
     */
    day: function () {
        var year = $("select[name=year] option:selected").val();
        var month = $("select[name=month] option:selected").val();
        if (year < 2016 || year > 2050 || month < 1 || month > 12) {
            return;
        }
        var days = 0;
        switch (month) {
            case '4':
            case '6':
            case '9':
            case '11':
                days= 30;
                break;
            case '2':
                days= (year % 4 == 0) && (year % 100 != 0 || year % 400 == 0) ? 29 : 28;
                break;
            default:
                days= 31;
        }
        var htmls='';
        for(var i=1;i<=days;i++){
            htmls+='<option value="'+i+'">'+i+'日</option>';
        }
        $("select[name=day]").html(htmls);
    },
    /**
     * 查找日志按钮事件
     */
    submit:function() {
        var year = $("select[name=year] option:selected").val();
        var month = $("select[name=month] option:selected").val();
        var day=$("select[name=day] option:selected").val();
        if (year < 2016 || year > 2050 || month < 1 || month > 12||day>31||day<1) {
            alert('选择有误！');
            return false;
        }
        $.post('http://'+window.location.host+'/Log/',{
            
        },function (result) {
            
        });
    },
    /**
     * 文章列表事件及效果
     */
    listText:function() {
        $('.log-list li img').hover(function () {
            $(this).addClass('animated rotateIn');
        },function () {
            $(this).removeClass('animated rotateIn');
        });
    }
};

