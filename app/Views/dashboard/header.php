<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="<?php echo base_url() ?>jojama.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <!-- Font Awesome (íconos) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- Estilos personalizados -->
    <style>
    body {
        padding-top: 56px;
        /* Ajuste para el navbar fijo */
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        top: 56px;
        /* Ajuste para el navbar fijo */
        left: 0;
        background-color: #343a40;
        transition: transform 0.3s ease;
    }

    .sidebar.collapsed {
        transform: translateX(-250px);
    }

    .main-content {
        margin-left: 250px;
        /* Ajuste para el sidebar */
        padding: 20px;
        transition: margin-left 0.3s ease;
    }

    .main-content.expanded {
        margin-left: 0;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="btn btn-dark" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand ms-2" href="#">Dashboard</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('logout') ?>">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>