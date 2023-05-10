@extends('layouts.app')

@section('title')
    ITI Website
@endsection
@section('body')

<form method="POST" action="/iti"  class="w-50" style="margin-top:60px; margin-left:200px;" >
            @method('post')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label"> Title</label>
                <input type="text" name="title" class="form-control" id="title" >
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea  name="description" class="form-control" id="description" rows="4" cols="50"></textarea>
            </div>
            <div class="mb-3">
                <label for="postCreator" class="form-label">post Creator</label>
                <select name="postedby">
                    @foreach($users as $user)
                    <option value="{{$user->name}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class=" mb-3">
                <input type="submit" value="Create" name="Create" class="btn btn-success " />
            </div>
        </form>
@endsection



