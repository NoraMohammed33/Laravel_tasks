<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\user;
use Carbon\Carbon;


class itiController extends Controller
{
    // function get_posts(){
    //     $posts = [
    //         ["id"=>1, 'title'=>'Learn PHP', 'postedby'=>"Ahmed","createdAt"=>"2018-04-10"],
    //         ["id"=>2, 'title'=>'solid Principles', 'postedby'=>"Mohamed","createdAt"=>"2018-04-10"],
    //         ["id"=>3, 'title'=>"Design Patterns", 'postedby'=>"Ali","createdAt"=>"2018-04-10"]
    //     ];
    //     return view("iti.posts_index", ['posts'=>$posts]);
    // }
    // function add_post(){
    //     return view("iti.addPost");
    // }

    function home(){
        $posts = post::all();
        return view('iti.itiHome',['posts'=>$posts]);
    }
    
    function create(){
        $users = user::all();
        return view("iti.createPost",['users'=>$users]);
    }

    function index(){
        $posts = post::paginate(10);
        foreach($posts as $post)
        {
            $post['created_at']=Carbon::parse($post['created_at']);
            $post['created_at']->format('d.m.Y');
        }
        return view('iti.index', ['posts'=>$posts]);
    }

    function show($id){
        $post = post::where('id', $id)->first();
        return view("iti.show", ['post'=>$post]);
    }

    function save(){
//        dd($_POST);

//        dd(\request());

//        dd(\request()->all());
        $post_info= request()->all();
        $post = new post();
        $post->title= $post_info['title'];
        $post->description = $post_info['description'];
        $post->postedby = $post_info['postedby'];
        $post->save();
        return to_route('iti.index');
    }

    function editpost($id){
        $post = post::findOrfail($id);
        $users = user::all();
        return view('iti.editform', ['post'=>$post,'users'=>$users]);
    }
    function update($id){
        $post_info= request()->all();
        $post = post::findOrfail($id);
        $post->title= $post_info['title'];
        $post->description = $post_info['description'];
        $post->postedby = $post_info['postedby'];
        $post->save();
        return to_route('iti.index');
    }

    function destroy($id){
        $post = post::findOrfail($id);
        $post->delete();
        return to_route('iti.index');
    }

    function getuser(){
        $users = user::paginate(10);
        return view('iti.user', ['users'=>$users]);
    }
}
