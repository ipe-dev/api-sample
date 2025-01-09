<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use OpenApi\Annotations as OA;

class todoCreateController extends Controller
{
    /**
    * @OA\Post(
    *      path="/todos/create",
    *      operationId="Create Todo",
    *      tags={"Tags"},
    *      summary="Todoを作成する",
    *      description="Todoとなる文字列を受け取り、Todoを作成する",
    *      @OA\RequestBody(
    *          required=true,
    *          @OA\JsonContent(ref="#/components/schemas/TodoCreateRequest")
    *      ),
    *      @OA\Response(
    *          response=201,
    *          description="Successful operation",
    *       ),
    *     )
    */
    public function __invoke(TodoCreateRequest $request)
    {
        
    }
}
