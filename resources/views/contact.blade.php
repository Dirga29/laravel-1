<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Perusahaan Teknologi</title>
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
            background-color: #2a2a2a;
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        header h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2em;
        }

        /* Contact Section */
        .contact-section {
            display: flex;
            justify-content: space-between;
            padding: 50px 20px;
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .contact-info {
            width: 45%;
        }

        .contact-info h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .contact-info p {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .contact-form {
            width: 45%;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-form h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            text-align: center;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 1em;
        }

        .contact-form textarea {
            resize: vertical;
            height: 150px;
        }

        .contact-form button {
            width: 100%;
            padding: 12px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #555;
        }

        /* Google Maps Section */
        .map-section {
            margin-top: 40px;
            padding: 20px;
            text-align: center;
        }

        .map-section iframe {
            width: 100%;
            height: 400px;
            border: 0;
            border-radius: 8px;
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
        <h1>Contact Us</h1>
        <p>Hubungi kami untuk pertanyaan lebih lanjut atau informasi lebih lanjut mengenai produk dan layanan kami.</p>
    </header>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <!-- Contact Information -->
        <div class="contact-info">
            <h2>Kontak Kami</h2>
            <p>Anda dapat menghubungi kami melalui informasi berikut:</p>
            <ul>
                <li><strong>Email:</strong> info@perusahaan.com</li>
                <li><strong>Telepon:</strong> 123-456-7890</li>
                <li><strong>Alamat:</strong> Jl. Teknologi No. 12, Jakarta, Indonesia</li>
            </ul>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <h2>Formulir Kontak</h2>
            <form action="#" method="POST">
                <input type="text" name="name" placeholder="Nama Anda" required>
                <input type="email" name="email" placeholder="Email Anda" required>
                <textarea name="message" placeholder="Pesan Anda" required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
        </div>
    </section>

    <!-- Google Maps Section -->
    <section class="map-section">
        <h2>Lokasi Kami</h2>
        <iframe src="https://www.google.com/maps/embed/v1/place?q=Jl.+Teknologi+No.12,+Jakarta,+Indonesia&key=YOUR_GOOGLE_MAPS_API_KEY" 
                allowfullscreen></iframe>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Perusahaan Teknologi | Semua Hak Dilindungi</p>
    </footer>

</body>
</html>
