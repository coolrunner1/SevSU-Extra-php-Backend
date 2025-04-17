<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    function index(): JsonResponse {
        return response()->json([
            [
                'genre_id' => 1,
                'genre_name' => 'Comedy',
            ], [
                'genre_id' => 2,
                'genre_name' => 'Drama',
            ]
        ]);
    }

    function show($id): JsonResponse {
        return response()->json([
            'genre_id' => $id,
            'genre_name' => 'Romance',
        ]);
    }

    function store(Request $request): JsonResponse {
        return response()->json([
            'message' => "Жанр успешно добавлен",
            'body' => $request->all(),
        ], 201);
    }

    public function update(Request $request, $id): JsonResponse {
        return response()->json(['message' => 'Информация о жанре успешно обновлена', 'id' => $id]);
    }

    public function destroy($id): JsonResponse {
        return response()->json(['message' => 'Жанр успешно удален', 'id' => $id], 204);
    }
}
