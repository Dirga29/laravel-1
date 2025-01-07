<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
            background-color: #f9f9f9;
            color: #333;
        }

        /* Navbar Styling */
        nav {
            background: linear-gradient(135deg, #2c3e50, #3498db);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        nav ul li {
            display: inline;
            margin: 0 25px;
            position: relative;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        nav ul li a:hover {
            color: #ffd700;
        }

        /* Profile dropdown styling */
        .profile-section {
            margin-left: auto;
            position: relative;
        }

        .profile-icon {
            width: 40px;
            height: 40px;
            background-color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .profile-icon:hover {
            background-color: #f0f0f0;
        }

        .profile-icon i {
            color: #2c3e50;
            font-size: 20px;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            right: 0;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            min-width: 200px;
            display: none;
            margin-top: 10px;
            z-index: 1001;
        }

        .dropdown-menu.show {
            display: block;
        }

        .dropdown-menu a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
            text-transform: none;
            font-size: 14px;
        }

        .dropdown-menu a i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .dropdown-menu a:hover {
            background-color: #f8f9fa;
            color: #3498db;
        }

        .dropdown-divider {
            height: 1px;
            background-color: #eee;
            margin: 5px 0;
        }

        /* Header Section */
        header {
            background-color: #1c1c1c;
            color: white;
            padding: 80px 20px 50px;
            text-align: center;
            margin-top: 60px;
        }

        header h1 {
            font-size: 3.5em;
            margin-top: 20px;
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
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 50px 20px;
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .abouut {
            padding: 20px;
        }

        .about-text {
            width: 60%;
        }

        .about-image {
            width: 35%;
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
            padding: 20px 0;
            margin-top: 50px;
        }

        footer p {
            font-size: 1.1em;
        }

        /* Special Features Section */
        .special-features {
            padding: 50px 20px;
            background-color: #f4f4f4;
            text-align: center;
        }

        .special-features h3 {
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        .special-features .feature {
            display: inline-block;
            width: 22%;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .special-features .feature:hover {
            transform: scale(1.05);
        }

        .special-features .feature i {
            font-size: 40px;
            color:#3498db;
            margin-bottom: 15px;
        }

        .special-features .feature h4 {
            font-size: 1.6em;
            margin-bottom: 10px;
        }

        .special-features .feature p {
            font-size: 1.1em;
            color: #555;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                text-align: left;
            }

            .about-section {
                flex-direction: column;
                padding: 20px;
            }

            .about-text {
                width: 100%;
                margin-bottom: 20px;
            }

            .about-image {
                width: 100%;
            }

            .timeline-container {
                flex-direction: column;
                gap: 20px;
            }

            .special-features .feature {
                width: 100%;
            }
        }

        /* Add spacing between elements */
        .about-section, .mission-section, .timeline-section, .special-features {
            margin-bottom: 50px;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <ul>
            <li><a href="home"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="about"><i class="fas fa-info-circle"></i> About</a></li>
            <li><a href="contact"><i class="fas fa-envelope"></i> Contact</a></li>
            <li><a href="product"><i class="fas fa-shopping-cart"></i> Product</a></li>
            <li class="profile-section">
                <div class="profile-icon" id="profileButton">
                    <i class="fas fa-user"></i>
                </div>
                <div class="dropdown-menu" id="profileDropdown">
                    <a href="profile"><i class="fas fa-user-circle"></i> Your Profile</a>
                    <a href="settings"><i class="fas fa-cog"></i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a href="logout" style="color: #dc3545;"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header>
        <h1>Tentang Kami</h1>
        <p>Mengenal lebih dalam tentang perusahaan otomotif kami, sejarah, dan misi kami untuk masa depan yang lebih baik</p>
    </header>

    <!-- About Section -->
    <section id="about">
            <div class="abouut">
            <h2>About Us</h2>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                <div>
                    <h3 style="color: #2c3e50; font-size: 20px; margin-bottom: 15px;">Our Vision</h3>
                    <p style="margin-bottom: 20px;">Menjadi dealer mobil terpercaya di Indonesia dengan menyediakan kendaraan berkualitas tinggi dan layanan purna jual terbaik untuk kepuasan pelanggan.</p>
                    
                    <h3 style="color: #2c3e50; font-size: 20px; margin-bottom: 15px;">Our Services</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 10px;"><i class="fas fa-car" style="color: #3498db; margin-right: 10px;"></i>Penjualan Mobil Baru & Bekas Berkualitas</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-tools" style="color: #3498db; margin-right: 10px;"></i>Servis & Perawatan Berkala</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-cogs" style="color: #3498db; margin-right: 10px;"></i>Spare Parts Original</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-hand-holding-usd" style="color: #3498db; margin-right: 10px;"></i>Pembiayaan & Asuransi</li>
                    </ul>

                    <h3 style="color: #2c3e50; font-size: 20px; margin: 20px 0 15px;">Available Brands</h3>
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;">
                        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;">
                            <i class="fas fa-car-side" style="color: #3498db; font-size: 24px;"></i>
                            <p style="margin-top: 5px;">Toyota</p>
                        </div>
                        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;">
                            <i class="fas fa-car-side" style="color: #3498db; font-size: 24px;"></i>
                            <p style="margin-top: 5px;">Honda</p>
                        </div>
                        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px; text-align: center;">
                            <i class="fas fa-car-side" style="color: #3498db; font-size: 24px;"></i>
                            <p style="margin-top: 5px;">Suzuki</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 style="color: #2c3e50; font-size: 20px; margin-bottom: 15px;">Why Choose Us?</h3>
                    <div style="display: grid; gap: 20px;">
                        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                            <i class="fas fa-award" style="color: #3498db; font-size: 24px; margin-bottom: 10px;"></i>
                            <h4 style="margin-bottom: 8px;">Pengalaman 15+ Tahun</h4>
                            <p>Dealer resmi dengan pengalaman lebih dari 15 tahun melayani pelanggan</p>
                        </div>
                        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                            <i class="fas fa-certificate" style="color: #3498db; font-size: 24px; margin-bottom: 10px;"></i>
                            <h4 style="margin-bottom: 8px;">Bengkel Bersertifikasi</h4>
                            <p>Dilengkapi bengkel resmi dengan mekanik tersertifikasi</p>
                        </div>
                        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                            <i class="fas fa-handshake" style="color: #3498db; font-size: 24px; margin-bottom: 10px;"></i>
                            <h4 style="margin-bottom: 8px;">Layanan Prima</h4>
                            <p>Pelayanan terbaik dengan garansi kepuasan pelanggan</p>
                        </div>
                        <div style="background: #f8f9fa; padding: 15px; border-radius: 8px;">
                            <i class="fas fa-clock" style="color: #3498db; font-size: 24px; margin-bottom: 10px;"></i>
                            <h4 style="margin-bottom: 8px;">24/7 Support</h4>
                            <p>Layanan darurat 24 jam dan bantuan teknis setiap saat</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- Added Special Features Section -->
            <div style="margin-top: 30px; padding-top: 30px; border-top: 1px solid #eee;">
                <h3 style="color: #2c3e50; font-size: 20px; margin-bottom: 20px;">Special Features</h3>
                <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                    <div style="text-align: center;">
                        <i class="fas fa-mobile-alt" style="color: #3498db; font-size: 30px; margin-bottom: 10px;"></i>
                        <h4 style="margin-bottom: 8px;">Mobile App</h4>
                        <p>Booking service dari smartphone Anda</p>
                    </div>
                    <div style="text-align: center;">
                        <i class="fas fa-car-battery" style="color: #3498db; font-size: 30px; margin-bottom: 10px;"></i>
                        <h4 style="margin-bottom: 8px;">Test Drive</h4>
                        <p>Uji coba mobil impian Anda</p>
                    </div>
                    <div style="text-align: center;">
                        <i class="fas fa-map-marked-alt" style="color: #3498db; font-size: 30px; margin-bottom: 10px;"></i>
                        <h4 style="margin-bottom: 8px;">Trade-In</h4>
                        <p>Tukar tambah mobil lama Anda</p>
                    </div>
                    <div style="text-align: center;">
                        <i class="fas fa-clipboard-check" style="color: #3498db; font-size: 30px; margin-bottom: 10px;"></i>
                        <h4 style="margin-bottom: 8px;">Insurance</h4>
                        <p>Asuransi kendaraan terpercaya</p>
                    </div>
                </div>
            </div>
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
<script>
        // Profile dropdown functionality
        const profileButton = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');
        
        // Toggle dropdown on profile icon click
        profileButton.addEventListener('click', (e) => {
            e.stopPropagation();
            profileDropdown.classList.toggle('show');
        });

        // Close dropdown when clicking outside

        document.addEventListener('click', (e) => {
            if (!profileButton.contains(e.target)) {
                profileDropdown.classList.remove('show');
            }
        });

        // Prevent dropdown from closing when clicking inside it
        profileDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    </script>
</html>
