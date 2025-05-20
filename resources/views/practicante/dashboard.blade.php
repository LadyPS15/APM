<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Practicantes</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Instrument+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <div class="company-name">APM Inversiones ERL</div>

        <nav class="menu">
            <a href="#" class="menu-item active">
                <span>Dashboard</span>
            </a>
            <a href="#" class="menu-item">
                <span>Recursos Scrum</span>
            </a>
            <a href="#" class="menu-item">
                <span>Comunidad</span>
            </a>
            <a href="#" class="menu-item">
                <span>Mi Perfil</span>
            </a>
        </nav>
    </div>

    <header class="top-bar">
        <div class="user-info">
            <span class="user-name">Juan Lopez Perez -Scrum Master</span>
            <div class="user-avatar">JL</div>
        </div>
    </header>

    <main class="main-content">
        <h1>¡Recursos para Scrum Master!</h1>

        <section class="resources-section">
            <h2>Documentación</h2>
            <p>Descarga recursos útiles para tu rol de Scrum Master</p>

            <div class="resources-table">
                <div class="table-header">
                    <div class="header-cell title">Título</div>
                    <div class="header-cell access">Acceso</div>
                </div>

                <div class="table-row">
                    <div class="row-cell title">
                        <h3>La Guía Definitiva de Scrum: Las Reglas del Juego</h3>
                        <p>La guía definitiva de Scum por Schwaber y Stherland</p>
                    </div>
                    <div class="row-cell access">
                        <a href="#" class="download-btn">Descargar PDF</a>
                    </div>
                </div>

                <div class="table-row">
                    <div class="row-cell title">
                        <h3>Guía Scrum 2024 European Scrum</h3>
                        <p>La guía definitiva de Scum por Schwaber y Stherland</p>
                    </div>
                    <div class="row-cell access">
                        <a href="#" class="download-btn">Descargar PDF</a>
                    </div>
                </div>

                <div class="table-row">
                    <div class="row-cell title">
                        <h3>Guía - Profesional Scrum Master</h3>
                        <p>Guía específica para Scrum Masters</p>
                    </div>
                    <div class="row-cell access">
                        <a href="#" class="download-btn">Descargar PDF</a>
                    </div>
                </div>

                <div class="table-row">
                    <div class="row-cell title">
                        <h3>Scrum Master de Scrum Manager</h3>
                        <p>Conjunto de plantillas para facilitar las reuniones</p>
                    </div>
                    <div class="row-cell access">
                        <a href="#" class="download-btn">Descargar PDF</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
