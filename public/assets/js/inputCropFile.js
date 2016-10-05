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

$(function() {
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });

    closebtn.attr("class","close pull-right");
    $('.image-crop-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Vista previa</strong>"+$(closebtn)[0].outerHTML,
        content: "No es una imágen",
        placement:'bottom'
    });

    $('.image-crop-preview-clear').click(function(){
        $('.image-crop-preview').attr("data-content","").popover('hide');
        $('.image-crop-preview-filename').val("");
        $('.image-crop-preview-clear').hide();
        $('.image-crop-preview-input input:file').val("");
        $(".image-crop-preview-input-title").text("Buscar");
    });

    $(".image-crop-preview-input input:file").change(function (){
        var img = $('<img/>', {
            id: 'cropeable',
            width:750
        });
        var file = this.files[0];
        var reader = new FileReader();

        reader.onload = function (e) {
            $(".image-crop-preview-input-title").text("Cambiar");
            $(".image-crop-preview-clear").show();
            $(".image-crop-preview-filename").val(file.name);
            img.attr('src', e.target.result);
            $(".image-crop-preview").attr("data-content",$(img)[0].outerHTML).popover("show");

            $("#cropeable").Jcrop({
                aspectRatio: null
            })

        }
        reader.readAsDataURL(file);
    });
});
