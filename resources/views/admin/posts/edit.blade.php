@extends('layouts.admin')


@section('content')
    <h1>Edit Post</h1>
    <div class="row">
        @include('includes.form_error')
    </div>
    <div class="row">
    <div class="col-sm-3">
        <img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
    </div>
    <div class="col-sm-6">
        {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true]) !!}
        {{csrf_field()}}
        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>

                     <div class="form-group">
                        {!! Form::label('category_id','Category:') !!}
                         {!! Form::select('category_id',$category,null,['class'=>'form-control']) !!}
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
            {!! Form::submit('Update Post',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]]) !!}
        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}




        {!! Form::close() !!}
    </div>
    </div>

@stop