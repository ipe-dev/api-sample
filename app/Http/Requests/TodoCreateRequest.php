<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 *      @OA\Schema(
 *          title="TodoCreateRequest",
 *          description="Todo作成リクエスト",
 *          type="object",
 *          required={"name"},
 *           @OA\Property(
 *           property="name",             
 *           type="string",
 *           description="Todo名",
 *           example="Buy milk",
 *          )
 *      )
 */
final class TodoCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
        ];
    }
}
