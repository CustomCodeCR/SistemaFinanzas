<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="forms-container">
<div class="sign-up-container">
    <h1 class="title has-text-centered">Registro de Usuario</h1>
    <form action="#" method="POST">
        <!-- Nombre de usuario -->
        <div class="field">
            <label class="label">Nombre de usuario</label>
            <div class="control has-icons-left">
                <input class="input" type="text" name="username" placeholder="Ej: juan123" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
            </div>
        </div>

        <!-- Contraseña -->
        <div class="field">
            <label class="label">Contraseña</label>
            <div class="control has-icons-left">
                <input class="input" type="password" name="password" placeholder="Ingresa tu contraseña" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
        </div>

        <!-- Confirmar contraseña -->
        <div class="field">
            <label class="label">Confirmar contraseña</label>
            <div class="control has-icons-left">
                <input class="input" type="password" name="confirm_password" placeholder="Confirma tu contraseña" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
        </div>

        <!-- Apellidos -->
        <div class="field">
            <label class="label">Apellidos</label>
            <div class="control has-icons-left">
                <input class="input" type="text" name="apellidos" placeholder="Ej: Pérez García" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
            </div>
        </div>

        <!-- Nacionalidad -->
        <div class="field">
            <label class="label">Nacionalidad</label>
            <div class="control has-icons-left">
                <input class="input" type="text" name="nacionalidad" placeholder="Ej: Costarricense" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-flag"></i>
                </span>
            </div>
        </div>

        <!-- País de residencia -->
        <div class="field">
            <label class="label">País de residencia</label>
            <div class="control has-icons-left">
                <input class="input" type="text" name="pais_residencia" placeholder="Ej: Costa Rica" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-globe"></i>
                </span>
            </div>
        </div>

        <!-- Correo electrónico -->
        <div class="field">
            <label class="label">Correo electrónico</label>
            <div class="control has-icons-left">
                <input class="input" type="email" name="email" placeholder="Ej: juan@example.com" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
        </div>

        <!-- Enlace "¿Ya tienes cuenta?" -->
        <div class="field has-text-centered">
            <a href="./login-view.php" class="is-size-7">¿Ya tienes cuenta?</a>
        </div>

        <!-- Botón de envío -->
        <div class="field">
            <div class="control">
                <button class="button is-primary is-fullwidth" type="submit">Registrar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>