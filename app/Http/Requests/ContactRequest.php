<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // The hidden "website" honeypot is deliberately not validated here:
        // the controller silently ignores bot submissions instead.
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => __('home.err_name'),
            'name.string' => __('home.err_name'),
            'name.max' => __('home.err_name'),
            'email.required' => __('home.err_email'),
            'email.email' => __('home.err_email'),
            'email.max' => __('home.err_email'),
            'message.required' => __('home.err_message'),
            'message.string' => __('home.err_message'),
            'message.max' => __('home.err_message'),
        ];
    }

    /**
     * After a validation error, send the visitor back to the contact section.
     */
    protected function getRedirectUrl(): string
    {
        return route('home') . '#contact';
    }
}
