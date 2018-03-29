@extends('master.app')

@section('content')
<h1>All Posts
<a href="" classs="btn btn-sm btn-primary">creat new post</a></h1>
  <div class="row">
    <div calss="col-lg-10">
    <table class="table table-bordered">
       <tr>
            <th>id</th>
            <th>title</th>
            <th>content</th>
       </tr>
        @foreach ($posts as $rs)
       <tr>
           <td>{{ $rs->post_id}}</td>
           <td>{{ $rs->title}}</td>
           <td>{{ $rs->body}}</td>
       </tr>
       $endforeach
      </table>
     </div>
    </div>

@endsections





