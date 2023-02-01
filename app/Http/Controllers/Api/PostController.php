<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Страница списка постов';
    }

    public function create()
    {
        return 'Страница создания постов';
    }

    public function store()
    {
        return 'Страница создания постов(отправка по форме post)';
    }

    public function show($post)
    {
        return "Страница просмотра постов {$post}";
    }

    public function edit($post)
    {
        return "Страница изменения постов edit {$post}";
    }
    
    public function update()
    {
        return 'Страница изменения постов update';
    }

    public function delete()
    {
        return 'Страница удаления постов';
    }

    public function like()
    {
        return 'Лайк +1';
    }
}
