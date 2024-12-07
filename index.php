<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Dewan High School</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Montserrat:wght@400;600&display=swap"
        rel="stylesheet">
    <link rel="icon" href="logo.png">
    <style>
    /* Reset default margins and paddings */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Body Styling */
    body {
        font-family: 'Roboto', sans-serif;
        background: url('bg.jpg') no-repeat center center fixed;
        /* Adjusted path */
        background-size: cover;
        color: #ffffff;
        position: relative;
        scroll-behavior: smooth;
        /* Enables smooth scrolling */
    }

    /* Overlay for better text visibility */
    .overlay {
        background: rgba(0, 0, 0, 0.6);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        pointer-events: none;
        /* Allows interactions with underlying content */
    }

    /* Content Container */
    .content {
        position: relative;
        z-index: 2;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    /* Footer Styling */
    .footer {
        text-align: center;
        padding: 20px 0;
        background-color: rgba(0, 0, 0, 0.6);
        /* Optional: Adds a dark background to make text readable */
        color: white;
        width: 100%;
        /* Ensures footer takes full width */
    }


    /* Navbar Styling */
    .navbar {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(15px);
        border-radius: 10px;
        padding: 10px 20px;
        transition: background 0.3s ease;
        position: fixed;
        width: 100%;
        z-index: 999;
        top: 0;
        left: 0;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand img {
        width: 35px;
        height: auto;
        transition: transform 0.3s ease;
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
    }

    .nav-link,
    .btn-home {
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        color: #ffffff !important;
        margin-right: 15px;
        transition: color 0.3s ease, background 0.3s ease;
    }

    .nav-link:hover,
    .btn-home:hover {
        color: #ffeb3b !important;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 20px;
    }

    /* Welcome Section */
    .welcome-section {
        text-align: center;
        padding: 100px 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    .welcome-section img {
        width: 100px;
        margin-bottom: 20px;
        border-radius: 50%;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    .welcome-section h1 {
        font-family: 'Montserrat', sans-serif;
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 10px;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    }

    .welcome-section p {
        font-size: 20px;
        letter-spacing: 1.5px;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.4);
    }

    /* About Section */
    .about-section {
        padding: 100px 20px;
        text-align: center;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        margin: 50px auto;
        max-width: 800px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
    }

    .about-section h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    }

    .about-section p {
        font-size: 18px;
        line-height: 1.6;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.4);
    }

    /* Navbar visibility based on mouse position */
    .navbar-hidden {
        transform: translateY(-100%);
        transition: transform 0.5s ease;
    }

    .navbar-visible {
        transform: translateY(0);
        transition: transform 0.5s ease;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .welcome-section h1 {
            font-size: 36px;
        }

        .welcome-section p {
            font-size: 18px;
        }

        .about-section h2 {
            font-size: 28px;
        }

        .about-section p {
            font-size: 16px;
        }
    }
    </style>


</head>

<body>
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Content -->
    <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-hidden" id="homeNav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#home">
                    <img src="logo.png" alt="Dewan High School Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <button type="button" class="btn btn-home"
                                onclick="window.location.href='#home';">Home</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-home"
                                onclick="window.location.href='#about';">About</button>
                        </li>

                        <li class="nav-item">
                            <button type="button" class="btn btn-home"
                                onclick="window.location.href='http://localhost/chatbot/chatbot.php';">Chat
                                </button>
                        </li>

                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <form method="POST" action="hsms/view/login.php">
                                <input type="hidden" name="do" value="user_login" />
                                <button type="submit" class="btn btn-home">Log In</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Welcome Section -->
        <div class="welcome-section">
            <img src="logo.png" alt="Dewan High School">
            <h1>Welcome to Dewan High School</h1>
            <p>Your journey to academic excellence begins here</p>
        </div>

        <!-- About Section -->
        <div class="about-section" id="about">
            <h2>About Us</h2>
            <p>We are dedicated to fostering an environment where students can grow, learn, and thrive. Our mission is
                to provide an inclusive and engaging education that equips students for success in a rapidly changing
                world.</p>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Dewan High School. All rights reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Show navbar when mouse is near the top
        $(window).on('mousemove', function(e) {
            if (e.clientY <= 50) {
                $('#homeNav').removeClass('navbar-hidden').addClass('navbar-visible');
            } else {
                $('#homeNav').removeClass('navbar-visible').addClass('navbar-hidden');
            }
        });
    });
    </script>



</body>

</html>