@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Categories</div>

              <div class="card-body">
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
                                      <button type="button" class="btn btn-danger">Delete</button>
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
@endsection
