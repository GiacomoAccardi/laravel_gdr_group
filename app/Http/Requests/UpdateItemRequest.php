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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:200',
            'category' => 'required',
            'weight' => 'required|numeric',
            'cost' => 'required|numeric',
            'dice' => 'required|string', 
            'type' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Madama o Messere, voi dovete fornire il nome della vostra arma, ché sconosciuto non può restare.',
            'name.max' => 'Madama o Messere, voi dovete fornire un nome che sia lungo massimo 200 caratteri.',
            'category.required' => 'Madama o Messere, gentilmente esplicitate la categoria della vostra arma, ché non può restar celata.',
            'weight.required' => 'Madama o Messere, gentilmente esplicitate il peso della vostra arma, ché non può restar celato.',
            'dice.required' => 'Madama o Messere, gentilmente esplicitate il danno della vostra arma, ché non può restar celato.',
            'cost.required' => 'Madama o Messere, gentilmente esplicitate il costo della vostra arma, ché non può restar celato.',
            'type.required' => 'Madama o Messere, gentilmente esplicitate la tipologia, non può restar celata.',
        ];
    }
}
