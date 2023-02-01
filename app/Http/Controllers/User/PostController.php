<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $post = (object) 
        [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong>  sit amet consectetur adipisicing elit. Excepturi, tempora!',
        ];
        $posts = array_fill(0, 10, $post);
        return view('user.posts.index', compact('posts'));
    }

    public function create(Request $request)
    {
        return view('user.posts.create');
    }

    public function store(StorePostRequest $request)
    {
        // $title = $request->input('title');
        // $content = $request->input('content');

        // dd($title, $content);

        // $validated = validator($request->all(), [
        //     'title' => ['required', 'string', 'max:100'],
        //     'content' => ['required', 'string'],
        // ])->validate();

        // $validated = $request->validate([
        //     'title' => ['required', 'string', 'max:100'],
        //     'content' => ['required', 'string'],
        // ]);

        $validated = $request->validated();
        
        dd($validated);



        session(['alert' => __('Сохранено!')]);

        return redirect()->route('user.posts.show', 123);
    }

    public function show($post)
    {
        $post = (object) 
        [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong>  sit amet consectetur adipisicing elit. Excepturi, tempora!',
        ];
        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {       
        $post = (object) 
            [
                'id' => 123,
                'title' => 'Lorem ipsum dolor sit amet.',
                'content' => 'Lorem ipsum <strong>dolor</strong>  sit amet consectetur adipisicing elit. Excepturi, tempora!',
            ];
        return view('user.posts.edit', compact('post'));


    }
    
    public function update(Request $request, $post)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        // dd($title, $content);
        session(['alert' => __('Сохранено!')]);
        // return redirect()->route('user.posts.show', $post);
        return redirect()->back();
    }

    public function delete($post)
    {
        // return 'Страница удаления постов';
        return redirect()->route('user.posts', $post);
    }

    public function like()
    {
        return 'Лайк +1';
    }
}
