<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImagensAPP - SUAS IMAGENS EM BOAS MÃOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            cursor: pointer;
        }
        .btn-add:hover {
            background-color: #e67e22;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .gallery-item {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 200px;
            text-align: center;
            transition: transform 0.3s;
        }
        .gallery-item:hover {
            transform: scale(1.05);
        }
        .gallery-item img {
            width: 100%;
            height: 200px;
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
    </style>
</head>

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
          <a class="nav-link active" aria-current="page" href="/">Home</a>
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
<body>
    <h1>Galeria de Imagens</h1>
    <a href="{{ route('images.create') }}" class="btn-add">Adicionar Nova Imagem</a>
    <a onclick="window.location.href='/'" class="btn-add">Voltar ao Inicio</a>
    <div class="gallery">
        @foreach ($images as $image)
            <div class="gallery-item">
                <img src="{{ asset($image->image_path) }}" alt="{{ $image->image_name }}">
                <div class="image-name">{{ $image->image_name }}</div>
            </div>
        @endforeach
    </div>
</body>
</html>
