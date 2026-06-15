<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/painel.css">
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
                <a href="#" class="nav-link" data-section="novo-anuncio">
                    <span class="icon"><i class="bi bi-file-plus"></i></span>
                    <span class="text">Novo anúncio</span>
                </a>
                <a href="#" class="nav-link" data-section="meus-anuncios">
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
        <section class="novo-anuncio">
            <div class="interface">

                <div class="top-section">
                    <h2>Novo Anúncio</h2>
                    <h3>Carregue seu anúncio aqui</h3>
                </div>

                <form action="" method="post" class="form-novo-anuncio">
                    <div class="upload-image loaded">
                        <div class="placeholder">
                            <div class="icon">
                                <i class="bi bi-upload"></i>
                            </div>
                            <div class="text-info">
                                Selecione um arquivo ou solte-o aqui
                            </div>
                            <div class="field">
                                <input type="file" name="ad-image" id="ad-image" hidden>
                                <label for="ad-image" class="btn-select-file">Selecione um arquivo</label>
                            </div>
                        </div>

                        <img src="assets/img/anuncio-teste.jpg" alt="Preview de imagem" class="preview">
                    </div>

                    <div class="ad-details">
                        <div class="field">
                            <input type="text" name="ad-titulo" id="ad-titulo" required>
                            <label for="ad-titulo">Título do anúncio</label>
                        </div>
                        <div class="field">
                            <input type="text" name="ad-descricao" id="ad-descricao" required>
                            <label for="ad-descricao">Descrição</label>
                        </div>

                        <button type="submit">Publicar</button>
                    </div>

                </form>

            </div>
        </section>
    </main>

    <script src="assets/js/sidebar.js"></script>
    <script src="assets/js/upload-image.js"></script>
</body>

</html>