$(document).ready(function(){
    var folderClose = $(".folder-close");

    folderClose.first().removeClass('folder-close');
    folderClose.first().addClass('folder-open');

    $(".folder-close").parent().on("click",".folder-close",function(ev){
        //ev.preventDefault();
        ev.stopPropagation();

        $(this).find(".folder-open").addClass("folder-close").removeClass("folder-open");
        $(this).addClass("folder-open").removeClass("folder-close");
    });

    $(".folder-open").parent().on("click",".folder-open",function(ev){
        //ev.preventDefault();
        ev.stopPropagation();

        $(this).addClass("folder-close").removeClass("folder-open");
    });
});