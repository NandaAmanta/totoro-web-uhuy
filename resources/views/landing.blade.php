<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Sederhana</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header,
        .footer {
            background-color: #333;
            color: #fff;
        }

        .header {
            padding: 10px 0;
        }

        .hero-section {
            text-align: center;
            padding: 50px 20px;
        }

        .hero-section img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .cta-button {
            margin-top: 20px;
            font-size: 18px;
        }

        .footer {
            padding: 15px 0;
        }

        .section-title {
            margin-bottom: 30px;
        }

        .feature-icon {
            font-size: 50px;
            color: #007BFF;
        }
    </style>
</head>

<body>

    <!-- Header with Navbar -->
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark container">
            <a class="navbar-brand" href="#">Totoro Company</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Hero Section -->
    <section class="hero-section bg-light">
        <div class="container">
            <img src="https://miro.medium.com/v2/resize:fit:550/1*QNIa-CgHoF7M3PnoPAH5mA.jpeg" alt="Banner Image">
            <h1 class="display-4">Grow Your Business with Totoro</h1>
            <p class="lead">We help businesses to thrive in the digital world with our innovative solutions and
                services.</p>
            <a href="#contact" class="btn btn-primary cta-button">Get Started</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="container my-5">
        <div class="text-center section-title">
            <h2>About TotoroR</h2>
            <p>Learn more about who we are and our mission.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Our Mission</h3>
                <p>Our mission is to empower businesses by providing them with the digital tools they need to succeed in
                    an increasingly digital world.</p>
            </div>
            <div class="col-md-6">
                <h3>Our Vision</h3>
                <p>We envision a future where all businesses, large and small, can compete on a global scale thanks to
                    the power of digital solutions.</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="bg-light py-5">
        <div class="container text-center section-title">
            <h2>Our Services</h2>
            <p>We offer a wide range of services to help your business grow.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-icon mb-3">🌐</div>
                    <h4>Web Development</h4>
                    <p>Professional website design and development to showcase your business online.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon mb-3">📱</div>
                    <h4>Mobile App Development</h4>
                    <p>Custom mobile applications that make your business accessible on the go.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon mb-3">📈</div>
                    <h4>Digital Marketing</h4>
                    <p>Comprehensive digital marketing solutions to increase your reach and engagement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container my-5">
        <div class="text-center section-title">
            <h2>Contact Totoro</h2>
            <p>Have questions? Reach out to us today.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <div class="footer">
        <div class="container text-center">
            <p>&copy; 2024 Totoro. All rights reserved.</p>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
