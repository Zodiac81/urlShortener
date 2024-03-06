<?php

namespace App\Http\Requests;

use App\Rules\DisabledTimeRule;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UrlRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'original_url' => 'required|url:http,https',
            'allow_visit'  => 'required|integer',
            'disabled_at'  => ['required', new DisabledTimeRule]
        ];
    }
}
