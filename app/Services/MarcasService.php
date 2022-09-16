<?php

namespace App\Services;
use App\Models\marca;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class MarcasService
{

    /**
     * Lógica para el guardado de una nueva inspección en la BD.
     *
     * @param array|null $data Datos del formulario de la inspección.
     * @return array Contiene el respectivo mensaje de éxito o validación.
     */
    public static function guardarMarca(?array $data): array
    {
        $validator = Validator::make($data, [
            'descripcion'=> [
                'required',
                'unique:marcas,descripcion'
            ],
        ]);

        if ($validator->fails()) {
            $erros = [
                'result' => 'error',
                'msj'    => 'Errores detectados en los campos del formulario.',
                'errors' => $validator->errors(),
            ];
            return $erros;

        }

        DB::transaction(function () use ($data)
        {
            $inspeccion = new marca([
                'descripcion' => $data['descripcion'],
                'status'         => true,
            ]);
            $inspeccion->save();
            return $inspeccion->id;

        });

        return [
            'result' => 'success',
            'msj'    => 'Se guardó la marca de forma correcta',
            'errors' => null,
        ];
    }

}
