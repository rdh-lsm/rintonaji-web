<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lokasi</title>
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
    
    {{-- content start --}}
    <section class="location" id="location">
      
      <div class="location-container">
        <div class="location-box">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.8809048646476!2d106.71530027592443!3d-6.661678693333227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69d1095aff0faf%3A0xf0a33ff98d93ea9e!2sVilla%20Rintonaji%20-%20Salak%20View%20House!5e0!3m2!1sen!2sid!4v1750076440971!5m2!1sen!2sid" 
            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
          <div class="desc">
            <h2>Our Location</h2>
            <p>Gunung Malang, Tenjolaya, Bogor Regency, West Java 16370</p>
          </div>
        </div>
      </div>

    </section>
    {{-- content end --}}

</body>
</html>