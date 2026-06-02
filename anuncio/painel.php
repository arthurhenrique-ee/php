<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <title>AnuncIO | Painel</title>
</head>
<body>
    
    <div class="sidebar">

        <div class="sidebar-overflow">
            <div class="sidebar-profile">
                <div class="avatar">
                    <!-- <img src="assets/img/perfil.jpg" alt="perfil" class="photo"> -->
                    <span class="fallback">AH</span>
                </div>
                <div class="info">
                    <span class="name">Arthur Henrique</span>
                    <span class="user">arthurhenriquee</span>
                </div>
            </div>
            <nav class="sidebar-nav">
                <a href="#" class="nav-link active">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="text">Home</span>
                </a>
                <a href="#" class="nav-link">
                    <span class="icon"><i class="bi bi-file-plus"></i></span>
                    <span class="text">Criar anúncio</span>
                </a>
                <a href="#" class="nav-link">
                    <span class="icon"><i class="bi bi-collection"></i></span>
                    <span class="text">Meus anúncios</span>
                </a>
            </nav>
            <div class="sidebar-footer">
                <a href="#" class="logout">
                    <span class="icon"><i class="bi bi-box-arrow-left"></i></span>
                    <span class="text">Sair</span>
                </a>
                <div class="logo">
                    <div class="icon">
                        <i class="bi bi-megaphone"></i>
                    </div>
                    Anunc<span>IO</span>
                </div>
            </div>
        </div>

        <button class="sidebar-btn">
            <i class="bi bi-chevron-right"></i>
        </button>

    </div>

    <main>
        <h1>TÍTULO</h1>
    </main>

    <script>
        let sidebar = document.querySelector('.sidebar')
        let btnSidebar = document.querySelector('.sidebar-btn')
        let body = document.querySelector('body')

        btnSidebar.addEventListener("click", () => {
            body.classList.toggle("sidebar-active")
            sidebar.classList.toggle("active")
        })
    </script>
</body>
</html>