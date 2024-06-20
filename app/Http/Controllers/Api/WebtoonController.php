<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Webtoon;

class WebtoonController extends Controller
{
    public function index(Request $request)
    {
        $webtoons = Webtoon::query()
            ->when(
                $request->search,
                function (Builder $builder) use ($request) {
                    $builder->where('title', 'like', "%{$request->search}%")
                        ->orWhere('author', 'like', "%{$request->search}%");
                }
            )->paginate(5);

        return response()->json($webtoons);
    }

    public function show($webtoon_id)
    {
        $webtoon = Webtoon::find($webtoon_id);

        if (!$webtoon) {
            return response()->json(['message' => 'Webtoon not found'], 404);
        }
        return response()->json($webtoon);
    }
}
