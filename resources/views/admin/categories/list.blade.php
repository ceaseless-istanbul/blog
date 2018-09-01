@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Categories</div>

              <div class="card-body">
                  <a href="{{route('c_panel_categories_create')}}" class="btn btn-primary">Create</a>
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>Slug</th>
                              <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($data as $category)
                              <tr>
                                  <td>{{$category->name}}</td>
                                  <td>{{$category->slug}}</td>
                                  <td>
                                      <a href="{{route('c_panel_categories_update', $category->id)}}" class="btn btn-info">Edit</a>
                                      <button type="button" class="btn btn-danger" onclick="deleteCat({{$category->id}})">Delete</button>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
            </div>
        </div>
    </div>
</div>

<script>

  function deleteCat(id)
  {
      $.ajax({
          url: '{{route('c_panel_categories_delete')}}',
          method: 'delete',
          data: {
              id: id,
              _token: '{{ csrf_token() }}'
          },
          dataType: 'json',
          success: function(response) {

              if(response.success)
              {
                  alert('deleted');
                  window.location.href = '{{route('c_panel_categories_list')}}';
              }

          }
      });

  }

</script>
@endsection
