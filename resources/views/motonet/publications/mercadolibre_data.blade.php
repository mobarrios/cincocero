<label>Categorias</label>

<div id="categories" class="row">

    <div class="col-xs-6" data-id="1">

        <ul class="cat">
        @foreach($categorias as $cat)
            <li  data-id="{{$cat->ml_id}}">{{$cat->name}}</li>
        @endforeach

        </ul>


    </div>

</div>

@section('js')
   <script>
//        var c = 0;
        var id;

       $('.cat').on('click','li',function(ev){
           ev.stopPropagation();
           ev.preventDefault();
//           c++;

//           if($(this).attr('data-id') != id){
               id = $(this).attr('data-id');
               var self = $(this); //self es el <li>

               $.get('ml_sub_categories/'+ id , function(data)  {

                   $(self).append("<ul class='subcat' data-id='"+id+"'></ul>");

                   $.each(data['children_categories'], function(k,v){

                        $(self).find(".subcat[data-id='"+id+"']").append("<li data-id='"+v['id']+"'>"+v['name']+"</li>");
                   });

               });
//           }
       });

       /*
       var id;
       var option;

       $('.categories').on('click', function () {
           //data_id = $(this).attr('data-id');
            id = $(this).val();
           var dataId = $(this).parent().attr('data-id').val();
           alert(dataId);

           var select = "<div class='col-xs-3'><select size='10' class='categories count-"+count+" form-control'></select></div>";
           $('#categories').before(select);

           $.get('ml_sub_categories/'+ id , function(data){

               $.each(data['children_categories'], function(k,v){

                   //$('.sub_a').append('<a class="categories list-group-item" data-id="'+v['id']+'">'+v['name']+'</a>');

                    // '<option value='+v['id']+'>'+v['name']+'</option>';

                   $("#categories").find(c).append('<option value='+v['id']+'>'+v['name']+'</option>');

               });

           });
       });*/

   </script>
@endsection