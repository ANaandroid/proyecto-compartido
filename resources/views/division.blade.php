<!DOCTYPE html>
<html>
<head>
<title>App de Dividir</title>
</head>
<body>
<h1>Dividir dos números</h1>
<form method="POST" action="/dividir">
@csrf
<label for="numero1">Número 1:</label>
<input type="number" step="any" name="numero1" value="{{ $numero1 ?? '' }}" required>
<br><br>
<label for="numero2">Número 2:</label>
<input type="number" step="any" name="numero2" value="{{ $numero2 ?? '' }}" required>
<br><br>
<button type="submit">Dividir</button>
</form>
@isset($resultado)
<h2>Resultado: {{ $resultado }}</h2>
@endisset
</body>
</html>