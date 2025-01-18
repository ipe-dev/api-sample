<?php

declare(strict_types=1);

namespace App\Http\Controllers\Todos;

use App\Http\Controllers\Controller;
use OpenApi\Annotations as OA;

final class TodoDeleteController extends Controller
{
    /**
     * @OA\Delete(
     *      path="/todos/{id}",
     *      operationId="Title",
     *      tags={"todos"},
     *      summary="todoを削除する",
     *      description="todoを削除する",
     *      @OA\Parameter(
     *          description="削除対象のtodoのID",
     *          in="path",
     *          name="id",
     *          required=true,
     *          @OA\Schema(type="int"),
     *          @OA\Examples(example="int", value="1", summary="an int value"),
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="削除成功",
     *       ),
     *     )
     */
    public function __invoke() {}
}
