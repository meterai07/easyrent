<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransactionalRequest extends FormRequest
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
            'tenant_id' => ['required', 'numeric'],
            'vehicle_id' => ['required', 'numeric'],
            'total_payment' => ['required', 'numeric'],
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'pick_up_date' => 'required|date',
            'pick_up_location' => 'required|string|max:255',
            'pick_up_time' => 'required',
            'drop_off_date' => 'required|date',
            'drop_off_location' => 'required|string|max:255',
            'drop_off_time' => 'required',
        ];
    }
}
