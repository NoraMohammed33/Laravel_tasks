@extends('layouts.app')
@section('title')
    All posts from database
@endsection

@section('body')
    <h1> All users </h1>
    <table class="table">
        <tr> 
            <th> ID </th> 
            <th> name </th> 
            <th> email </th>
            <th> email_verified_at </th> 
        </tr>
        @foreach($users as $user)
            <tr>
                <td> {{$user->id}}</td> 
                <td> {{$user->name}}</td> 
                <td> {{$user->email}}</td>
                <td> {{$user->email_verified_at}}</td>
            </tr>
        @endforeach
    </table>
    {{ $users->links() }}
@endsection

