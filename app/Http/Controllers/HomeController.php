<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Pagination\LengthAwarePaginator as Paginator;

use App\Video;

use App\Tag;

class HomeController extends Controller
{
    public function index()
    {
        $videos = Video::paginate(4);
        $key = null;
        return view('home', compact('videos'));
    }

    public function search(Request $request, $key = null)
    {

        $key = $key == null ? $request->search : $key;


        $videos = Video::GetByNormalRelation($key)
        ->getByRelation('tags', 'tag_name', $key)
        ->getByRelation('cat', 'name', $key)
        ->paginate(3);

        $tags = Tag::all();

        return view('products', compact('videos', 'key', 'tags'));
    }
}
