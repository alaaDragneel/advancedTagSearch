<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Pagination\LengthAwarePaginator as Paginator;

use App\Video;
use App\Category;
use App\Tag;

class HomeController extends Controller
{
    public function search($key)
    {
        $video = Video::where('title', 'LIKE', '%'. $key .'%')->paginate(3);

        $videoTags = Video::getByRelation('tags', 'tag_name', $key)->paginate(3);

        $videoCats = Video::getByRelation('cat', 'name', $key)->paginate(3);

        //total videos
        $total = $video->total() + $videoTags->total() + $videoCats->total();

        $items = array_merge($video->items(), $videoTags->items(), $videoCats->items());

        // NOTE make Collection And make The Arry indexs be unique
        $itemsColletions = collect($items)->unique();

        $currentPage = Paginator::resolveCurrentPage();

        // Paginator(colletions, totalFromPaginatorInstance, number of paginat, $currentPage);

        $videos = new Paginator($itemsColletions, $total, 3, $currentPage);

        $tags = Tag::all();

        return view('products', compact('videos', 'key', 'tags'));
    }
}
