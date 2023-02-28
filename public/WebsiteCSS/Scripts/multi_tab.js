$(window).load(function(){
    $('.all_tab .div_tab').hide(); // Hide all divs
    $('.current_tab').each( function(){
    $($(this).attr('href')).show();
    }
    );
    $('.all_tab ul.tab_nav li a').click(function(){ //When any link is clicked
    var current_tab = $(this).closest('.tab_nav').find('.current_tab');
    $($(current_tab).attr('href')).hide();
    current_tab.removeClass('current_tab');
    $(this).addClass('current_tab'); //Set clicked link class to active
    $($(this).attr('href')).show();
    return false;
    });
    });//]]>