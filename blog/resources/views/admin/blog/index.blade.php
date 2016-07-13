@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <span>You are logged in!</span>

              @if (Session::has('message'))
              <div class="flash alert-info">
              <p>{{ Session::get('message') }}</p>
              </div>
              @endif

                     <h3> Blog List</h3>
                     <a href="{{ url('/add') }}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i> Add New Blog</a>
<table class="table table-striped">
<thead>
<tr>
  <th>Title</th>
  <th>Excerpt</th>
  <th>Published Time</th>
  <th>Author's Name</th>
</tr>
</thead>
<tbody>

@if($blogs->isEmpty())
     
     <tr><td colspan='5'>No data found</td></tr>
@else
    
    @foreach($blogs as $blog)
   <tr>
  <td>{{ $blog->title }}</td>
  <td><?php echo substr($blog->body,0,100);?></td>
  <td>{{ date('F d, Y h:m', strtotime($blog->published_at)) }}</td>
  <td>{{$blog->user->name}} </td>
  <td>      <a href="{{ url('/delete') }}/{{$blog->id}}" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove-sign"></i> Delete Blog</a>
      <a href="{{ url('/edit') }}/{{$blog->id}}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i> Edit Blog</a>
   </td>  
   </tr>   
   
@endforeach
@endif

                </div>
             
                   
                
            </div>
        </div>
    </div>
</div>
@endsection
