<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ReadingHistory;

class ReadingHistoryController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $readingHistory = ReadingHistory::where('user_id', $user->id)->get();

        return response()->json($readingHistory);
    }

    public function markRead($episode_id)
    {
        $user = auth()->user();
        $episode = Episode::find($episode_id);

        if (!$episode) {
            return response()->json(['message' => 'Episode not found'], 404);
        }

        $readingHistory = ReadingHistory::create([
            'user_id' => $user->id,
            'episode_id' => $episode_id,
            'last_page_read' => 1,
            'read_time' => now(),
        ]);

        return response()->json(['message' => 'Episode marked as read successfully']);
    }
}
