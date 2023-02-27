/*==============================================
	meanmenu
  ==============================================*/

  $(document).ready(function(){
    $("#globalNavi").meanmenu();

    $(".block-payment").css("height",$(".center-login").height());

    //$('[data-toggle="tooltip"]').tooltip();

    dropDownToggle = function (id1, id2) {
        $( "." + id1 ).toggleClass('hidden');

        // change drop down icon
        $( ".ar_more " ).removeClass('glyphicon-menu-up' );
        $( ".ar_more " ).addClass('glyphicon-menu-down');

        setTimeout(function() {
            if ($("." + id1).hasClass('hidden')) {
                $( "#" + id2 ).removeClass('glyphicon-menu-up' );
                $( "#" + id2 ).addClass('glyphicon-menu-down');
            } else {
                $( "#" + id2 ).removeClass('glyphicon-menu-down');
                $( "#" + id2 ).addClass('glyphicon-menu-up');
            }
        }, 10);

        $('.cnt').not('.' + id1).addClass('hidden');
    }

    $('#btn-quenmatkhau').on('click', function() {
        $('#exampleModal2').modal('hide');
        $('#exampleModal3').modal('show');
        $('#exampleModal3 .right_dangky').css('height', 877);
    })

    $('.block-movie2').on('click','img',function() {
        let imgSrc = $(this).attr('src');
        $('.main_image_gt').animate({opacity:0}, 'slow', function() {
            $(this).attr('src', imgSrc);
            $(this).animate({opacity:1}, 'fast')
        });
    })

    //$('.carousel').carousel({
    //  interval: 500
    //})
});
