/*
 * Author: Ivan Dublianskyi 2015
 */
//var dropTarget = $('.dropzone'),
    var html = $('html');

html.bind('dragenter', function(){
    $('.dropzone-wrap').fadeIn(250).animate({
            width: '50%'
            },300
        );
});
$('.dropzone').bind('dragenter', function(){
    $(this).addClass("hover");
});
$('.dropzone').bind('dragleave', function(){
    $(this).removeClass("hover");
    $('.dropzone-wrap').animate({
                            width: '10%'
                            },300
                        ).fadeOut(250);
    html.bind('dragleave', function(){
        $('.dropzone-wrap').animate({
                                width: '10%'
                                },300
                            ).fadeOut(250);
    });
});



$(document).ready(function(){
    $('.dropzone').html("<div class='closeDropzone'></div>");
$(".closeDropzone").click(function(){
        $('.dropzone-wrap').animate({
                                width: '10%'
                                },300
                            ).fadeOut(250);
});
    
});




























//html.bind('dragout', function () {
//    alert("aaa");
//    //$('.dropzone-wrap').removeClass("vanishIn").addClass("vanishOut");
//});

//html.bind('dragover', function(){
//    showDrag = true; 
//});
//html.bind('dragleave', function (e) {
//    showDrag = false; 
//    clearTimeout( timeout );
//    timeout = setTimeout( function(){
//        if( !showDrag ){ dropTarget.removeClass('dragging'); }
//    }, 200 );
//});
