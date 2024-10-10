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
            'description' => 'nullable',
            'strength' => 'required|integer|max:15',
            'defence' => 'required|integer|max:15',
            'speed' => 'required|integer|max:15',
            'intelligence' => 'required|integer|max:15',
            'life' => 'required|integer|max:130',
            'type_id' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Madama o Messere, voi dovete fornire il vostro nome, che\' sconosciuto non puo\' restare.',
            'name.max' => 'Madama o Messere, il nome non puo\' eccedere la misura di 200 segni, che\' cosi\' lungo non potra\' esser accolto.',
            'strength.required' => 'Madama o Messere, gentilmente esplicitate la vostra forza, che\' non puo\' restar celata.',
            'strength.max' => 'Madama o Messere, impensabile che la vostra forza superi quella di un orso.',
            'defence.required' => 'Madama o Messere, vi prego, esplicitate la vostra capacita\' di difendervi, che\' non puo\' restare ignota.',
            'defence.max' => 'Madama o Messere, non crediate di avere una pelle piu\' dura e resistente di un cinghiale.',
            'speed.required' => 'Madama o Messere, esplicitate la vostra capacita\' di corsa, che\' essa non puo\' rimanere celata.',
            'speed.max' => 'Madama o Messere, stento a credere che possiate correre piu\' veloce di un destriero.',
            'intelligence.required' => 'Madama o Messere, esplicitate il vostro intelletto, che\' esso non puo\' rimanere celato.',
            'intelligence.max' => 'Madama o Messere, credete di essere piu\' astuti di una volpe?',
            'life.required' => 'Madame o Messere, esplicitate la vostra capacita\' vitale, che\' essa non puo\' rimanere celata.',
            'life.max' => 'Madama o Messere, difficilmente potrete vivere a lungo come una tartaruga centenaria.'
        ];
    }
}
