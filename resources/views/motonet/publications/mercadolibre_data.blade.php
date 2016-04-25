<label>Categorias</label>

<div id="categories" class="row">

    <div class="col-xs-3" data-id="1">
        <select size="10" class="categories form-control">
            @foreach($categorias as  $cat => $k)
                <option value="{{$k->id}}">{{$k->name}}</option>
            @endforeach
        </select>
    </div>

</div>

@section('js')
   <script>
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
       });
   </script>
@endsection