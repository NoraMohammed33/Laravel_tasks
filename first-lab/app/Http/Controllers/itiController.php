<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

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

    function create(){
        return view("iti.createPost");
    }

    function index(){
        $posts = post::all();

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
        $post->postedpy = $post_info['postedpy'];
        $post->save();
        return to_route('iti.show', $post->id);
    }

    function destroy($id){
        $post = post::findOrfail($id);
        $post->delete();
        return to_route('iti.index');
    }
}
