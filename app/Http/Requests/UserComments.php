<?php

namespace App\Http\Requests;

use App\Models\UserComment;
use Illuminate\Foundation\Http\FormRequest;

class UserComments extends FormRequest
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
            'name' => 'required|max:32',
            'email' => 'required|email',
            'message' => 'required|string|required|max:255'
        ];
    }

    public function register()
    {
        // ...
        $this->app->bind(UserComments::class, function () {
            return new Usercomments();
        });
    }
}
