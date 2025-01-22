<?php include('../includes/header.php'); ?>
<main class="broadcast-container">
    <section class="broadcast-header">
        <h1>Join Our Broadcast Channels</h1>
        <p>Stay connected with us on multiple platforms for updates, news, and more!</p>
    </section>
    <section class="broadcast-links">
        <div class="broadcast-item">
            <a href="whatsapp-link" class="broadcast-link whatsapp">
                <span class="icon">📱</span>
                <span class="platform-name">WhatsApp</span>
            </a>
        </div>
        <div class="broadcast-item">
            <a href="telegram-link" class="broadcast-link telegram">
                <span class="icon">💬</span>
                <span class="platform-name">Telegram</span>
            </a>
        </div>
        <div class="broadcast-item">
            <a href="discord-link" class="broadcast-link discord">
                <span class="icon">🎮</span>
                <span class="platform-name">Discord</span>
            </a>
        </div>
        <div class="broadcast-item">
            <a href="insta-broadcast-link" class="broadcast-link insta">
                <span class="icon">📸</span>
                <span class="platform-name">Instagram</span>
            </a>
        </div>
    </section>
</main>
<?php include('../includes/footer.php'); ?>

<style>
    .broadcast-container {
        font-family: 'Arial', sans-serif;
        margin: 20px;
        text-align: center;
        color: #333;
    }

    .broadcast-header h1 {
        font-size: 2.5rem;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .broadcast-header p {
        font-size: 1.1rem;
        color: #7f8c8d;
        margin-bottom: 40px;
    }

    .broadcast-links {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .broadcast-item {
        width: 200px;
        height: 100px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .broadcast-link {
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: #fff;
        font-size: 1.2rem;
        font-weight: 600;
        padding: 10px;
        border-radius: 10px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .broadcast-link:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .broadcast-link .icon {
        font-size: 2rem;
        margin-right: 10px;
    }

    .whatsapp {
        background-color: #25D366;
    }

    .telegram {
        background-color: #0088cc;
    }

    .discord {
        background-color: #7289da;
    }

    .insta {
        background-color: #e4405f;
    }
</style>
