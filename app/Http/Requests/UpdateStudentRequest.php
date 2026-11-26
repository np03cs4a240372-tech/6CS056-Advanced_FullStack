<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $student = $this->route('student');

        return [
            'name' => 'required|string|max:100',
            'email' => [
                'required',
                'string',
                'email',
                'max:256',
                Rule::unique('students', 'email')->ignore($student),
            ],
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'date_of_birth' => 'required|date',
        ];
    }
}
