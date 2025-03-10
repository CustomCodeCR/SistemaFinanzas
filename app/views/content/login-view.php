<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="forms-container">
<div class="sign-up-container">
        <h1 class="title has-text-centered">Iniciar Sesión</h1>
        <form action="#" method="POST">
            <!-- Nombre de usuario o correo electrónico -->
            <div class="field">
                <label class="label">Correo electrónico</label>
                <div class="control has-icons-left">
                    <input class="input" type="email" name="username_or_email" placeholder="aaa@example.com" required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
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

            <!-- Enlace "¿No tienes cuenta?" -->
            <div class="field has-text-centered">
                <a href="./singUp-view.php" class="is-size-7">¿No tienes cuenta? Regístrate aquí</a>
            </div>

            <!-- Botón de envío -->
            <div class="field">
                <div class="control">
                    <button class="button is-primary is-fullwidth" type="submit">Iniciar Sesión</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>