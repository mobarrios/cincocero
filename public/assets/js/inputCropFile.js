$(document).on('click', '#close-preview', function(){
    $('.image-crop-preview').popover('hide');
    $('.image-crop-preview').hover(
        function () {
            $('.image-crop-preview').popover('show');
        },
        function () {
            $('.image-crop-preview').popover('hide');
        }
    );
});

function paintOnCanvas(coords) {
    var canvas = document.getElementById('canvasJCrop');
    var context = canvas.getContext('2d');
        console.log(coords)
    canvas.width = coords.w;
    canvas.height = coords.h;
    console.log(coords)
    var img = document.getElementById("cropeable")
    context.drawImage(img, coords.x, coords.y, coords.w, coords.h, 0, 0, coords.w, coords.h);



    // if (canvas.height > 82 || canvas.width > 300) {
    //
    //     var imgToResize = new Image();
    //
    //     imgToResize.onload = function () {
    //
    //         var maxWidth = 300, maxHeight = 82;
    //
    //         //Image size
    //         var width = imgToResize.width,
    //             height = imgToResize.height;
    //
    //         //Resizing...
    //         if (width > maxWidth) {
    //             height *= maxWidth / width;
    //             width = maxWidth;
    //         }
    //
    //         if (height > maxHeight) {
    //             width *= maxHeight / height;
    //             height = maxHeight;
    //         }
    //
    //     };
    //
    //     imgToResize.src = canvas.toDataURL();
    // }
}

$(function() {
    $(".image-crop-preview-input input:file").change(function (){
        var img = $('<img/>', {
            id: 'cropeable'
        });
        var file = this.files[0];
        var reader = new FileReader();

        reader.onload = function (e) {
            img.attr('src', e.target.result);
            $("#remito").append($(img)[0].outerHTML);

            $.Jcrop("#remito>img",{
                aspectRatio: null,
                onSelect: paintOnCanvas
            })
        }
        reader.readAsDataURL(file);
    });
});
