<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|max:150|unique:projects',
            'cover_image' => 'nullable|image|max:1024',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome del progetto è obbligatorio',
            'name.max' => 'Il nome del progetto deve essere lungo massimo 150 caratteri',
            'name:unique' => 'Questo nome è già stato utilizzato, inserirne uno diverso',
            'cover_image.image' => 'Il file selezionato deve essere un immagine',
            'cover_image.size' => 'Il file deve essere grande al massimo 1024 kb',
            'description' => 'La descrizione è obbligatoria'

        ];
    }
}
