<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class RestaController extends Controller
{
public function index()
{
return view('resta');
}
public function restar(Request $request)
{
$numero1 = $request->input('numero1');
$numero2 = $request->input('numero2');
$resultado = $numero1 - $numero2;
return view('resta', compact('numero1', 'numero2', 'resultado'));
}
}