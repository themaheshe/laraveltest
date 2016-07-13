@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Blog Detail</div>

                <div class="panel-body">

                   <p><strong>Title</strong>: {{$blog->title}}</p>
                   <p><strong>Body</strong>: {{$blog->body}}</p>
                   <p><strong>Published Date</strong>: {{ date('F d, Y h:m', strtotime($blog->published_at)) }}</p>
                   <p><strong>Author</strong>: {{$blog->user->name}}</p>
  

                </div>
             
                   
                
            </div>
        </div>
    </div>
</div>
@endsection
