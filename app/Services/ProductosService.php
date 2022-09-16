<?php

namespace App\Services;
use App\Models\producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductosService
{

    /**
     * Lógica para el guardado de un nuevo producto en la BD.
     *
     * @param array|null $data Datos del formulario del producto.
     * @return array Contiene el respectivo mensaje de éxito o validación.
     */
    public static function guardarProdcuto(?array $data): array
    {
        $rules = [
            'marca' => [
                'required',
            ],
            'modelo' => [
                'required',
            ],
            'area' => [
                'required',
            ],
            'descripcion' => [
                'required',
            ],
        ];

        $messages = [
            'marca.required' => 'La marca es requerida',
            'modelo.required' => 'El modelo es requerido',
            'area.required' => 'el area es requerida',
            'descripcion.required' => 'la descripcion es requerida',
        ];

        $validator = Validator::make($data,$rules,$messages);

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
            $producto = new producto([
                'modelo_id' => $data['modelo'],
                'area_id' => $data['area'],
                'descripcion' => $data['descripcion'],
                'status'         => true,
            ]);
            $producto->save();
            return $producto->id;

        });

        return [
            'result' => 'success',
            'msj'    => 'Se guardó el producto de forma correcta',
            'errors' => null,
        ];
    }

    public static function updateProducto(array $data): array
    {



        $rules = [
            'update_modelo' => [
                'required',
            ],
            'update_area' => [
                'required',
            ],
            'update_descripcion' => [
                'required',
            ],
            'producto_id' => [
                'required',
            ],
        ];

        $messages = [
            'update_modelo.required' => 'Modelo Requerido',
            'update_areaupdate_area.required' => 'El area es requerido',
            'update_descripcion.required' => 'La descripcion es requerida',
            'producto_id.required' => 'Id error',
        ];

        $validator = Validator::make($data,$rules,$messages);

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

            $update_producto =  producto::where('productos.id', $data["producto_id"])->update([
                "descripcion" => $data["update_descripcion"],
                "modelo_id"   => $data["update_modelo"],
                "area_id"   => $data["update_area"]
            ]);


        });

        return [
            'result' => 'success',
            'msj'    => 'Se Actualizo el producto satisfactoriamente',
            'errors' => null,
        ];
    }
}
