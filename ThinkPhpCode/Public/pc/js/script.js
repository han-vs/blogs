self.onload = function () {

    /**
     * 初始化设置
     */
    function initialize() {

        /**
         * 获取Body元素
         */
        var body = $('body');

        /**
         * 获取页面总宽度
         */
        var body_width = body.width();


        /**
         * 获取页面85%的宽度
         */
        var body_practical = body_width * 0.85;

        /**
         * 获取页面15%的实际宽度
         */
        var body_surplus = body_width - body_practical;

        /**
         * 获取页面7.5%的实际宽度
         */
        var body_surplusMoiety = body_surplus * 0.5;

        /**
         * 定义默认容器样式设置
         */
        var set_attribute = [['width', 'margin-left', 'margin-right'],
            [body_practical, body_surplusMoiety, body_surplusMoiety]];

        /**
         * 定义要设置的元素
         */
        var elements =  $('#page');

        /**
         * 应用设置
         *
         */
        /*遍历属性名和属性值*/
        for (var j = 0; j < set_attribute[0].length; j++) {
            elements.css(set_attribute[0][j], set_attribute[1][j] + 'px');
        }

        }


    /*初始化应用容器样式设置*/
    // initialize();


    function munsStyle() {

        /*定义颜色数组*/
        var colors=['115,116,117','37,160,181','220,128,94','135,72,214','214,171,72',
            '40,164,153','55,166,55','178,54,134','22,114,108'];

        /*获取当前选择的菜单*/
        var hovers=$('.selected');
        /*根据当前选择的菜单下标获取颜色值*/
        var selectColor='rgb('+colors[hovers.index()]+')';
        /*给子元素添加颜色*/
        hovers.find('a').css('color',selectColor);
        /*菜单HOVER效果*/
        $('#heads ul li').hover(
            function () {
                /*判断当前hover的是否是已选择的元素*/
                if($(this).prop('class')==hovers.prop('class')){
                    return false;
                }
                /*根据当前元素下标获取颜色值*/
                var color=colors[$(this).index()];
                /*给当前元素添加hover样式*/
                $(this).addClass('selected').find('a').css('color','rgb('+color+')');
                /*移除原有已选的class*/
                hovers.removeClass('selected').find('a').css('color','rgb(255,255,255)');
            },function () {
                /*判断当前hover的是否是已选择的元素*/
                if($(this).prop('class')==hovers.prop('class')){
                    return false;
                }
                /*移除hover结束的元素的class*/
                $(this).removeClass('selected').find('a').css('color','rgb(255,255,255)');

                /*恢复已选的元素class*/
                hovers.addClass('selected').find('a').css('color',selectColor);
            }
        );
    }
    /*调用菜单hover样式函数*/
    munsStyle();



};
