<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Episode;

class EpisodeController extends Controller
{
    public function index($webtoon_id)
    {
        $episodes = Episode::where('webtoon_id', $webtoon_id)->get();

        return response()->json($episodes);
    }

    public function show($episode_id)
    {
        $episode = Episode::find($episode_id);

        if (!$episode) {
            return response()->json(['message' => 'Episode not found'], 404);
        }

        return response()->json($episode);
    }
}