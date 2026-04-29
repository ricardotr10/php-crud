<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

<h2>Editar usuario</h2>

<form method="POST" action="?action=update&id=<?= $user['id'] ?>">
    <input class="form-control mb-2" name="name" value="<?= $user['name_users'] ?>">
    <input class="form-control mb-2" name="adress" value="<?= $user['adress'] ?>">
    <input class="form-control mb-2" name="age" value="<?= $user['age'] ?>">
    <button class="btn btn-primary">Actualizar</button>
</form>

</body>
</html>