@extends('layouts.app')

@section('title')
    ITI Website
@endsection
@section('body')


    <table class="table mt-5" >
            <tr>
                <th> ID</th> 
                <th> Title</th> 
                <th> Posted by </th> 
                <th> Created At</th> 
                <th> Action </th>
            </tr>

        @foreach($posts as $post)
            <tr>
                <td> {{$post["id"]}}</td>
                <td> {{$post["title"]}}</td>
                <td> {{$post["postedby"]}}</td>
                <td> {{$post["createdAt"]}}</td>
                <td>    <a class='btn btn-primary' > View</a>
                        <a class='btn btn-warning' > Edit</a>
                        <a class='btn btn-danger'> Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
