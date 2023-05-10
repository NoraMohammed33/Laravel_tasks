@extends('layouts.app')

@section('title')
    ITI Website
@endsection
@section('body')

<form method="POST" action="{{ route('iti.update',$post->id) }}"  class="w-50" style="margin-top:60px; margin-left:200px;" >
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label"> Title</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}" id="title" >
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea  name="description" class="form-control" value="{{ $post->description }}" id="description" rows="4" cols="50"></textarea>
            </div>
            <div class="mb-3">
                <label for="postCreator" class="form-label">post Creator</label>
                <select name="postedby">
                    @foreach($users as $user)
                    @if($user["name"]==$post["postedby"])
                    <option selected value="{{$user->name}}">{{$user->name}}</option>
                    @else
                    <option value="{{$user->name}}">{{$user->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class=" mb-3">
                <input type="submit" value="Update" name="Create" class="btn btn-success " />
            </div>
        </form>
@endsection



