<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type=text/css>
      body {
    
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    background-color: rgb(110, 76, 143);
    color: rgb(231, 224, 224);
}
a{
    text-decoration: none;
    color: rgb(231, 224, 224); ;
    text-align: center;
    margin-left: 25px;
}
.carousel{
    width:1850px;
    height:500px;
    margin-top: 30px;
    margin-left: 20px;
}
    </style>
</head>
<body>

    <h1 style=" text-align: center; margin-top: 100px;"> SEJA BEM VINDO A PAGINA (quase) OFICIAL DA ETEC ZONA LESTE</h1>
    <div id="carouselExample" class="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/img/foto1.jpg') }}" class="d-block w-100" alt="..." style="height:600px;">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
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
    <h2 style=" text-align: center; margin-top: 125px;"> navegue pelo site pela barra de navegação lá em cima ☝☝☝</h2>
    
</body>
</html>