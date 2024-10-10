<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCharacterRequest extends FormRequest
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
            'name' => 'required|string|max:200',
            'description' => 'nullable',
            'strength' => 'required|integer|max:15',
            'defence' => 'required|integer|max:15',
            'speed' => 'required|integer|max:15',
            'intelligence' => 'required|integer|max:15',
            'life' => 'required|integer|max:15',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Madama o Messere, voi dovete fornire il vostro nome, ché sconosciuto non può restare.',
            'name.max' => 'Madama o Messere, il nome non può eccedere la misura di 200 segni, ché così lungo non potrà esser accolto.',
            'strength.required' => 'Madama o Messere, gentilmente esplicitate la vostra forza, ché non può restar celata.',
            'strength.max' => 'Madama o Messere, impensabile che la vostra forza superi quella di un orso.',
            'defence.required' => 'Madama o Messere, vi prego, esplicitate la vostra capacità di difendervi, ché non può restare ignota.',
            'defence.max' => 'Madama o Messere, non crediate di avere una pelle più dura e resistente di un cinghiale.',
            'speed.required' => 'Madama o Messere, esplicitate la vostra capacità di corsa, ché essa non può rimanere celata.',
            'speed.max' => 'Madama o Messere, stento a credere che possiate correre più veloce di un destriero.',
            'intelligence.required' => 'Madama o Messere, esplicitate il vostro intelletto, ché esso non può rimanere celato.',
            'intelligence.max' => 'Madama o Messere, credete di essere più astuti di una volpe?',
            'life.required' => 'Madame o Messere, esplicitate la vostra capacità vitale, ché essa non può rimanere celata.',
            'life.max' => 'Madama o Messere, difficilmente potrete vivere a lungo come una tartaruga centenaria.'
        ];
    }
}
