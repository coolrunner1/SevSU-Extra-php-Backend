<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InteractionController extends Controller
{
    function index(): JsonResponse {
        return response()->json([
            [
                "interaction_id" => 1,
                "user_id" => 1001,
                "video_id" => 101,
                "like" => 1,
                "comments" => "Отличный фильм!"
            ],
            [
                "interaction_id" => 1,
                "user_id" => 1001,
                "video_id" => 101,
                "like" => 1,
                "comments" => "Отличный фильм!"
            ],
        ]);
    }

    function show($id): JsonResponse {
        return response()->json([
            "interaction_id" => $id,
            "user_id" => 1001,
            "video_id" => 101,
            "like" => 1,
            "comments" => "Отличный фильм!"
        ]);
    }

    function store(Request $request): JsonResponse {
        return response()->json([
            'message' => "Взаимодействие успешно создано",
            'body' => $request->all(),
        ], 201);
    }

    public function update(Request $request, $id): JsonResponse {
        return response()->json(['message' => 'Информация о взаимодействии успешно обновлена', 'id' => $id]);
    }

    public function destroy($id): JsonResponse {
        return response()->json(['message' => 'Взаимодействие успешно удалено', 'id' => $id], 204);
    }
}
