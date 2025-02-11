<?php
include 'config.php';

// Obtener todos los usuarios
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

// Si se edita un usuario
if (isset($_POST['editUser'])) {
    $id = $_POST['id'];
    $rol = $_POST['rol'];

    $stmt = $conn->prepare("UPDATE usuarios SET rol = ? WHERE id = ?");
    $stmt->bind_param("si", $rol, $id);
    $stmt->execute();
    
    header("Location: userList-view.php");
    exit();
}

// Si se elimina un usuario
if (isset($_POST['deleteUser'])) {
    $id = $_POST['id'];

    $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    
    header("Location: userList-view.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script>
        function setEditData(id, nombre, rol) {
            document.getElementById("editId").value = id;
            document.getElementById("editNombre").textContent = nombre;
            document.getElementById("editRol").value = rol;
        }

        function setDeleteData(id, nombre) {
            document.getElementById("deleteId").value = id;
            document.getElementById("deleteNombre").textContent = nombre;
        }
    </script>
</head>
<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Gestión de Usuarios</h1>
            
            <input class="input" type="text" id="search" placeholder="Buscar usuario..." onkeyup="filterUsers()">

            <table class="table is-striped is-fullwidth">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="userTable">
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= htmlspecialchars($row['nombre']) ?></td>
                            <td><?= htmlspecialchars($row['correo']) ?></td>
                            <td><?= $row['rol'] ?></td>
                            <td>
                                <button class="button is-small is-info" onclick="setEditData(<?= $row['id'] ?>, '<?= htmlspecialchars($row['nombre']) ?>', '<?= $row['rol'] ?>')" data-target="#editModal">Editar</button>
                                <button class="button is-small is-danger" onclick="setDeleteData(<?= $row['id'] ?>, '<?= htmlspecialchars($row['nombre']) ?>')" data-target="#deleteModal">Eliminar</button>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Modal de Edición -->
    <div id="editModal" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content box">
            <h2 class="title is-4">Editar Usuario</h2>
            <form method="POST">
                <input type="hidden" id="editId" name="id">
                <p>Nombre: <strong id="editNombre"></strong></p>
                <label class="label">Rol</label>
                <div class="select">
                    <select name="rol" id="editRol">
                        <option value="Administrador">Administrador</option>
                        <option value="Usuario">Usuario</option>
                        <option value="Asociado">Asociado</option>
                    </select>
                </div>
                <button class="button is-primary" type="submit" name="editUser">Actualizar</button>
                <button class="button is-light" type="button" onclick="closeModal('#editModal')">Cancelar</button>
            </form>
        </div>
    </div>

    <!-- Modal de Eliminación -->
    <div id="deleteModal" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content box">
            <h2 class="title is-4 has-text-danger">Eliminar Usuario</h2>
            <p>¿Seguro que deseas eliminar a <strong id="deleteNombre"></strong>?</p>
            <form method="POST">
                <input type="hidden" id="deleteId" name="id">
                <button class="button is-danger" type="submit" name="deleteUser">Eliminar</button>
                <button class="button is-light" type="button" onclick="closeModal('#deleteModal')">Cancelar</button>
            </form>
        </div>
    </div>

    <script>
        function filterUsers() {
            let input = document.getElementById("search").value.toLowerCase();
            let rows = document.querySelectorAll("#userTable tr");
            
            rows.forEach(row => {
                let name = row.children[1].textContent.toLowerCase();
                row.style.display = name.includes(input) ? "" : "none";
            });
        }

        function closeModal(modalId) {
            document.querySelector(modalId).classList.remove("is-active");
        }

        document.querySelectorAll("[data-target]").forEach(button => {
            button.addEventListener("click", function() {
                let modal = document.querySelector(this.dataset.target);
                modal.classList.add("is-active");
            });
        });

        document.querySelectorAll(".modal-background, .modal-close").forEach(bg => {
            bg.addEventListener("click", function() {
                document.querySelectorAll(".modal").forEach(modal => modal.classList.remove("is-active"));
            });
        });
    </script>
</body>
</html>
