$(function () {
    function munsStyle() {

        /*定义颜色数组*/
        var colors = ['234,76,76', '37,160,181', '220,128,94', '135,72,214', '214,171,72',
            '40,164,153', '55,166,55', '178,54,134', '22,114,108'];

        /*获取当前选择的菜单*/
        var hovers = $('.selected');
        /*根据当前选择的菜单下标获取颜色值*/
        var selectColor = 'rgb(' + colors[hovers.index()] + ')';
        /*给子元素添加颜色*/
        hovers.find('a').css('color', selectColor);
        /*菜单HOVER效果*/
        $('.navbar-nav li').hover(
            function () {
                /*判断当前hover的是否是已选择的元素*/
                if ($(this).prop('class') == hovers.prop('class')) {
                    return false;
                }
                /*根据当前元素下标获取颜色值*/
                var color = colors[$(this).index()];
                /*给当前元素添加hover样式*/
                $(this).addClass('selected').find('a').css('color', 'rgb(' + color + ')');
                /*移除原有已选的class*/
                hovers.removeClass('selected').find('a').css('color', 'rgb(123,123,123)');
            }, function () {
                /*判断当前hover的是否是已选择的元素*/
                if ($(this).prop('class') == hovers.prop('class')) {
                    return false;
                }
                /*移除hover结束的元素的class*/
                $(this).removeClass('selected').find('a').css('color', 'rgb(123,123,123)');

                /*恢复已选的元素class*/
                hovers.addClass('selected').find('a').css('color', selectColor);
            }
        );
    }

    /*调用菜单hover样式函数*/
    munsStyle();


    /*
     * 计算滚动条距顶部的距离并设置菜单导航样式
     * */
    function roll_distance() {

        $(window).scroll(function () {
            /*判断是否是PC端，如果是则应用导航菜单效果*/
            if (IsPC()) {
                /*判断滚动条的位置是否超出顶部菜单栏*/
                if (getScrollTop() < $('#navbar').height()) {
                    /*判断是否存在动画类名*/
                    if ($('#navbar').is('.animated')) {
                        /*清除显示动画，清除fixed绝对定位*/
                        $('#navbar').css('position', 'static').removeClass('animated bounceInDown');
                    }
                } else {
                    /*设置fixed绝对定位，添加显示动画*/
                    $('#navbar').css('position', 'fixed').addClass('animated bounceInDown');
                }
            }
        });
        /*判断客户端设备类型*/
        function IsPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
            var flag = true;
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) {
                    flag = false;
                    break;
                }
            }
            return flag;
        }

        /**
         * 获取滚动条距离顶端的距离
         * @return {}支持IE6
         */
        function getScrollTop() {
            var scrollPos;
            if (window.pageYOffset) {
                scrollPos = window.pageYOffset;
            }
            else if (document.compatMode && document.compatMode != 'BackCompat') {
                scrollPos = document.documentElement.scrollTop;
            }
            else if (document.body) {
                scrollPos = document.body.scrollTop;
            }
            return scrollPos;
        }
    }

    roll_distance();

});
/*文章评论提交事件*/

function noteEvent(result, nick, textarea) {
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
}
function share() {
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