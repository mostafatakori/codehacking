@extends('layouts.admin')


@section('content')

    <h1>All Posts</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Category</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Created_at</th>
            <th>Updated_at</th>

        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category ? $post->category->name : 'Uncategories'}}</td>
            <td>{{$post->title}}</td>
            <td>{{str_limit($post->content, 15)}}</td>
            <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
            <td>{{$post->created_at->diffForHumans()}}</td>
            <td>{{$post->updated_at->diffForHumans()}}</td>
            <th><a href="{{route('posts.edit',$post->id)}}">Edit</a></th>

        </tr>
        @endforeach
            @endif

        </tbody>
    </table>



@stop