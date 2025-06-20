<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Villa Rintonaji</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    {{-- header start --}}
    <header>
      <input type="checkbox" name="" id="toggler">
      <label for="toggler" class="fas fa-bars"></label>

        <a href="/" class="logo"><img src="img/villa-logo.png" alt="a"></a>
      
      <nav class="navbar">
          <a href="/facilities">Fasilitas</a>
          <a href="/location">Lokasi</a>
          <a href="/contact">Contact</a>
      </nav>
    </header>
    {{-- header end --}}

    {{-- home section start --}}
    <section class="home" id="home">
      
      <div class="content">
        <h2>Villa Rintonaji</h2>
        <p>Take a break and escape the city noises<br>
          Reward yourself with natural silence</p>
        <a href="/contact" class="btn shake-occasionally">Book Now</a>
      </div>

      <div class="video-overlay">
        <video width="540" height="360" controls>
        <source src="vid/rintonaji-vid.mp4" type="video/mp4">
        </video> 
      </div>
      
    </section>
    {{-- home section end --}}

</body>
</html>