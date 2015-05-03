function showDropzone(){
    
}
var dropTarget = $('.dropzone'),
    html = $('html'),
    showDrag = false,
    timeout = -1;

html.bind('dragenter', function () {
    $('.dropzone-wrap').addClass("magictime vanishIn");
});
//html.bind('dragout', function () {
//    alert("aaa");
//    //$('.dropzone-wrap').removeClass("vanishIn").addClass("vanishOut");
//});
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
