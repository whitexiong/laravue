<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Laravue\Models\Tag;

class TagController extends Controller
{
    public function list()
    {
        $tag = Tag::query()->get();
        dd($tag);
    }

    public function add()
    {

    }
}
