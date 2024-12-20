<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sehari di Pulau Pari</title>
    <link rel="icon" type="image/x-icon" href="icon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0d1c34;
            color: #ffffff;
            line-height: 1.6;
            padding-top: 60px;
        }

        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #070e1a; 
            padding: 25px 275px;
            position: fixed; 
            top: 0; 
            width: 100%; 
            transition: background-color 0.3s ease; 
            z-index: 1000; 
        }

        .header .container {
            width: 80%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header .logo img {
            height: 80px;
            cursor: pointer;
        }

        .header .right-menu {
            display: flex;
            align-items: center;
            gap: 30px;
            margin-right: 550px; 
            position: relative;
        }

        .header .right-menu .menu-item {
            cursor: pointer;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: inherit;
        }

        .header .right-menu .menu-item:hover {
            color: #d3d3d3;
        }

        .menu-item i {
            margin-left: 5px; 
        }

        .support-popup {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            transform: translateY(10px);
            background-color: #070e1a;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 4px;
            width: 160px;
            z-index: 10;
            opacity: 0;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .support-popup.show {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .support-popup a {
            display: block;
            padding: 8px 0;
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }

        .support-popup a:hover {
            background-color: #f1f1f1;
        }

        .containerr {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
        }

        .headline {
            text-align: center;
        }

        .headline img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        h1, h2 {
            color: #ffffff;
            text-align: center;
        }

        .content {
            background: #1c2a48;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .content h2 {
            font-size: 1.5rem;
            margin-top: 20px;
        }

        .content p {
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .price {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            background: #ffffff;
            color: #0d1c34;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 30px;
            border-radius: 8px;
            margin-top: 20px;
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            text-decoration: none;
            color: #ffffff;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<header class="header">
  <div class="container">
    <a href="index.php">
      <div class="logo">
        <img src="logo.png" alt="Logo">
      </div>
    </a>

    <div class="right-menu">
      <div class="menu-item" id="support">
        Support <i class="fas fa-caret-down"></i>
      </div>
      <div class="support-popup" id="supportPopup">
        <a href="helpcenter.php" class="menu-item"><i class="fas fa-comment"></i>   Help Center</a>
        <a href="faq.php" class="menu-item"><i class="fas fa-question-circle"></i>   FAQ</a>
      </div>

      <a href="peta.php" class="menu-item">Peta <i class="fas fa-map"></i></a>
      <a href="kalkulator.php" class="menu-item">Kalkulator Wisata <i class="fas fa-calculator"></i></a>
    </div>
  </div>
</header>
    <div class="containerr">
        <div class="headline">
            <h1>Sehari di Pulau Pari</h1>
            <img src="destination4.jpg" alt="Pulau Pari">
        </div>
        <div class="content">
            <p><strong>Buat kamu orang Jabodetabek yang jenuh sama perkotaan, yuk nyeberang sebentar ke Pulau Pari! Kamu bisa menikmati pantai berpasir putih, air laut yang jernih, sampai kenalan sama penghuni laut di sana. Yuk, ikutan!</strong></p>
            
            <h2>Lokasi</h2>
            <p>Pulau Pari, terletak di Kepulauan Seribu, DKI Jakarta, adalah destinasi yang sempurna untuk escape dari hiruk-pikuk perkotaan. Dengan keindahan pantai berpasir putih dan air laut yang jernih, pulau ini menjadi tempat yang pas untuk relaksasi dan menikmati alam.</p>
            
            <h2>Highlight Acara</h2>
            <ul>
                <li>Menikmati pantai berpasir putih dan air laut jernih.</li>
                <li>Snorkeling dan menjelajahi keindahan bawah laut.</li>
                <li>Mengunjungi penangkaran ikan dan menikmati keindahan alam sekitar.</li>
            </ul>
            
            <h2>Harga Tiket</h2>
            <p class="price">Mulai dari: IDR 180,000</p>
        </div>
    </div>
    <script>
        const supportMenu = document.getElementById('support');
        const supportPopup = document.getElementById('supportPopup');

        supportMenu.addEventListener('click', function(event) {
            event.stopPropagation();
            supportPopup.classList.toggle('show');
        });

        window.addEventListener('click', function(event) {
            if (!supportMenu.contains(event.target) && !supportPopup.contains(event.target)) {
                supportPopup.classList.remove('show');
            }
        });
    </script>
</body>
</html>
