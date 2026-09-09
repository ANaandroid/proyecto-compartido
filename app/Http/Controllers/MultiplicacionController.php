<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MultiplicacionController extends Controller
{
public function index()
{
return view('multiplicacion');
}
public function multiplicar(Request $request)
{
$numero1 = $request->input('numero1');
$numero2 = $request->input('numero2');
$resultado = $numero1 * $numero2;
return view('multiplicacion', compact('numero1', 'numero2', 'resultado'));
}
}