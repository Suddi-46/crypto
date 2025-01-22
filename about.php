<?php include('../includes/header.php'); ?>

<main>
    <div class="container">
        <h1>About Hannie</h1>

        <section class="about-section">
            <div class="profile-header">
                <h2>Meet Hannie - Expert in Crypto & Forex Markets</h2>
                <div class="profile-img">
                    <img src="path_to_hannie_image.jpg" alt="Hannie's Profile Picture" class="profile-img">
                </div>
            </div>

            <p>Hannie is a seasoned professional with over 5 years of experience in the cryptocurrency and forex markets. With a deep understanding of market dynamics and the latest trends, Hannie has successfully navigated through both the volatile crypto space and the ever-changing forex market.</p>

            <p>Throughout the years, Hannie has developed a reputation for insightful analysis, strategic thinking, and a disciplined approach to trading. Hannie has helped countless individuals and institutions optimize their portfolios, providing them with tailored strategies that align with their financial goals.</p>

            <h3>Key Skills & Expertise:</h3>
            <ul class="expertise-list">
                <li><strong>In-depth Crypto Knowledge:</strong> Understanding of major cryptocurrencies, altcoins, blockchain technologies, and decentralized finance (DeFi) platforms.</li>
                <li><strong>Forex Market Mastery:</strong> Expertise in currency pairs, market analysis, risk management, and economic indicators.</li>
                <li><strong>Trading Strategies:</strong> Development and implementation of profitable trading strategies tailored to different risk profiles and market conditions.</li>
                <li><strong>Technical Analysis:</strong> Skilled in charting, pattern recognition, and using technical indicators to predict market movements.</li>
                <li><strong>Educational Mentorship:</strong> Hannie has taught hundreds of students, guiding them through the intricacies of both crypto and forex markets.</li>
            </ul>

            <h3>Achievements & Accolades:</h3>
            <p>Over the years, Hannie has achieved significant success in trading, consistently making profitable trades and providing exceptional results to clients. Hannie has also been featured in multiple financial webinars and podcasts, sharing insights and educating others about the potential of crypto and forex trading.</p>

            <p>Hannie's journey in the crypto and forex markets continues to inspire others to take control of their financial future and embrace the opportunities these markets present.</p>

            <h3>Why Choose Hannie?</h3>
            <ul class="why-choose-list">
                <li><strong>Proven Track Record:</strong> Consistent profitability in both crypto and forex markets.</li>
                <li><strong>Trusted by Clients:</strong> Hannie’s clients trust the expertise and guidance provided, which has led to long-term relationships.</li>
                <li><strong>Innovative Approach:</strong> Always staying ahead of the curve with the latest market trends and technology.</li>
                <li><strong>Passionate Educator:</strong> Hannie loves sharing knowledge and helping others achieve success in trading.</li>
            </ul>

            <p>Whether you are a beginner looking to get started or an experienced trader seeking advanced strategies, Hannie is committed to helping you succeed in the world of crypto and forex.</p>
        </section>
    </div>
</main>

<?php include('../includes/footer.php'); ?>

<!-- Add inline CSS for enhanced design -->
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f9f9f9;
        color: #333;
        line-height: 1.6;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        padding: 30px 0;
    }

    h1 {
        font-size: 32px;
        text-align: center;
        color: #333;
    }

    .about-section {
        background-color: #fff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .profile-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 30px;
    }

    .profile-header h2 {
        font-size: 28px;
        color: #444;
        margin-bottom: 0;
    }

    .profile-img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        margin-left: 30px;
    }

    .profile-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    h3 {
        font-size: 24px;
        color: #555;
        margin-top: 30px;
    }

    .expertise-list, .why-choose-list {
        list-style: none;
        padding: 0;
        margin-top: 15px;
    }

    .expertise-list li, .why-choose-list li {
        font-size: 16px;
        margin-bottom: 10px;
        line-height: 1.6;
    }

    .expertise-list li strong, .why-choose-list li strong {
        color: #007bff;
    }

    .about-section p {
        font-size: 16px;
        color: #666;
        margin-bottom: 20px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            width: 95%;
        }

        .profile-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .profile-img {
            margin-left: 0;
            margin-top: 20px;
        }

        .profile-img img {
            width: 120px;
            height: 120px;
        }
    }
</style>
