@extends('layouts.app')
@section('title')
    All posts from database
@endsection

@section('body')
    <h1 class="mt-5"> All posts </h1>
        <div class="d-flex flex-wrap mt-5" style="margin: 20px;">
        @foreach($posts as $post)
            <!-- @dump($post) -->
            <div class="card m-2" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
        </div>
        <a href="{{route('iti.createPost')}}"  class="btn btn-primary">  Create post</a> 
@endsection

