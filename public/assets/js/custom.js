
$('.delete').on('click',function()
{
   if(!confirm('Desa '))
       return false;
});


$('#changeLanguaje').on('change',function(){
   //var lang = $.get('changeLanguaje/'+ this.value);
    window.location.href = "changeLanguaje/"+this.value;
});

$('#dataTable').DataTable({
    columnDefs: [
        { targets: 'no-sort', orderable: false }
    ],
    "order": [[ 1, "asc" ]],
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
    }

});

//datepicker en forms
$('.datepicker').datepicker({
    dateFormat: "dd-mm-yy"
});


tinymce.init({
    plugins: "textcolor",
    statusbar: false,


    selector: ".mytextarea",
    toolbar: [
        "undo redo | styleselect | bold italic | forecolor backcolor alignleft aligncenter alignright",
    ],
    menubar: false


});
