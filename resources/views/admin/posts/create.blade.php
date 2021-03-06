@extends('layouts.admin')


@section('content')
    <h1>Create Posts</h1>
    <div class="row">
    @include('includes.form_error')
    </div>
    <div class="row">
        {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('title','Title:') !!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>

             <div class="form-group">
                {!! Form::label('category_id','Category:') !!}
                 {!! Form::select('category_id',[''=>'Choose Categories']+$category,null,['class'=>'form-control']) !!}
             </div>

             <div class="form-group">
                 {!! Form::label('photo_id','Photo:') !!}
                {!! Form::file('photo_id') !!}
              </div>
            <div class="form-group">
                {!! Form::label('content','Content:') !!}
                {!! Form::textarea('content',null,['class'=>'form-control','rows'=>3]) !!}
             </div>
            <div class="form-group">
                {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}


    </div>


@stop