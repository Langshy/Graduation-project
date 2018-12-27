
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

Vue.component('example-component', require('./components/ExampleComponent.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


$(function () {

    /* 返回站顶 */
    $(window).scroll(function() {
        /* 判断滚动条 距离页面顶部的距离 100可以自定义*/
        if($(window).scrollTop() > 200) {
            $("#top").fadeIn(100); /* 这里用.show()也可以 只是效果太丑 */
        } else {
            $("#top").fadeOut(100);
        }
    });

    $(function () {
        $('#top').on('click',function () {
            $('body,html').animate({
                scrollTop: 0
            }, 1000);
            return false;
        });
        
        /* search */
        $('.search-close').on('click',function () {
            $('#search').fadeOut(500);
        });

        $('.search').on('click',function () {
           $('#search').fadeIn(500);
        });
    });
});


