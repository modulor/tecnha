$(function(){

    $("nav ul.navbar-nav li a").click(function(e){
        e.preventDefault();
        var target = $(this).data('target');
        if(target != 'home')
            $("html, body").animate({scrollTop: $('#'+target).offset().top - 80}, 1000);
        else
            $("html, body").animate({scrollTop: 0}, 1000);
    })    

});