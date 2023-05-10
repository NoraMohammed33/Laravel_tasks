@extends('layouts.app')
@section('title')
    All posts from database
@endsection

@section('body')
    <h1> All posts </h1>
    <table class="table">
        <tr> 
            <th> ID</th> 
            <th> Title</th> 
            <th> description</th>
            <th>Posted Py</th>
            <th>Image</th>
            <th> Show</th> 
            <th> Edit</th> 
            <th> Delete</th> 
        </tr>
        @foreach($posts as $post)
            <!-- @dump($post) -->
            <tr>
                <td> {{$post->id}}</td> 
                <td> {{$post->title}}</td> 
                <td> {{$post->description}}</td>
                <td> {{$post->postedby}}</td>
                <td> {{$post->image}}</td>
                <td>  <a href="{{route('iti.show',$post->id)}}"  class="btn btn-info">  Show</a> </td>
                <td>  <a href=""  class="btn btn-warning">  Edit</a> </td>
                <td>  <a href="{{route('iti.destroy', $post->id)}}"  class="btn btn-danger">  Delete</a> </td>
            </tr>
        @endforeach
    </table>
    <td>  <a href="{{route('iti.createPost')}}"  class="btn btn-primary">  Create post</a> </td>
@endsection

