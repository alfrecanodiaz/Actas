<?php namespace Modules\Cursos\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursosRequest extends FormRequest {

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
          	'materia_id' => 'required',
          	'profesor_id' => 'required',
          	'aula_id' => 'required',
          	'turno_id' => 'required',
          	'seccion_id' => 'required',
          	'convocatoria_id' => 'required',
          	'semestre_id' => 'required',
		];
	}

}
