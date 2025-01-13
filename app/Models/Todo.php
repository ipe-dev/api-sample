<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OpenApi\Annotations as OA;

/** 
 * @OA\Schema(
 *   title="Todo",
 *   description="Todo model",
 *   type="object",
 *   required={"id, name"},
 *   @OA\Property(property="id", type="integer", format="int64", description="ID", example=1),
 *   @OA\Property(property="name", type="string", description="Todo name", example="Buy milk")
 * )
 */
final class Todo extends Model
{
    //
}
