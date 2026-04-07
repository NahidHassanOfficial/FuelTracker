<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegistrationRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'        => ['required', 'string', 'max:100'],
            'division_id' => ['required', 'exists:divisions,id'],
            'district_id' => ['required', Rule::exists('districts', 'id')->where('division_id', $this->division_id)],
            'upazila_id'  => ['required', Rule::exists('upazilas', 'id')->where('district_id', $this->district_id)],
            'lat'         => ['required', 'numeric', 'between:-90,90'],
            'long'        => ['required', 'numeric', 'between:-180,180'],
            'phone'       => ['required', 'string', 'regex:/^01[3-9][0-9]{8}$/', Rule::unique('fuel_stations', 'phone')],
            'email'       => ['required', 'email', Rule::unique('fuel_stations', 'email')],
            'password'    => ['required', 'confirmed', Password::min(4)],
        ];
    }
}