<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    public function index(Request $request)
    {   
        // $data = $request->all();
        $search = $request->input('search');
        $category_id = $request->input('category_id');
        // dd($search, $category_id);

        // return Route::is('blog') ? 'yes' : 'no'; - проверка есть ли такой маршрут
        $post = (object) 
        [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong>  sit amet consectetur adipisicing elit. Excepturi, tempora!',
            'category_id' => 3,
        ];
        $posts = array_fill(0, 10, $post);

        $posts = array_filter($posts, function ($post) use($search, $category_id) {
            if ($search && ! str_contains(strtolower($post->title), strtolower($search))) {
                return false;
            }

            if ($category_id && $post->category_id != $category_id) {
                return false;
            }

            return true;
        });

        $categories = [
            null => __('Все категории'),
            1 => __('Первая категория'),
            2 => __('Вторая категория'),
            3 => __('Третья категория'),
        ];

        return view('blog.index', compact('posts', 'categories'));
    }

    public function show()
    {
        $post = (object) 
        [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong>  sit amet consectetur adipisicing elit. Excepturi, tempora!',
        ];
        // return Route::is('blog*') ? 'yes' : 'no'; - проверка есть ли такой маршрут
        return view('blog.show', compact('post'));
    }

    public function like()
    {
        return 'Поставить лайк';
    }
}


