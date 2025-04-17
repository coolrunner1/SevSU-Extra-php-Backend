<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    function index(): JsonResponse {
        return response()->json([
            [
                "video_id" => 101,
                "video_title" => "Raiders of the Lost Ark",
                "video_desc" => "Movie about Indiana Jones",
                "video_duration" => "01:40:00",
                "video_release" => "2003-05-30",
                "video_cast" => [
                    "videocast_id" => 1,
                    "video_id" => 101,
                    "personality_id" => 1
                ],
                "video_rating" => 4.5,
                "video_genre" => [
                    "genre_id" => 1,
                    "genre_name" => "Комедия"
                ],
            ],
            [
                "video_id" => 102,
                "video_title" => "Indiana Jones and the Last Crusade",
                "video_desc" => "Movie about Indiana Jones",
                "video_duration" => "01:40:00",
                "video_release" => "2003-05-30",
                "video_cast" => [
                    "videocast_id" => 1,
                    "video_id" => 101,
                    "personality_id" => 1
                ],
                "video_rating" => 4.5,
                "video_genre" => [
                    "genre_id" => 1,
                    "genre_name" => "Комедия"
                ],
            ],
        ]);
    }

    function show($id): JsonResponse {
        return response()->json([
            "video_id" => $id,
            "video_title" => "Raiders of the Lost Ark",
            "video_desc" => "Movie about Indiana Jones",
            "video_duration" => "01:40:00",
            "video_release" => "2003-05-30",
            "video_cast" => [
                "videocast_id" => 1,
                "video_id" => 101,
                "personality_id" => 1
            ],
            "video_rating" => 4.5,
            "video_genre" => [
                "genre_id" => 1,
                "genre_name" => "Комедия"
            ]
        ]);
    }

    function store(Request $request): JsonResponse {
        return response()->json([
            'message' => "Видео успешно добавлено",
            'body' => $request->all(),
        ], 201);
    }

    public function update(Request $request, $id): JsonResponse {
        return response()->json(['message' => 'Информация о видео успешно обновлена', 'id' => $id]);
    }

    public function destroy($id): JsonResponse {
        return response()->json(['message' => 'Видео успешно удалено', 'id' => $id], 204);
    }
}
