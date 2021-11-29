<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:30',
            'father_name' => 'required|string|min:2|max:30',
            'mother_name' => 'required|string|min:2|max:30',
            'dni' => 'required|string|size:8|unique:employees,dni',
            'gender' => 'required',
            'birth_date' => 'required',
            'profession_id' => 'required',
            'email' => 'required|string|min:4|max:60',
            'phone' => 'required|string|min:6|max:20',
            'family_burden' => 'required',
            'pension' => 'required|string|min:2|max:30',
            'license' => 'required',
            'agency_id' => 'required',
            'address' => 'required|string|min:2|max:60',
            'reference' => 'string|min:2|max:50',
            'department_id' => 'required',
            'province_id' => 'required',
            'district_id' => 'required',
            //'curriculum' => 'mimes:docx,pdf|max:2048',
            //'criminal_record' => 'mimes:docx,pdf|max:2048',
            'photo' => 'image'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El :attribute es obligatorio.',
            'name.string' => 'El :attribute debe contener caracteres válidos.',
            'name.min' => 'La longitud del :attribute es muy corta.',
            'name.max' => 'La longitud del :attribute es muy larga.',
            'father_name.required' => 'El :attribute es obligatorio.',
            'father_name.string' => 'El :attribute debe contener caracteres válidos.',
            'father_name.min' => 'La longitud del :attribute es muy corta.',
            'father_name.max' => 'La longitud del :attribute es muy larga.',
            'mother_name.required' => 'El :attribute es obligatorio.',
            'mother_name.string' => 'El :attribute debe contener caracteres válidos.',
            'mother_name.min' => 'La longitud del :attribute es muy corta.',
            'mother_name.max' => 'La longitud del :attribute es muy larga.',
            'dni.required' => 'El :attribute del personal es obligatorio.',
            'dni.string' => 'El :attribute del personal debe contener caracteres válidos.',
            'dni.size' => 'La longitud del :attribute no es correcto.',
            'dni.unique' => 'Este :attribute ya esta registrado en nuestro personal, por favor verifique correctamente.',
            'gender.required' => 'El :attribute es obligatorio.',
            'birth_date.required' => 'La :attribute es obligatorio.',
            'profession_id.required' => 'La :attribute es obligatorio.',
            'email.required' => 'El :attribute es obligatorio.',
            'email.string' => 'El :attribute debe contener caracteres válidos.',
            'email.min' => 'La longitud del :attribute es muy corta.',
            'email.max' => 'La longitud del :attribute es muy larga.',
            'phone.required' => 'El :attribute es obligatorio.',
            'phone.string' => 'El :attribute debe contener caracteres válidos.',
            'phone.min' => 'La longitud del :attribute es muy corta.',
            'phone.max' => 'La longitud del :attribute es muy larga.',
            'family_burden.required' => 'El :attribute es obligatorio.',
            'pension.required' => 'El :attribute es obligatorio.',
            'pension.string' => 'El :attribute debe contener caracteres válidos.',
            'pension.min' => 'La longitud del :attribute es muy corta.',
            'pension.max' => 'La longitud del :attribute es muy larga.',
            'license.required' => 'La :attribute es obligatorio.',
            'agency_id.required' => 'La :attribute es obligatorio.',
            'address.required' => 'El :attribute es obligatorio.',
            'address.string' => 'El :attribute debe contener caracteres válidos.',
            'address.min' => 'La longitud del :attribute es muy corta.',
            'address.max' => 'La longitud del :attribute es muy larga.',
            'reference.string' => 'El :attribute debe contener caracteres válidos.',
            'reference.min' => 'La longitud del :attribute es muy corta.',
            'reference.max' => 'La longitud del :attribute es muy larga.',
            'department_id.required' => 'El :attribute es obligatorio.',
            'province_id.required' => 'La :attribute es obligatorio.',
            'district_id.required' => 'El :attribute es obligatorio.',
            'curriculum.mimes' => 'El formato del :attribute no es pdf o docx.',
            'curriculum.max' => 'El :attribute pesa demasiado solo debe pesar 2MB max.',
            'criminal_record.mimes' => 'El formato de :attribute no es pdf o docx.',
            'criminal_record.max' => 'Los :attribute pesa demasiado solo debe pesar 2MB max.',
            'photo.image' => 'El tipo de archivo de la :attribute es incorrecto.'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'nombre del personal',
            'father_name' => 'apellido paterno del personal',
            'mother_name' => 'apellido materno del personal',
            'dni' => 'DNI ',
            'gender' => 'genero del personal',
            'birth_date' => 'fecha de nacimiento del personal',
            'profession_id' => 'profesión del personal',
            'email' => 'email del personal',
            'phone' => 'telefono/celular del personal',
            'family_burden' => 'carga familiar',
            'pension' => 'fondo de pensión',
            'license' => 'licencia de conducir',
            'agency_id' => 'agencia',
            'address' => 'dirección del personal',
            'reference' => 'referencia del personal',
            'department_id' => 'departamento del personal',
            'province_id' => 'provincia del personal',
            'district_id' => 'distrito del personal',
            'curriculum' => 'curriculum vitae',
            'criminal_record' => 'antecedentes policiales',
            'photo' => 'foto de personal'
        ];
    }
}
