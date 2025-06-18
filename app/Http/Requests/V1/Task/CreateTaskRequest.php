<?php

namespace App\Http\Requests\V1\Task;

use Illuminate\Foundation\Http\FormRequest;

class CreateTaskRequest extends FormRequest
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
                'required',
                'string',
                'min:3',
                'max:100',
            ],
            'description' => [
                'nullable',
                'string'
            ],
            'status' => [
                'required',
                'in:pending,in_progress_done'
            ],
            'priority' => [
                'required',
                'in:low,medium,high'
            ],
            'due_date' => [
                'required',
                'date'
            ],
            'project_id' => [
                'required',
                'exists:projects,id'
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
            'due_date' => 'fecha de vencimiento',
            'project_id' => 'proyecto'
        ];
    }
}
