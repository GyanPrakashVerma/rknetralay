@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text"> Add service</h5>
    </div>
    <div class="card-block">
       <form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
             <label for="title" class="form-control-label">Title</label>
             <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Short Description</label>
            <input type="text" name="s_desc" class="form-control" id="title" placeholder="Enter short description">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Tags</label>
            <input type="text" name="tag" class="form-control" id="title" placeholder="Enter Tags">
         </div>
          <div class="form-group">
             <label for="image" class="form-control-label">Image</label>
             <input type="file" name="image" class="form-control" id="image" placeholder="Gallery Photos">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>
 @endsection