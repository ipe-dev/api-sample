<?php

declare(strict_types=1);

namespace App\Http\Controllers\Todos;

use App\Http\Controllers\Controller;
use OpenApi\Annotations as OA;

final class todoListController extends Controller
{
    /**
     * @OA\Get(
     *     path="/todos",
     *     tags={"todos"},
     *     summary="todoリストを取得する",
     *     description="todoリストを取得する",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Todo")
     *         )
     *     ),
     *     @OA\Response(
     *       response=500,
     *       description="Internal Server Error",
     *       @OA\JsonContent(
     *         @OA\Property(
     *           property="message",
     *           type="string",
     *           example="Internal Server Error",
     *           ),
     *        ),
     *             ),
     * )
     */
    public function __invoke() {
        try {
            $todos = \App\Models\Todo::all();
            return response()->json($todos);
        } catch (\Exception $e) {
            Log::error("Error: {$e->getMessage()}");
            return response()->json(['message' => 'Internal Server Error'], 500);
        }
    }
}
