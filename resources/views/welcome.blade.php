<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImagensAPP - SUAS IMAGENS EM BOAS MÃOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        h1 {
            text-align: center;
            color: #343a40;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .btn-add {
            display: block;
            margin: 20px auto;
            background-color: #FF8C42;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            width: 200px;
            transition: background-color 0.3s;
        }

        .btn-add:hover {
            background-color: #e67e22;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            height: 250px;
        }

        .gallery-item {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            transition: transform 0.3s;
            margin-top: 15px;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .gallery-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .image-name {
            padding: 10px;
            background-color: #343a40;
            color: white;
            font-size: 14px;
            font-weight: bold;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }


        .newsletter-section {
            background-color: #343a40;
            padding: 50px 0;
            text-align: center;
            margin-top: 140px;
            color: #f8f9fa;
        }

        .newsletter-section input[type="email"] {
            width: 40%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin-right: 10px;
        }

        .newsletter-section button {
            padding: 10px 20px;
            background-color: #FF8C42;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }

        .newsletter-section button:hover {
            background-color: #e67e22;
        }

        .info-cards {
            display: flex;
            gap: 20px;
            justify-content: space-around;
            margin-top: 50px;
        }

        .info-card {
            background-color: #696969;
            padding: 20px;
            border-radius: 10px;
            width: 30%;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            transition: transform 0.3s ease-in-out;
            margin-bottom: 30px;
        }

        .info-card:hover {
            transform: scale(1.05);
        }

        .info-card h4 {
            color: #fff;
            font-size: 18px;
        }

        .info-card p {
            color: #fff;
            font-size: 14px;
        }

        footer {
            background-color: #343a40;
            text-align: center;
            padding: 15px;
            color: white;
            font-size: 14px;
            position: relative;
            width: 100%;
            bottom: 0;
        }
        .conteudo{
            background-color: #343a40;
            margin-top: 10px;
            width: 100%;
            height: 200px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
        .conteudo p{
            text-align: center;
            margin-top: 10px;
            color: #f8f9fa;
        }
        .cont1{
            color: #f8f9fa;
            text-align: center;
            padding-top: 40px;
            font-size: 30px;
        }

    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="https://cf-assets.www.cloudflare.com/slt3lc6tev37/36bg2huuzTPjpfUN9PKmnm/acd485dc1f0a999c9d8ce3167c058026/verticals-spot-illustration.svg" alt="Logo" width="50" class="d-inline-block align-text-top" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/images/create">Upload</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/images">Galeria</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://wallpapers.com/images/hd/minimalist-dual-monitor-fqs6gxkcc0q5drqs.jpg" class="d-block w-100" alt="Imagem 1">
    </div>
    <div class="carousel-item">
      <img src="https://i.pinimg.com/originals/e3/c6/94/e3c694d5eaa7a549a556ff9504b8b3db.jpg" class="d-block w-100" alt="Imagem 2">
    </div>
    <div class="carousel-item">
      <img src="https://juliannecerasoli.com.br/wp-content/uploads/2024/02/1500x500-1-jpeg.webp" class="d-block w-100" alt="Imagem 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="conteudo">
    <div class="cont1">
        <a>Faça o Upload da sua imagem e compartilhe com milhares de pessoas.</a>
    </div>
    <p>Conheça as últimas tendências com nossas imagens autênticas e de estoque</p>
</div>
<section class="gallery">
    <div class="gallery-item">
        <img src="https://m.media-amazon.com/images/I/71mbFSPooxL._AC_UF894,1000_QL80_.jpg" alt="Image 1">
        <div class="image-name">Imagem Ilustrativa</div>
    </div>
    <div class="gallery-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3CSF_8ogN5bRRDi6VX6RpHcDTkROUN4MnNg&s" alt="Image 2">
        <div class="image-name">Imagem Ilustrativa</div>
    </div>
    <div class="gallery-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTm7KNfqFY_48t2af8C9oe1NYI5ZE3Fgf7FKA&s" alt="Image 3">
        <div class="image-name">Imagem Ilustrativa</div>
    </div>
    <div class="gallery-item">
        <img src="https://img.freepik.com/fotos-premium/cidade-turca-com-farol-porto-e-beira-mar-vista-do-topo-da-montanha_715893-99.jpg" alt="Image 4">
        <div class="image-name">Imagem Ilustrativa</div>
    </div>
</section>


<section class="newsletter-section">
    <h2>Assine nossa Newsletter</h2>
    <p>Receba atualizações sobre novidades e promoções exclusivas.</p>
    <form>
        <input type="email" placeholder="Digite seu e-mail" required>
        <button type="submit">Assinar</button>
    </form>
</section>

<section class="info-cards">
    <div class="info-card card" style="background-color: #696969; color: white; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);">
        <div class="card-body">
            <h5 class="card-title">Upload Simples e Rápido</h5>
            <p class="card-text">Carregue suas imagens facilmente com nosso sistema intuitivo. Basta selecionar os arquivos e começar o upload em segundos.</p>
            <button type="button" class="btn btn-primary" style="background-color: #FF8C42; border: none; border-radius: 5px; color: white;">Saiba mais</button>
        </div>
    </div>
    <div class="info-card card" style="background-color: #696969; color: white; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);">
        <div class="card-body">
            <h5 class="card-title">Suporte a Diversos Formatos</h5>
            <p class="card-text">Oferecemos suporte para diversos formatos de imagem, como JPEG, PNG, GIF e outros, garantindo flexibilidade para todos os tipos de conteúdo.</p>
            <button type="button" class="btn btn-primary" style="background-color: #FF8C42; border: none; border-radius: 5px; color: white;">Saiba mais</button>
        </div>
    </div>
    <div class="info-card card" style="background-color: #696969; color: white; border-radius: 10px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);">
        <div class="card-body">
            <h5 class="card-title">Visualização e Compartilhamento</h5>
            <p class="card-text">Após o upload, você pode visualizar suas imagens e compartilhá-las diretamente com amigos ou em redes sociais, tudo de forma simples e rápida.</p>
            <button type="button" class="btn btn-primary" style="background-color: #FF8C42; border: none; border-radius: 5px; color: white;">Saiba mais</button>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2024 ImagensAPP - Todas as imagens estão seguras!</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
