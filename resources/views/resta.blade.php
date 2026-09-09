<!DOCTYPE html>
<html>
<head>
<title>App de Resta</title>
</head>
<body>
<h1>Restar dos números</h1>
<form method="POST" action="/restar">
@csrf
<label for="numero1">Número 1:</label>
<input type="number" name="numero1" value="{{ $numero1 ?? '' }}" required>
<br><br>
<label for="numero2">Número 2:</label>
<input type="number" name="numero2" value="{{ $numero2 ?? '' }}" required>
<br><br>
<button type="submit">Restar</button>
</form>
@isset($resultado)
<h2>Resultado: {{ $resultado }}</h2>
@endisset
</body>
</html>