<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
    public function index($episode_id)
    {
        $pages = Page::where('episode_id', $episode_id)->get();

        return response()->json($pages);
    }
}
