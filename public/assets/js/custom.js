
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