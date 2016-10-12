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

    var img2 = new Image();
    img2.src = canvas.toDataURL();

    var tipos = $(".tipos input");
    var input = null;

    $.each(tipos,function(val,inputs){
       if($(tipos[val]).prop('checked')){
            input = $(tipos[val]);
       }
    });

    if(input == null){
        alert("Elija una de las dos opciones");
        return;
    }

    OCRAD(img2, function(text){
        $("input[name="+input.attr("id")+"]").val(text);
    })
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

            $(".tipos").removeClass("hidden");

            $.Jcrop("#remito>img",{
                aspectRatio: null,
                onSelect: paintOnCanvas
            })
        }
        reader.readAsDataURL(file);
    });
});
