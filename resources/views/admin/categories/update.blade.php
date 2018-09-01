@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Update Category</div>

              <div class="card-body">

                <form id="category_form">
                  <div class="form-group">
                    <label for="category_name">Name</label>
                    <input value="{{$data->name}}" type="text" class="form-control" id="category_name" name="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="category_slug">Slug</label>
                    <input value="{{$data->slug}}" type="text" class="form-control" id="category_slug" name="slug" placeholder="Enter Slug">
                  </div>
                  <button type="submit" class="btn btn-primary">Save</button>
                </form>

              </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#category_form').submit(function(e){
      e.preventDefault();

      $.ajax({
        url: '{{route('c_panel_categories_edit')}}',
        method: 'put',
        data: {
          id: '{{ $data->id }}',
          name: $('#category_name').val(),
          slug: $('#category_slug').val(),
          _token: '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(response) {

          if(response.success) {
            alert('updated successfully');
            window.location.href = '{{route('c_panel_categories_list')}}';
          }

        }
      });

    })
</script>
@endsection
