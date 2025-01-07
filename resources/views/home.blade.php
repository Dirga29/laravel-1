<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Previous styles remain the same... */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            line-height: 1.6;
            color: #333;
        }

        /* Navbar styling */
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

        /* Profile dropdown styling - Updated for click interaction */
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

        /* Rest of your existing styles... */
        /* (Keep all other styles the same) */

        @media (max-width: 768px) {
            nav ul {
                flex-wrap: wrap;
            }
            
            nav ul li {
                margin: 5px 15px;
            }

            .profile-section {
                margin: 10px auto;
            }

            .dropdown-menu {
                position: fixed;
                width: 100%;
                left: 0;
                right: 0;
                border-radius: 0;
            }
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

    <!-- Rest of your HTML content remains the same... -->
    <!-- (Keep all other HTML content the same) -->

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
</body>
</html>