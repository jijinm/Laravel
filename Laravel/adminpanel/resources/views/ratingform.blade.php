<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Rate and Win Game</title>
</head>
<body>
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slider/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="slider/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="slider/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<h1>Rate And Win Game</h1>
@if(session()->has('alert'))
<p style="color: red">{{session('alert')}}</p>
@endif
<p>Choose your favorite actor and if he holds the highest rating, you will get a chance to watch your chosen movie for free.</p>
	<div class="container">
    <div class="row align-items-start">
    <div class="col">
    <form method="post" action="/insertrating">
    @csrf
    <p>Choose your favorite actor</p>
	<label for="Mohanlal">Mohanlal</label>
	<input type="radio" id="Mohanlal" name="favactor" value="Mohanlal" required><br>
	<label for="Mammooty">Mammooty</label>
    <input type="radio" id="Mammooty" name="favactor" value="Mammooty"><br>
    <label for="KunchakoBoban">Kunchako Boban</label>
    <input type="radio" id="KunchakoBoban" name="favactor" value="Kunchako Boban"><br>
    <label for="Prithviraj">Prithviraj</label>
    <input type="radio" id="Prithviraj" name="favactor" value="Prithviraj"><br>
    <label for="Tovino">Tovino</label>
    <input type="radio" id="Tovino" name="favactor" value="Tovino"><br>
    <label for="BijuMenon">Biju Menon</label>
    <input type="radio" id="BijuMenon" name="favactor" value="Biju Menon"><br>
    </div>
    <div class="col">
	<label for="uname">Name</label><br>
	<input type="text" name="name" id="uname" required><br>
	<label for="mail">Email</label><br>
	<input type="email" name="email" id="mail" required><br>
	<label for="rating">Rating [Out of 5]</label><br>
	<input type="number" name="rating" id="rating" required>
    </div>
    <div class="col">
    <p>Choose your favorite movie</p>
	<label for="Kala">Kala</label>
	<input type="radio" id="Kala" name="favmovie"  value="Kala" required><br>
	<label for="Kuruthi">Kuruthi</label>
    <input type="radio" id="Kuruthi" name="favmovie" value="Kuruthi"><br>
    <label for="One">One</label>
    <input type="radio" id="One" name="favmovie" value="One"><br>
    <label for="Aarkariyaam">Aarkariyaam</label>
    <input type="radio" id="Aarkariyaam" name="favmovie" value="Aarkariyaam"><br>
    <label for="MohanKumarFans">Mohan Kumar Fans</label>
    <input type="radio" id="MohanKumarFans" name="favmovie" value="Mohan Kumar Fans"><br>
    <label for="Marakkar">Marakkar</label>
    <input type="radio" id="Marakkar" name="favmovie" value="Marakkar"><br>
	<input type="submit" name="submit" value="Submit Form">
    </form>
    </div>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>