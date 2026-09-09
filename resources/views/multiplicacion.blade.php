<!DOCTYPE html>
<html>
<head>
<title>App de Multiplicacion</title>
</head>
<body>
<h1>Multiplicar dos números</h1>
<form method="POST" action="/multiplicar">
@csrf
<label for="numero1">Número 1:</label>
<input type="number" name="numero1" value="{{ $numero1 ?? '' }}" required>
<br><br>
<label for="numero2">Número 2:</label>
<input type="number" name="numero2" value="{{ $numero2 ?? '' }}" required>
<br><br>
<button type="submit">Multiplicar</button>
</form>
@isset($resultado)
<h2>Resultado: {{ $resultado }}</h2>
@endisset
<!-- Botón para retornar al menú principal -->
<div style="margin-top: 20px;">
    <a href="{{ url('/') }}" style="display: inline-block; padding: 8px 16px; background-color: #6c757d; color: white; text-decoration: none; border-radius: 4px;">
        ← Volver al Menú Principal
    </a>
</div>
</body>
</html>