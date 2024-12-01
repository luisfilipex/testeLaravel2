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
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            color: #343a40;
            margin-bottom: 30px;
        }
        .form-label {
            font-weight: bold;
            color: #495057;
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #ced4da;
        }
        .btn-submit {
            background-color: #FF8C42;
            border: none;
            color: white;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #e67e22;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 30px;
            background-color: white;
            margin-top: 20px;
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

    <div class="container">
        <div class="card">
            <h1>Upload de Imagem</h1>
            <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Escolha uma imagem:</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                </div>
                <button type="submit" class="btn-submit">Subir Imagem</button>
                <button type="button" class="btn-submit" onclick="window.location.href='/'">Voltar ao Início</button>
            </form>
        </div>
    </div>
</body>
</html>
