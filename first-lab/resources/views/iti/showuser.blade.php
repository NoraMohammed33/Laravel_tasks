@extends('layouts.app')
@section('title')
    All products from database
@endsection

@section('body')
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <div class="d-flex">
                <h5 class="card-title">{{$post->title}}</h5>
            </div>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection



