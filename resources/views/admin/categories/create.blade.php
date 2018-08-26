@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Create Category</div>

              <div class="card-body">

                <form id="category_form">
                  <div class="form-group">
                    <label for="category_name">Name</label>
                    <input type="text" class="form-control" id="category_name" name="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="category_slug">Slug</label>
                    <input type="text" class="form-control" id="category_slug" name="slug" placeholder="Enter Slug">
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
        url: '{{route('c_panel_categories_add')}}',
        method: 'post',
        data: {
          name: $('#category_name').val(),
          slug: $('#category_slug').val(),
          _token: '{{ csrf_token() }}'
        },
        dataType: 'json',
        success: function(response) {
          alert(response);
        }
      });

    })
</script>
@endsection
