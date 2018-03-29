@extends('master.app')

@section('content'
<h1>)Creat Post </h1>
<hr>

<div class="row">
     <div class="col-log-10">
        <form action="{{ route('posts.store') }}" method="post">
        {{ crf_field() }}
           <div class="form-group">
              <lable for="title_input">Title</lable>
              <input type="text" calss="from-control" name="title">
            </div>
            <div calss="form-group">
              <lable for="content_input">content</lable>
              <textarea rows="4" class="form-control" name="body" ></textarea>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary">save</button>
            </div>
          </form>
        </div>
      </div>
@endsection                