<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Mapping System - Lanao del Norte</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        /* General Styles */
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }

        /* Layout */
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
            padding-bottom: 20px;
            animation: fadeIn 1.2s ease-out; /* Page fade-in effect */
        }

        /* Navigation Bar */
        .navbar {
            background: linear-gradient(to right, #00695c, #bd2081);
            padding: 15px 0;
        }

        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
            color: #fff !important;
            letter-spacing: 1px;
            transition: color 0.3s ease;
        }

        .navbar-brand:hover {
            color: #cfd8dc !important;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            font-size: 1rem;
            font-weight: 500;
            transition: color 0.3s ease;
            margin-right: 15px;
        }

        .navbar-nav .nav-link:hover {
            color: #cfd8dc !important;
            text-decoration: underline;
        }

        /* Map Container */
        #map {
            height: 600px;
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            border: 2px solid #bd2081;
        }
           .barangay-card {
        perspective: 1000px;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .barangay-card-inner {
        transition: transform 0.6s;
        transform-style: preserve-3d;
        width: 100%;
        height: 250px;
        position: relative;
    }

    .barangay-card:hover .barangay-card-inner {
        transform: rotateY(180deg);
    }

    .barangay-card-front, .barangay-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 12px;
        backface-visibility: hidden;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .barangay-card-front {
        background-color: #edf2f7;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-weight: bold;
        font-size: 1.5rem;
        color: #00695c;
    }

    .barangay-card-back {
        background-size: cover;
        background-position: center;
        transform: rotateY(180deg);
    }

        /* Footer */
        footer {
            background: linear-gradient(to right, #00695c, #bd2081);
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: auto;
            font-size: 0.95rem;
        }

        footer a {
            color: #cfd8dc;
            text-decoration: none;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #ffffff;
        }

        footer .social-icons a {
            font-size: 1.3rem;
            margin: 0 10px;
            transition: transform 0.3s ease;
        }

        footer .social-icons a:hover {
            transform: translateY(-5px);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">Creative Mapping System</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <<li class="nav-item"><a class="nav-link" href="{{ route('municipality.index') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="content container mt-4">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer>
            <div class="container">
                <p>&copy; {{ date('Y') }} Creative Mapping System | Lanao del Norte</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/DTICIDO" target="_blank" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
