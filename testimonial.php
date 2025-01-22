<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials</title>
    <style>
        /* Styling for the testimonial page */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        main {
            padding: 20px;
        }

        .testimonial-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .testimonial-header h1 {
            font-size: 3rem;
            color: #333;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .testimonial-header p {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 20px;
        }

        .testimonials {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }

        .testimonial-item {
            background: linear-gradient(135deg, #ffffff, #f9f9f9);
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            padding: 25px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .testimonial-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .testimonial-item img {
            border-radius: 50%;
            width: 70px;
            height: 70px;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .testimonial-quote {
            font-size: 1.1rem;
            font-style: italic;
            color: #444;
            margin-bottom: 15px;
            position: relative;
            flex-grow: 1;
        }

        .testimonial-quote::before {
            content: "“";
            font-size: 3rem;
            color: #4a90e2;
            position: absolute;
            top: -20px;
            left: -20px;
        }

        .testimonial-quote::after {
            content: "”";
            font-size: 3rem;
            color: #4a90e2;
            position: absolute;
            bottom: -20px;
            right: -20px;
        }

        .testimonial-author {
            display: block;
            font-size: 1rem;
            color: #666;
            margin-top: 15px;
            font-weight: bold;
        }

        .testimonial-rating {
            margin-top: 10px;
            color: #f2b600;
        }

        .testimonial-rating i {
            font-size: 1.5rem;
            margin-right: 5px;
        }

        /* For responsiveness */
        @media (max-width: 768px) {
            .testimonial-header h1 {
                font-size: 2.5rem;
            }

            .testimonial-header p {
                font-size: 1rem;
            }

            .testimonial-item {
                padding: 20px;
                flex-direction: column;
                align-items: flex-start;
            }

            .testimonial-item img {
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
<main class="testimonial-page">
    <section class="testimonial-header">
        <h1>What Our Users Say</h1>
        <p>Discover how our service is helping users succeed!</p>
    </section>

    <section class="testimonials">
        <div class="testimonial-item">
            <img src="https://via.placeholder.com/70" alt="User 1">
            <div>
                <blockquote class="testimonial-quote">
                    "Crypto Signals has helped me make informed trades and boost my profits!" 
                </blockquote>
                <span class="testimonial-author">- User 1</span>
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="testimonial-item">
            <img src="https://via.placeholder.com/70" alt="User 2">
            <div>
                <blockquote class="testimonial-quote">
                    "I was skeptical at first, but now I can't imagine trading without Crypto Signals!" 
                </blockquote>
                <span class="testimonial-author">- User 2</span>
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="testimonial-item">
            <img src="https://via.placeholder.com/70" alt="User 3">
            <div>
                <blockquote class="testimonial-quote">
                    "The tips I get are always spot on! A must-have tool for serious traders." 
                </blockquote>
                <span class="testimonial-author">- User 3</span>
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>

        <div class="testimonial-item">
            <img src="https://via.placeholder.com/70" alt="User 4">
            <div>
                <blockquote class="testimonial-quote">
                    "I highly recommend this service. It has significantly improved my trading strategy." 
                </blockquote>
                <span class="testimonial-author">- User 4</span>
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>

        <div class="testimonial-item">
            <img src="https://via.placeholder.com/70" alt="User 5">
            <div>
                <blockquote class="testimonial-quote">
                    "The information provided has helped me turn my trades around. So thankful for this!" 
                </blockquote>
                <span class="testimonial-author">- User 5</span>
                <div class="testimonial-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('../includes/footer.php'); ?>

<script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome for Star Icons -->
</body>
</html>
