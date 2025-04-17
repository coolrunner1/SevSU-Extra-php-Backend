<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PersonalityController extends Controller
{
    function index(): JsonResponse {
        return response()->json([
            [
                "personality_id" => 1,
                "personality_fullname" => "Steven Spielberg",
                "personality_alias" => "Spielberg",
                "personality_roles" => [
                    "role_id" => 131,
                    "role_name" => "Director"
                ],
                "personality_birth" => "1990-09-09"
            ],
            [
                "personality_id" => 2,
                "personality_fullname" => "George Lucas",
                "personality_alias" => "Lucas",
                "personality_roles" => [
                    "role_id" => 131,
                    "role_name" => "Director"
                ],
                "personality_birth" => "1990-09-09"
            ],
        ]);
    }

    function show($id): JsonResponse {
        return response()->json([
            "personality_id" => $id,
            "personality_fullname" => "Steven Spielberg",
            "personality_alias" => "Spielberg",
            "personality_roles" => [
                "role_id" => 131,
                "role_name" => "Director"
            ],
            "personality_birth" => "1990-09-09"
        ]);
    }

    function store(Request $request): JsonResponse {
        return response()->json([
            'message' => "Личность успешно добавлена",
            'body' => $request->all(),
        ], 201);
    }

    public function update(Request $request, $id): JsonResponse {
        return response()->json(['message' => 'Информация о личности успешно обновлена', 'id' => $id]);
    }

    public function destroy($id): JsonResponse {
        return response()->json(['message' => 'Персоналия успешно удалена', 'id' => $id], 204);
    }
}
