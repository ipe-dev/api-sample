<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OpenApi\Annotations as OA;

/**
 *      @OA\Schema(
 *          title="Todo",
 *          description="Todo model",
 *          type="object",
 *          required={"id, name"}
 *      )
 */
class Todo extends Model
{
    //
}
