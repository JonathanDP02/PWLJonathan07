<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}

class TodoRequest extends ApiRequest
{
    public function authorize(): bool
    {
        if ($this->method() == Request::METHOD_POST) {
            return true;
        }
        $todo = $this->route('todo');
        return auth()->user()->id == $todo->user_id;
    }

    public function rules(): array
    {
        return [
            'todo'  => 'required|string|max:255',
            'label' => 'nullable|string',
            'done'  => 'nullable|boolean',
        ];
    }
}