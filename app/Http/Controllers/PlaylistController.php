<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    function index(): JsonResponse {
        return response()->json([
            [
                "playlist_id" => 1,
                "playlist_name" => "Лучшие комедии",
                "playlist_genre" => [
                    'genre_id' => 1,
                    'genre_name' => 'Comedy',
                ],
                "playlist_type" => "collection",
                "videos" => [
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
                            'genre_id' => 1,
                            'genre_name' => 'Comedy',
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
                            'genre_id' => 1,
                            'genre_name' => 'Comedy',
                        ],
                    ],
                ],
            ],
            [
                "playlist_id" => 2,
                "playlist_name" => "Лучшие комедии",
                "playlist_genre" => [
                    'genre_id' => 1,
                    'genre_name' => 'Comedy',
                ],
                "playlist_type" => "collection",
                "videos" => [
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
                            'genre_id' => 1,
                            'genre_name' => 'Comedy',
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
                            'genre_id' => 1,
                            'genre_name' => 'Comedy',
                        ],
                    ],
                ],
            ]
        ]);
    }

    function show($id): JsonResponse {
        return response()->json([
            "playlist_id" => $id,
            "playlist_name" => "Лучшие комедии",
            "playlist_genre" => [
                'genre_id' => 1,
                'genre_name' => 'Comedy',
            ],
            "playlist_type" => "collection",
            "videos" => [
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
                        'genre_id' => 1,
                        'genre_name' => 'Comedy',
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
                        'genre_id' => 1,
                        'genre_name' => 'Comedy',
                    ],
                ],
            ],
        ]);
    }

    function store(Request $request): JsonResponse {
        return response()->json([
            'message' => "Плейлит успешно добавлен",
            'body' => $request->all(),
        ], 201);
    }

    public function update(Request $request, $id): JsonResponse {
        return response()->json(['message' => 'Информация о плейлисте успешно обновлена', 'id' => $id]);
    }

    public function destroy($id): JsonResponse {
        return response()->json(['message' => 'Плейлист успешно удален', 'id' => $id], 204);
    }
}
