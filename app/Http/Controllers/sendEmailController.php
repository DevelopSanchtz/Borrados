<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class sendEmailController extends Controller
{
    public function sendEmail(Request $request)
    {

        $nombre = $request->nombre;
        $correo = $request->correo;
        $mensaje = $request->mensaje;

        $asunto = "Contactanos Borrados";

        $destinario = "tovar.sanchez.17266@itsmante.edu.mx";

        view('correo', ["nombre" => $nombre]);
        view('correo', ["correo" => $correo]);
        view('correo', ["mensaje" => $mensaje]);


        Mail::send('correo', $request->all(), function ($msj) use ($asunto, $destinario) {
            $msj->from('borrados.crochet@gmail.com', 'Contacto Borrados CROCHET');
            $msj->subject($asunto);
            $msj->to($destinario);
        });

        return view("welcome");
    }

    public function solicitar(Request $request)
    {
        $producto_solicitar   = $request->producto_solicitar;

        $nombre               = $request->nombre;

        $telefono             = $request->telefono;

        $cantidad             = $request->cantidad;

        $especificar_producto = $request->especificar_producto;

        view('solicitarProducto', ["nombre" => $nombre, "telefono" => $telefono, "cantidad" => $cantidad, "especificar_producto" => $especificar_producto, "producto_solicitar" => $producto_solicitar]);

        $asunto = "Solicitud de Producto Borrados";

        $destinario = "tovar.sanchez.17266@itsmante.edu.mx";

        Mail::send('solicitarProducto', $request->all(), function ($msj) use ($asunto, $destinario) {
            $msj->from('borrados.crochet@gmail.com', 'Contacto Borrados CROCHET');
            $msj->subject($asunto);
            $msj->to($destinario);
        });

        return view("welcome");
    }
}