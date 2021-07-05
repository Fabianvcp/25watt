<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTareaRequest;
use App\Http\Requests\UpdateTareaRequest;
use App\Tarea;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TareaController extends Controller
{
    /** @OA\Info(title="25watt examen", version="0.1") */
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Collection|Tarea[]
     */
    /**
     * @OA\Get(
     *     path="/api/tarea",
     *     summary="Mostrar tarea",
     *     @OA\Response(
     *         response=200,
     *         description="Mostrar todas las tareas."
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *     )
     * )
     */
    public function index(Request $request)
    {
        if($request->has('txtBuscar'))
        {
            $tareas = Tarea::where('tarea', 'like','%'.$request->txtBuscar.'%')->get();
        }
        else
        {
            $tareas = Tarea::all();
        }
        return view('tarea', compact('tareas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateTareaRequest $request
     * @return JsonResponse
     */
    /**
 * @OA\Post(
 *     path="/api/tarea",
 *     summary="almacenar tarea",
 *     @OA\Response(
 *         response=200,
 *         description="Se almaceno la tarea."
 *     ),
 *     @OA\Response(
 *         response="default",
 *         description="Ha ocurrido un error."
 *     )
 * )
 */
    public function store(CreateTareaRequest $request)
    {
        $input = $request->all();
        Tarea::create($input);

        //regresamos al usuario
        $message="La Tarea se ha Almacenado";
        // Set a success toast, with a title
        toastr($message, 'success');
        return response()->json([
            'res' => true,
            'message' =>'registro creado correctamente'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param Tarea $tarea
     * @return Tarea
     */
    /**
 * @OA\Get (
 *     path="/api/tarea/$tarea",
 *     summary="Mostrar tarea",
 *     @OA\Response(
 *         response=200,
 *         description="Mostrar la tarea."
 *     ),
 *     @OA\Response(
 *         response="default",
 *         description="Ha ocurrido un error."
 *     )
 * )
 */
    public function show(Tarea $tarea)
    {
       return $tarea;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTareaRequest $request
     * @param Tarea $tarea
     * @return JsonResponse
     */
    /**
     * @OA\Put(
     *     path="/api/tarea/$tarea",
     *     summary="Actualizar tarea",
     *     @OA\Response(
     *         response=200,
     *         description="Se Actualizo la tarea."
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="Ha ocurrido un error."
     *     )
     * )
     * @param Request $request
     * @param Tarea $tarea
     * @return JsonResponse
     */
    public function update(Request $request)
    {
        $id_tarea =  $request->id;
        $resignar = Tarea::find($id_tarea);
        $resignar->tarea= $request->tarea;
        $resignar->save();
        return response()->json([
            'res' => true,
            'message' =>'registro actualizado correctamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */

    /**
 *  @OA\Delete (
 *     path="/api/tarea/$tarea",
 *     summary="Eliminar tarea",
 *     @OA\Response(
 *         response=200,
 *         description="Se Eliminar la tarea."
 *     ),
 *     @OA\Response(
 *         response="default",
 *         description="Ha ocurrido un error."
 *     )
 * )
 */
    public function destroy($id)
    {
        Tarea::destroy($id);
        return response()->json([
        'res' => true,
        'message' =>'registro eliminado correctamente'
    ], 200);
}
}
