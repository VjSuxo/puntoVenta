<?php

namespace App\Http\Requests\Client;

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
            'name'=>'string|required|max:255',
            'dni'=>'string|required|unique:clients|max:8',
            'ruc'=>'string|required|unique:clients|max:11',
            'addres'=>'string|required|max:255',
            'phone'=>'string|required|unique:clients|max:9',
            'email'=>'string|required|unique:clients|max:255|email:rfc,dns',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'Solo se permite 255 caracteres',
        
            'dni.string'=>'El valor no es correcto',
            'dni.required'=>'este campo es requerido',
            'dni.unique'=>'Este DNI ya se encuentra resgistrado',
            'dni.min'=>'Se requeire de 8 caracteres',
            'dni.max'=>'Solo se permite 8 caracteres',

            'ruc.string'=>'El valor no es correcto',
            'ruc.required'=>'El numero de RUC ya se encuentra registrad',
            'ruc.min'=>'Se requiere de 11 caracteres',
            'ruc.max'=>'Solo se permite 11 caracteres',
        
            'address.string'=>'El valor no es correcto',
            'address.max'=>'Solo se permite 255 caracteres',

            'phone.string'=>'El valor no es correcto',
            'phone.unique'=>'El numero de celular ya se encuentra reguistrado',
            'phone.min'=>'Se requiere 9 caracteres',
            'phone.max'=>'Solo se permite 9 caracteres',
        
            'email.string'=>'El valor no es correcto',
            'email.unique'=>'El numero de celular ya se encuentra reguistrado',
            'email.email'=>'No es un correo electronico',
            'email.max'=>'Solo se permite 255 caracteres',
            
        ];
    }
}
