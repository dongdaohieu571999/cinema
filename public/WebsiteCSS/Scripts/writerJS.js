$(document).ready(function() {
    $('#tab3,#tab2,#tab4').css('opacity', 0);
    $('#tab3,#tab2,#tab4').css('z-index', 0);
$('#tab_1').click(function(){
        $('#tab2,#tab3,#tab4').css('opacity', 0);
        $('#tab2,#tab3,#tab4').css('z-index', 0);
        $('#tab_1').addClass('current_tab');
        $('#tab1').css('opacity', 1);
        $('#tab1').css('z-index', 3);
        $('#tab_2,#tab_3,#tab_4').removeClass('current_tab')

    });
    $('#tab_2').click(function(){
        $('#tab1,#tab3,#tab4').css('opacity', 0);
        $('#tab1,#tab3,#tab4').css('z-index', 0);
        $('#tab_2').addClass('current_tab');
        $('#tab2').css('opacity', 1);
        $('#tab2').css('z-index', 3);
        $('#tab_1,#tab_3,#tab_4').removeClass('current_tab')

    });
    $('#tab_3').click(function(){
        $('#tab2,#tab1,#tab4').css('opacity', 0);
        $('#tab2,#tab1,#tab4').css('z-index', 0);
        $('#tab_3').addClass('current_tab');
        $('#tab3').css('opacity', 1);
        $('#tab3').css('z-index', 3);
        $('#tab_2,#tab_1,#tab_4').removeClass('current_tab')

    });
    $('#tab_4').click(function(){
        $('#tab2,#tab1,#tab3').css('opacity', 0);
        $('#tab2,#tab1,#tab3').css('z-index', 0);
        $('#tab_4').addClass('current_tab');
        $('#tab4').css('opacity', 1);
        $('#tab4').css('z-index', 3);
        $('#tab_2,#tab_1,#tab_3').removeClass('current_tab')

    });
    
    
    $('#bl_movie,#other_movie').hide();;
    $('.tt_movie span').click(function(){
        $('#tt_movie').show();
        $('#lc_movie,#bl_movie,#other_movie').hide();
        $('.tt_movie span').addClass('active');
        $('.lc_movie span,.bl_movie span,.other_movie span').removeClass('active')

    });
    
    $('.lc_movie span').click(function(){
        $('#lc_movie').show();
        $('#tt_movie,#bl_movie,#other_movie').hide();
        $('.lc_movie span').addClass('active');
        $('.tt_movie span,.bl_movie span,.other_movie span').removeClass('active')

    });
    $('.bl_movie span').click(function(){
        $('#bl_movie').show();
        $('#lc_movie,#tt_movie,#other_movie').hide();
        $('.bl_movie span').addClass('active');
        $('.lc_movie span,.tt_movie span,.other_movie span').removeClass('active')

    });
    $('.other_movie span').click(function(){
        $('#other_movie').show();
        $('#lc_movie,#tt_movie,#bl_movie').hide();
        $('.other_movie span').addClass('active');
        $('.lc_movie span,.tt_movie span,.bl_movie span').removeClass('active')

    });
    
    
    $('.list_movie .movie_box .tranner_overlay').hover(function(){
        $(this).toggleClass('traner_up');
    });
    
    $('.content_movie .left_content_movie .img .tranner_overlay').hover(function(){
        $(this).toggleClass('traner_up');
    });


$('.box_left h3 span.moviehot').click(function(){
        $('#moviehot').show();
        $('#news').hide();
        $(this).addClass('active');
        $('.box_left h3 span.news').removeClass('active')

    });
    
    $('.box_left h3 span.news').click(function(){
        $('#news').show();
        $('#moviehot').hide();
        $(this).addClass('active');
        $('.box_left h3 span.moviehot').removeClass('active')

    });
    
    $('.box_left h3 span.about_home').click(function(){
        $('#about_home').show();
        $('#login_home').hide();
        $(this).addClass('active');
        $('.box_left h3 span.login_home').removeClass('active')

    });
    
    $('.box_left h3 span.login_home').click(function(){
        $('#login_home').show();
        $('#about_home').hide();
        $(this).addClass('active');
        $('.box_left h3 span.about_home').removeClass('active')

    });
    
    /*$('#comment_home').css('opacity', 0);
    $('#comment_home').css('z-index', 0);
    $('.box_left h3 span.fb_home').click(function(){
        $('#fb_home').css('opacity', 2);
        $('#fb_home').css('z-index', 2);
        $('#comment_home').css('opacity', 0);
        $('#comment_home').css('z-index', 0);
        $(this).addClass('active');
        $('.box_left h3 span.comment_home').removeClass('active')

    });
    
    $('.box_left h3 span.comment_home').click(function(){
        $('#comment_home').css('z-index', 2);
        $('#comment_home').css('opacity', 2);
        $('#fb_home').css('opacity', 0);
        $('#fb_home').css('z-index', 0);
        $(this).addClass('active');
        $('.box_left h3 span.fb_home').removeClass('active')

    });*/
    
    $('.tab_card_list').click(function(){
        $('.show_card_list').toggleClass('block');
    });
    /*---------------more_less-----------*/
    var showChar = 300;
var ellipsestext = "...";
var moretext = "Xem thêm";
var lesstext = "Thu gọn";
$('.more').each(function() {
    var content = $(this).html();

    if(content.length > showChar) {

        var c = content.substr(0, showChar);
        var h = content.substr(showChar-1, content.length - showChar);

        var html = c + '<span class="moreelipses">'+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';

        $(this).html(html);
    }

});

$(".morelink").click(function(){
    if($(this).hasClass("less")) {
        $(this).removeClass("less");
        $(this).html(moretext);
    } else {
        $(this).addClass("less");
        $(this).html(lesstext);
    }
    $(this).parent().prev().toggle();
    $(this).prev().toggle();
    return false;
});
});