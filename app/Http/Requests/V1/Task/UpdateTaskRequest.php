<?php

namespace App\Http\Requests\V1\Task;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
            'title' => [
                'sometimes',
                'string',
                'min:3',
                'max:100',
            ],
            'description' => [
                'nullable',
                'string'
            ],
            'status' => [
                'sometimes',
                'in:pending,in_progress_done'
            ],
            'priority' => [
                'sometimes',
                'in:low,medium,high'
            ],
            'due_date' => [
                'sometimes',
                'date'
            ]
        ];
    }


    public function attributes(): array
    {
        return [
            'title' => 'título',
            'description' => 'descripción',
            'status' => 'estado',
            'priority' => 'prioridad',
            'due_date' => 'fecha de vencimiento'
        ];
    }
}
