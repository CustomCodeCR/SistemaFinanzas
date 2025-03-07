<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id = $id";
$result = $conn->query($sql);
$usuario = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rol = $_POST['rol'];
    $update_sql = "UPDATE usuarios SET rol = '$rol' WHERE id = $id";
    if ($conn->query($update_sql)) {
        header("Location: userList-view.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Editar Usuario</h1>
            <form method="POST">
                <div class="field">
                    <label class="label">Nombre</label>
                    <input class="input" type="text" value="<?= htmlspecialchars($usuario['nombre']) ?>" disabled>
                </div>

                <div class="field">
                    <label class="label">Rol</label>
                    <div class="select">
                        <select name="rol">
                            <option value="Administrador" <?= $usuario['rol'] == 'Administrador' ? 'selected' : '' ?>>Administrador</option>
                            <option value="Usuario" <?= $usuario['rol'] == 'Usuario' ? 'selected' : '' ?>>Usuario</option>
                        </select>
                    </div>
                </div>

                <button class="button is-primary" type="submit">Actualizar</button>
                <a href="index.php" class="button is-light">Cancelar</a>
            </form>
        </div>
    </section>
</body>
</html>
