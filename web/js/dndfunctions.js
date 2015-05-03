function showDropzone(){
    
}
var dropTarget = $('.dropzone'),
    html = $('html'),
    showDrag = false,
    timeout = -1;

html.bind('dragenter', function () {
//    $('.dropzone-wrap').fadeIn(function(){
//        $(this).addClass("magictime vanishIn");
//    });
    $('.dropzone-wrap').addClass("magictime vanishIn");
});
//$(".vvv").click(function(){
//    $(this).fadeIn(function(){
//        $(this).addClass("magictime vanishIn");
//    });
//            
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
