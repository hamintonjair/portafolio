<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background: linear-gradient(135deg, rgb(78, 80, 82), rgb(59, 32, 32));
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-container {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        /* text-align: center; */
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        transition: 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    /* Estilos para el círculo de progreso */
    .progress-circle {
        display: none;
        position: relative;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 5px solid #e0e0e0;
        border-top-color: #28a745;
        /* Verde */
        animation: spin 1s linear infinite;
        margin: 20px auto;
    }

    /* Animación de giro */
    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Número en el centro */
    .progress-number {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 18px;
        font-weight: bold;
        color: #28a745;
    }
    </style>
</head>

<body>

    <div class="login-container">
        <h2 class="mb-4 text-center">Iniciar Sesión</h2>

        <?php if (session()->get('error')): ?>
        <div class="alert alert-danger"><?= session()->get('error') ?></div>
        <?php endif; ?>

        <form action="<?= base_url('auth/doLogin') ?>" method="post" id="loginForm">
            <div class="mb-3">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="nombre" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="contraseña"
                    required>
            </div>

            <!-- Círculo de progreso -->
            <div class="progress-circle">
                <span class="progress-number">0%</span>
            </div>

            <button type="submit" class="btn btn-primary w-100" id="loginBtn">Iniciar Sesión</button>
        </form>
    </div>

    <script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        let progressCircle = document.querySelector(".progress-circle");
        let progressNumber = document.querySelector(".progress-number");
        let loginBtn = document.getElementById("loginBtn");

        // Evitar envío inmediato del formulario
        event.preventDefault();

        // Deshabilitar botón
        loginBtn.disabled = true;
        loginBtn.textContent = "Cargando...";

        // Mostrar el círculo de progreso
        progressCircle.style.display = "block";

        let progress = 0;
        let interval = setInterval(function() {
            if (progress >= 100) {
                clearInterval(interval);
                document.getElementById("loginForm").submit(); // Enviar formulario
            } else {
                progress += 10;
                progressNumber.textContent = progress + "%";
            }
        }, 200);
    });
    </script>

</body>

</html>