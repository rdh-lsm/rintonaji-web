<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
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
    <section class="contact" id="contact">
      
      <div class="container">
        <div class="contact-box">
          <div class="left"></div>
          <div class="right">
            <h2>Contact Us</h2>
            <input type="text" class="field" placeholder="Your Name">
            <input type="email" class="field" placeholder="Your Email">
            <input type="text" class="field" placeholder="Phone Number">
            <textarea class="field" placeholder="Message"></textarea>
            <button class="btn">Send</button>
          </div>
        </div>
      </div>

    </section>
    {{-- content end --}}

</body>
</html>