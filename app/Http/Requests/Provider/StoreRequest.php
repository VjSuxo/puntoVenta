<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     * Los datos guardados en base a los datos de PERU
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string|max:255',
            'email'=>'required|email|string|max:255|unique:providers',
            'ruc_number'=>'required|string|max:11|min:11|unique:providers',
            'addres'=>'nullable|string|max:255',
            'phone'=>'required|string|max:50|min:9|unique:providers',
        ];
    }

    public function messages(){
        return [
            //Mensajes para nombre
            'name.required'=>'Este campo es requerido',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'Solo se permiten 255 caracteres',
            // para email
            'email.required'=>'Este campo es requerido',
            'email.email'=>'No es un correo electrónico',
            'email.string'=>'El valor no es correcto',
            'email.max'=>'Solo se permiten 255 caracteres',
            'email.unique'=>'Ya se encuentra registrado',
            //ruc number
            'ruc_number.required'=>'Este campo es requerido',
            'ruc_number.stirng'=>'EL valor no es correcto',
            'ruc_number.max'=>'Solo se permiten 11 caracteres',
            'ruc_number.min'=>'Se requiere 11 caracteres',
            'ruc_number.unique'=>'Ya se encuentra resgistrado',
            //addres
            'addres.max'=>'Solo se permiten 255 caracteres',
            'addres.stirng'=>'EL valor no es correcto',
            //phone
            'phone.required'=>'Este campo es requerido',
            'phone.stirng'=>'EL valor no es correcto',
            'phone.max'=>'Solo se permiten 9 caracteres',
            'phone.min'=>'Se requiere 9 caracteres',
            'phone.unique'=>'Ya se encuentra resgistrado',
        ];
    }

}
