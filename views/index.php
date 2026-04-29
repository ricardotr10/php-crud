<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

<h2 class="mb-4">Usuarios</h2>

<a href="?action=create" class="btn btn-primary mb-3">Agregar</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Edad</th>
        <th>Acciones</th>
    </tr>

<?php while($row = $users->fetch_assoc()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name_users'] ?></td>
    <td><?= $row['adress'] ?></td>
    <td><?= $row['age'] ?></td>
    <td>
        <a href="?action=edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
        <a href="?action=delete&id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
    </td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>