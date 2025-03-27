<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $allPosts = [
            ['id'=> 1 ,'title' => 'php', 'posted_by' => 'Ahmad' , 'created_at'=> '2002-2'],
            ['id'=> 2 ,'title' => 'java', 'posted_by' => 'mohammad' , 'created_at'=> '2024-7'],
            ['id'=> 3 ,'title' => 'c#', 'posted_by' => 'Alaa' , 'created_at'=> '2024-8'],
            ['id'=> 4 ,'title' => 'css', 'posted_by' => 'Amina' , 'created_at'=> '2025-10']
        ];
        return view('posts.index', ['posts' => $allPosts]);
    }

    public function show($post_id){
        $singlePost = ['id'=> 1 ,'title' => 'php','description' => 'this is description', 'posted_by' => 'Ahmad', 'email'=>'ahmad394@gmail.com' , 'created_at'=> '2002-2'] ;
        return view('posts.show', ['post'=>$singlePost] );
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        //1- get the user data
            $data = request()->all();
            
            $title = request()->title;
            $description = request()->description;
            $creator = request()->creator;

                //dd($data, $title, $description, $creator);
        //2- store the user data (later)
        //3- redirection to posts.index

        return to_route(route: 'posts.index');
    }

    public function edit(){
        return view('posts.edit');
    }
}
