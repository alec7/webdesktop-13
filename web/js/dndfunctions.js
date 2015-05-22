/*
 * Author: Ivan Dublianskyi 2015
 */
$(document).ready(function(){
//var dropTarget = $('.dropzone'),
    var html = $('html');
    var changes = true;
    
if (changes == true){
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
    $('.dropzone').bind('drop', function(){
        $(this).addClass("droped");
    });
}

    $('.dropzone').html("<div class='closeDropzone'></div>");
    $(".closeDropzone").click(function(){
            $('.dropzone-wrap').animate({
                                    width: '10%'
                                    },300
                                ).fadeOut(250);
    });
    
    $(document).on("click", ".file-upload", function(){
        changes = false;
        $('.dropzone-wrap').fadeIn(250).animate({
                width: '50%'
                },300
            );
    });
        

    
});














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
