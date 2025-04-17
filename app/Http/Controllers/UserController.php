<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(): JsonResponse {
        return response()->json([
            [
                "user_id" => 1001,
                "user_name" => "user123",
                "user_email" => "user@example.com",
                "user_subscription" => "premium",
                "user_watch_hours" => "25"
            ],
            [
                "user_id" => 1002,
                "user_name" => "user123",
                "user_email" => "user@example.com",
                "user_subscription" => "premium",
                "user_watch_hours" => "25"
            ],
        ]);
    }

    function show($id): JsonResponse {
        return response()->json([
            "user_id" => $id,
            "user_name" => "user123",
            "user_email" => "user@example.com",
            "user_subscription" => "premium",
            "user_watch_hours" => "25"
        ]);
    }

    function store(Request $request): JsonResponse {
        return response()->json([
            'message' => "Пользователь успешно добавлен",
            'body' => $request->all(),
        ], 201);
    }

    public function update(Request $request, $id): JsonResponse {
        return response()->json(['message' => 'Информация о пользователе успешно обновлена', 'id' => $id]);
    }

    public function destroy($id): JsonResponse {
        return response()->json(['message' => 'Пользователь успешно удален', 'id' => $id], 204);
    }
}
