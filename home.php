<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Signals</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .hero {
            background: url('https://source.unsplash.com/1600x900/?crypto') center/cover no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        .hero p {
            font-size: 1.25rem;
            margin: 20px 0;
        }
        .btn-primary {
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .testimonial {
            background-color: #ffffff;
            padding: 50px 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php include('../includes/header.php'); ?>

    <main>
        <!-- Hero Section -->
        <div class="hero">
            <div>
                <h1>Welcome to Crypto Signals</h1>
                <p>Join our exclusive groups to stay ahead in the crypto market with expert signals.</p>
                <a href="join_vip.php" class="btn btn-primary">Join Now</a>
            </div>
        </div>

        <!-- Features Section -->
        <section class="py-5">
            <div class="container text-center">
                <h2>Why Choose Us?</h2>
                <p class="mb-5">Discover the benefits of joining our crypto signals community.</p>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Expert Analysis</h5>
                                <p class="card-text">Get signals backed by in-depth market research and analysis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Real-Time Updates</h5>
                                <p class="card-text">Stay updated with instant notifications and alerts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Proven Track Record</h5>
                                <p class="card-text">Join thousands of members achieving consistent results.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-5 bg-light">
            <div class="container text-center">
                <h2>What Our Members Say</h2>
                <p class="mb-5">Read testimonials from our satisfied members.</p>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="testimonial">
                            <p><em>"The best crypto signals service I have ever used. Consistent and reliable!"</em></p>
                            <h6>- John D.</h6>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="testimonial">
                            <p><em>"Thanks to Crypto Signals, I made more informed decisions and boosted my profits!"</em></p>
                            <h6>- Sarah L.</h6>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="testimonial">
                            <p><em>"Amazing community and excellent support. Highly recommended!"</em></p>
                            <h6>- Michael P.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('../includes/footer.php'); ?>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
