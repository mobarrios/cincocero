
$('.delete').on('click',function()
{
   if(!confirm('Desa '))
       return false;
});


$('#changeLanguaje').on('change',function(){
   //var lang = $.get('changeLanguaje/'+ this.value);
    window.location.href = "changeLanguaje/"+this.value;
});