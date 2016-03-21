
//color picker
$(function(){
    var colpick = $('.demo').each( function() {
        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            inline: $(this).attr('data-inline') === 'true',
            letterCase: 'lowercase',
            opacity: false,
            change: function(hex, opacity) {
                if(!hex) return;
                if(opacity) hex += ', ' + opacity;
                try {
                    console.log(hex);
                } catch(e) {}
                $(this).select();
            },
            theme: 'bootstrap'
        });
    });

    var $inlinehex = $('#inlinecolorhex h3 small');
    $('#inlinecolors').minicolors({
        inline: true,
        theme: 'bootstrap',
        change: function(hex) {
            if(!hex) return;
            $inlinehex.html(hex);
        }
    });
});

$('.delete').on('click',function()
{
   if(!confirm('Eliminar Registro ? '))
       return false;
});


$('#changeLanguaje').on('change',function(){
   //var lang = $.get('changeLanguaje/'+ this.value);
    window.location.href = "changeLanguaje/"+this.value;
});

//$('#dataTable').DataTable({
//    columnDefs: [
//        { targets: 'no-sort', orderable: false }
//    ],
//    "order": [[ 1, "asc" ]],
//    "language": {
//        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
//    }
//
//});


//tinymce.init({
//    plugins: "textcolor",
//    statusbar: false,
//
//
//    selector: ".mytextarea",
//    toolbar: [
//        "undo redo | styleselect | bold italic | forecolor backcolor alignleft aligncenter alignright",
//    ],
//    menubar: false
//
//
//});

var $lightbox = $('#lightbox');

$('[data-target="#lightbox"]').on('click', function(event) {
    var $img = $(this).find('img'),
        src = $img.attr('src'),
        alt = $img.attr('alt'),
        css = {
            'maxWidth': $(window).width() - 100,
            'maxHeight': $(window).height() - 100
        };

    $lightbox.find('.close').addClass('hidden');
    $lightbox.find('img').attr('src', src);
    $lightbox.find('img').attr('alt', alt);
    $lightbox.find('img').css(css);
});

$lightbox.on('shown.bs.modal', function (e) {
    var $img = $lightbox.find('img');

    $lightbox.find('.modal-dialog').css({'width': $img.width()});
    $lightbox.find('.close').removeClass('hidden');
});


    //datepicker en forms
//$('.datepicker').datepicker({
//    dateFormat: "dd-mm-yy"
//});
