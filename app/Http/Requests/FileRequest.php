<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class FileRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'file'  => 'required|file|max:10240',
            'description' => 'required|string|min:20'
        ];
    }
    public function messages()
    {
        return [
            'file.required' => 'Pero adjunta algo, zopenco.',
            'file.file' => 'Un archivo, cigoto.',
            'file.max'  => 'Tampoco me subas tu carpeta del porno.',
            'description.required' => 'Si hace falta invéntatela, pero no lo dejes vacío.',
            'description.string'   => 'Introduce texto, no el nuevo tema de Porta.',
            'description.min' => 'Mínimo 20 caracteres, desgraciao.
        ]
    }
    public function attributes(){
        return [
            'name'     => 'nombre del archivo',
            'description' => 'descripción del archivo',
            'archivo' => 'archivo'
        ];
    }
}