<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactEnquiryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'     => ['required', 'string', 'min:2', 'max:100'],
            'phone'    => ['required', 'string', 'regex:/^[0-9+\-\s]{7,20}$/'],
            'email'    => ['nullable', 'email', 'max:255'],
            'service'  => ['nullable', 'string', 'max:100'],
            'message'  => ['required', 'string', 'min:10', 'max:2000'],
            'honeypot' => ['nullable', 'string', 'max:0'], // must be empty
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'    => 'नाम आवश्यक है। / Name is required.',
            'name.min'         => 'नाम कम से कम 2 अक्षर का होना चाहिए। / Name must be at least 2 characters.',
            'phone.required'   => 'फ़ोन नंबर आवश्यक है। / Phone number is required.',
            'phone.regex'      => 'सही फ़ोन नंबर दर्ज करें। / Please enter a valid phone number.',
            'email.email'      => 'सही ईमेल दर्ज करें। / Please enter a valid email address.',
            'message.required' => 'संदेश आवश्यक है। / Message is required.',
            'message.min'      => 'संदेश कम से कम 10 अक्षर का होना चाहिए। / Message must be at least 10 characters.',
            'honeypot.max'     => 'Invalid submission.',
        ];
    }
}
