<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    protected function storeRequest() : array {
        return [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8|same:password',
        ];
    }

    protected function updateRequest() : array {
        return [
            'name' => 'sometimes|required|min:3|max:50',
            'email' => 'sometimes|required|email|unique:users,email,' . $this->user->id,
            'password' => 'nullable|min:8|confirmed',
            'password_confirmation' => 'nullable|min:8|same:password',
        ];
    }

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
        // Determine if it's an update request or store request
        if ($this->isMethod('put') || $this->isMethod('patch')) {
            return $this->updateRequest();
        }

        return $this->storeRequest();
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.min' => 'The name must be at least 3 characters.',
            'name.max' => 'The name may not be greater than 50 characters.',

            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already registered.',

            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.confirmed' => 'The password confirmation does not match.',

            'password_confirmation.required' => 'The password confirmation field is required.',
            'password_confirmation.min' => 'The password confirmation must be at least 8 characters.',
            'password_confirmation.same' => 'The password confirmation must match the password.',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'name',
            'email' => 'email',
            'password' => 'password',
            'password_confirmation' => 'confirm password',
        ];
    }
}
