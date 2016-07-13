@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create Blog</div>

                <div class="panel-body">


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<?php //echo Form::model($blog, array('route' => array('blog.save', 1)));?>


{{ Form::model($blog, array('route' => 'blog.save')) }}    

        <!-- name -->
        <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title') !!}
        </div>
        <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::textarea('body') !!}
        </div>

         <div class="form-group">
        {!! Form::label('active', 'Active') !!}
        {!! Form::checkbox('active') !!}
        </div>

          

        {{ Form::submit('Save') }}

    {!! Form::close() !!}

  </div>
             
                   
                
            </div>
        </div>
    </div>
</div>
@endsection
