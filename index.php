<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Página</title>
  <!-- Adicione o link para o arquivo CSS do Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-blue-900 text-white">
  <!-- Div fixa com seu nome -->
  <div class="w-1/4 h-screen p-4">
    <h1 class="text-2xl font-semibold">Seu Nome</h1>
  </div>

  <!-- Div com projetos roláveis -->
  <div class="w-3/4 h-screen overflow-y-scroll">
    <h2 class="text-xl font-semibold mb-4">Projetos</h2>
    <div class="p-4">
      <!-- Conteúdo dos projetos aqui -->
      <div class="mb-4">
        <h3 class="text-lg font-semibold">Projeto 1</h3>
        <p>Descrição do Projeto 1</p>
      </div>
      <div class="mb-4">
        <h3 class="text-lg font-semibold">Projeto 2</h3>
        <p>Descrição do Projeto 2</p>
      </div>
      <!-- Adicione mais projetos conforme necessário -->
    </div>
  </div>
</body>

</html>