<label>Categorias</label>

<div id="categories" class="row">

    <div class="col-xs-3">
        <select size="10" class="categories form-control">
            @foreach($categorias as  $cat => $k)
                <option value="{{$k->id}}">{{$k->name}}</option>
            @endforeach
        </select>
    </div>

</div>

@section('js')
   <script>
       var data_id;
       var option;
       var count = 0;

       $('.categories').on('click', function () {
           //data_id = $(this).attr('data-id');
            data_id = $(this).val();

           var select = "<div class='col-xs-3'><select size='10' class='categories count-"+count+" form-control'></select></div>";
           $('#categories').before(select);

           $.get('ml_sub_categories/'+ data_id , function(data){

               $.each(data['children_categories'], function(k,v){

                   //$('.sub_a').append('<a class="categories list-group-item" data-id="'+v['id']+'">'+v['name']+'</a>');

                    // '<option value='+v['id']+'>'+v['name']+'</option>';
                   var c = "count-"+count;
                   $("#categories").find(c).append('<option value='+v['id']+'>'+v['name']+'</option>');
                   count++;
               });

           });
       });
   </script>
@endsection