<label>Categorias</label>

<div id="categories" class="row">

    <div class="col-xs-3" data-id="1">

        <ul class="cat">
        {{--@foreach($categorias as $cat)--}}
            {{--<li  data-id="{{$cat->ml_id}}">{{$cat->name}}</li>--}}
        {{--@endforeach--}}
            <li data-id="1">categoria 1</li>
            <li data-id="2">categoria 2</li>
            <li data-id="3">categoria 3</li>
            <li data-id="4">categoria 4</li>
            <li data-id="5">categoria 5</li>
            <li data-id="6">categoria 6</li>
            <li data-id="7">categoria 7</li>
            <li data-id="8">categoria 8</li>
            <li data-id="9">categoria 9</li>
            <li data-id="10">categoria 10</li>
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

                    $(self).append("<ul class='subcat'></ul>");

                   $.each(data['children_categories'], function(k,v){

    //                   $(self).find(".cat").append('<li data-id="'+v['id']+'">'+v['name']+'</li>');
                        $(self).find(".subcat[data-id='"+v['id']+"']").html("<li data-id='12'>sub-categoria"+v['name']+"</li>");

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