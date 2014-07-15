$(function() {
    if (typeof window.navid == 'undefined' || window.navid == null) {
        setMenuBack(0);
    } else {
        setMenuBack(window.navid);
    }
    /* 导航菜单*/
    $('.navbar li').hover(function() {
        $(this).addClass('nav-style').append('<div class="animal"></div>');
        $(this).siblings('li').removeClass('nav-style').find('div').stop(true).animate({'top': '-100%'}).remove();
        $(this).find('div').animate({'top': '0'});
    }, function() {
        $(this).removeClass('nav-style').find('div').stop(true).animate({'top': '-100%'}).remove();
        setMenuBack(window.navid);
    });

    //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
    $(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
            $("#back-to-top").fadeIn(500);
        } else {
            $("#back-to-top").fadeOut(500);
        }
    });

    //当点击跳转链接后，回到页面顶部位置
    $("#back-to-top").click(function() {
        $('body,html').animate({scrollTop: 0}, 500);
        return false;
    });

    /* meadia 切换*/
    $(".center-left a").hover(function() {
        if (!$(this).hasClass('select')) {
            $(this).addClass('hover');
        }
    }, function() {
        $(this).removeClass('hover');
    });

});

function setMenuBack(index) {
    $('.navbar li').eq(index).addClass('nav-style').append('<div class="animal"></div>').find('div').animate({'top': '0'});
}