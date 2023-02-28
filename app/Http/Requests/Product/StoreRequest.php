<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'string|required|unique:products|max:255',
            'image'=> 'required|dimensions:min_width=100,min_heiight=200',
            'sell_precie'=>'required|',
            'category_id'=> 'integer|required|exists:App\Category,id',
            'provider_id'=> 'integer|required|exists:App\Provider,id',

        ];
    }
    public function messages(){
        return [
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.unique'=>'EL producto ya esta registrado',
            'name.max'=>'Solo se permiten 50 caracteres',

            // img
            'image.required'=>'El campo es requerido',
            'image.dimensions'=>'Solo se permiten imagenes de 100x200px',

            'sell_price.required'=>'El campo es requerido',

            'category_id.integer'=>'El valor tiene que ser entero',
            'category_id.required'=>'El campo es requerido',
            'category_id.exists'=>'La categoria no existe',

            'provider_id.integer'=>'El valor tiene que ser entero',
            'provider_id.required'=>'El campo es requerido',
            'provider_id.exists'=>'El proveedor no existe',
        ];
    }
}
