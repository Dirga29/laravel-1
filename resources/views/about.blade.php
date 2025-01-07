<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Perusahaan Otomotif</title>
    <style>
        /* Reset margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Navbar Styling */
        nav {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Header Section */
        header {
            background-color: #1c1c1c;
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        header h1 {
            font-size: 3.5em;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.3em;
            font-weight: lighter;
            margin-top: 15px;
        }

        /* About Section */
        .about-section {
            display: flex;
            justify-content: space-between;
            padding: 50px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-text {
            width: 55%;
        }

        .about-image {
            width: 40%;
            text-align: center;
        }

        .about-image img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .about-text h2 {
            font-size: 2.8em;
            margin-bottom: 20px;
        }

        .about-text p {
            font-size: 1.2em;
            color: #555;
            line-height: 1.6;
        }

        .about-text ul {
            list-style-type: none;
            margin-top: 30px;
        }

        .about-text ul li {
            font-size: 1.1em;
            color: #444;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .about-text ul li::before {
            content: '🚗';
            margin-right: 10px;
            font-size: 1.5em;
        }

        /* Our Vision & Mission Section */
        .mission-section {
            background-color: #fff;
            padding: 60px 20px;
            margin-top: 30px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .mission-section h2 {
            font-size: 2.8em;
            margin-bottom: 20px;
        }

        .mission-section p {
            font-size: 1.4em;
            color: #444;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        /* Timeline Section */
        .timeline-section {
            padding: 50px 20px;
            background-color: #f9f9f9;
            text-align: center;
        }

        .timeline-section h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        .timeline-container {
            display: flex;
            justify-content: space-around;
            gap: 40px;
            flex-wrap: wrap;
        }

        .timeline-item {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .timeline-item h3 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .timeline-item p {
            font-size: 1.1em;
            color: #555;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <ul>
            <li><a href="home">home</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="product">Product</a></li>
        </ul>
    </nav>

    <!-- Header -->
    <header>
        <h1>Tentang Kami</h1>
        <p>Mengenal lebih dalam tentang perusahaan otomotif kami, sejarah, dan misi kami untuk masa depan yang lebih baik</p>
    </header>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="about-text">
            <h2>Siapa Kami?</h2>
            <p>
                Kami adalah perusahaan otomotif terkemuka yang telah beroperasi selama lebih dari 20 tahun, berfokus pada inovasi dalam dunia kendaraan bermotor. Dengan komitmen terhadap kualitas, kami menawarkan berbagai produk otomotif unggulan yang mendukung mobilitas dan kenyamanan pengendara di seluruh dunia.
            </p>
            <p>
                Dengan lebih dari dua dekade pengalaman, kami telah menjadi pionir dalam menyediakan kendaraan yang menggabungkan teknologi mutakhir dengan desain yang memikat. Produk kami dirancang untuk memenuhi kebutuhan pasar yang terus berkembang, dari mobil keluarga hingga kendaraan sport premium.
            </p>
            <ul>
                <li>Inovasi berkelanjutan</li>
                <li>Keamanan dan kenyamanan maksimal</li>
                <li>Komitmen terhadap ramah lingkungan</li>
                <li>Desain dan performa terbaik</li>
            </ul>
        </div>
        <div class="about-image">
            <img src="data:image/jpeg;base64,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" alt="Mobil Otomotif">
        </div>
    </section>

    <!-- Our Vision & Mission Section -->
    <section class="mission-section">
        <h2>Visi dan Misi Kami</h2>
        <p>
            **Visi Kami:** Menjadi perusahaan otomotif terdepan yang selalu mendahului tren dan memberikan inovasi kendaraan terbaik di dunia.
        </p>
        <p>
            **Misi Kami:** Menciptakan pengalaman berkendara yang luar biasa bagi pelanggan dengan fokus pada kualitas, keselamatan, dan keberlanjutan. Kami juga berkomitmen untuk terus mengembangkan teknologi ramah lingkungan untuk kendaraan masa depan.
        </p>
    </section>

    <!-- Timeline Section -->
    <section class="timeline-section">
        <h2>Perjalanan Kami</h2>
        <div class="timeline-container">
            <div class="timeline-item">
                <h3>2005</h3>
                <p>Perusahaan didirikan dengan tujuan untuk membawa perubahan dalam industri otomotif Indonesia.</p>
            </div>
            <div class="timeline-item">
                <h3>2010</h3>
                <p>Meluncurkan mobil pertama dengan teknologi hybrid, menandai komitmen kami terhadap keberlanjutan.</p>
            </div>
            <div class="timeline-item">
                <h3>2015</h3>
                <p>Memperluas pasar global dengan ekspor ke Asia, Eropa, dan Amerika.</p>
            </div>
            <div class="timeline-item">
                <h3>2020</h3>
                <p>Meluncurkan kendaraan listrik pertama dan menjadi pionir dalam industri otomotif hijau.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Perusahaan Otomotif | Semua Hak Dilindungi</p>
    </footer>

</body>
</html>
