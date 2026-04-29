<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

<h2>Nuevo usuario</h2>

<form method="POST" action="?action=store">
    <input class="form-control mb-2" name="name" placeholder="Nombre">
    <input class="form-control mb-2" name="adress" placeholder="Email">
    <input class="form-control mb-2" name="age" type="number" placeholder="Edad">
    <button class="btn btn-success">Guardar</button>
</form>

</body>
</html>