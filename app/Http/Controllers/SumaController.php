<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SumaController extends Controller
{
 public function index()
 {
 return view('suma');
 }
 public function sumar(Request $request)
 {
 $numero1 = $request->input('numero1');
 $numero2 = $request->input('numero2');
 $resultado = $numero1 + $numero2;
 return view('suma', compact('numero1', 'numero2', 'resultado'));
 }
}