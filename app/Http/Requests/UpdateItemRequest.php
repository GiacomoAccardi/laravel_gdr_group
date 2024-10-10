<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'category' => 'required',
            'weight' => 'required|numeric',
            'dice' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Madama o Messere, voi dovete fornire il nome della vostra arma, ché sconosciuto non può restare.',
            'category.required' => 'Madama o Messere, gentilmente esplicitate la categoria della vostra arma, ché non può restar celata.',
            'weight.required' => 'Madama o Messere, gentilmente esplicitate il peso della vostra arma, ché non può restar celato.',
            'dice.required' => 'Madama o Messere, gentilmente esplicitate il danno della vostra arma, ché non può restar celato.',
        ];
    }
}
