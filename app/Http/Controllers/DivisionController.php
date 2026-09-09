<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DivisionController extends Controller
{
public function index()
{
return view('division');
}
public function dividir(Request $request)
{
$numero1 = $request->input('numero1');
$numero2 = $request->input('numero2');
if ($numero2 == 0) {
        $resultado = "No se puede dividir entre cero";
    } else {
        $resultado = $numero1 / $numero2;
    }
    return view('division', compact('numero1', 'numero2', 'resultado'));
}
}