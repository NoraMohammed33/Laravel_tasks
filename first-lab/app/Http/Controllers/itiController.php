<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itiController extends Controller
{
    function get_posts(){
        $posts = [
            ["id"=>1, 'title'=>'Learn PHP', 'postedby'=>"Ahmed","createdAt"=>"2018-04-10"],
            ["id"=>2, 'title'=>'solid Principles', 'postedby'=>"Mohamed","createdAt"=>"2018-04-10"],
            ["id"=>3, 'title'=>"Design Patterns", 'postedby'=>"Ali","createdAt"=>"2018-04-10"]
        ];
        return view("iti.posts_index", ['posts'=>$posts]);
    }
    function add_post(){
        return view("iti.addPost");
    }
}
