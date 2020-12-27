<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">JordyBest</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact')}}">Contact US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('services')}}">Services</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</header>
<main>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://static01.nyt.com/images/2014/09/04/arts/nightcrawler-watching-recommendation/nightcrawler-watching-recommendation-jumbo-v5.jpg?quality=90&auto=webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://static01.nyt.com/images/2019/12/06/arts/best-netflix-irishman/merlin_163686735_6b34c0db-6f05-4aa4-bce8-4371396295ef-jumbo.jpg?quality=90&auto=webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://static01.nyt.com/images/2018/03/15/multimedia/moonlight-watching-recommendation/moonlight-watching-recommendation-jumbo-v3.jpg?quality=90&auto=webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>






</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>  
</body>
</html>