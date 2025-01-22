<?php include('../includes/header.php'); ?>

<main>
    <div class="container">
        <h1>Payment Form</h1>

        <p>Please make a payment of $1500 in Tether (USDT) via TRC20 network. Follow the instructions below:</p>

        <h3>Payment Instructions:</h3>
        <ul class="payment-instructions">
            <li><strong>Tether (USDT)</strong></li>
            <li><strong>Network:</strong> TRC20</li>
            <li><strong>Address:</strong> ////////</li>
            <li><strong>Payment Amount:</strong> $1500</li>
        </ul>

        <p><strong>Note:</strong></p>
        <ul class="payment-notes">
            <li>Do a screen recording while doing the transaction.</li>
            <li>Do not send any amount except the yearly amount; it will not be refunded.</li>
            <li>This account is for a yearly payment of $1500 worth of USDT and is <strong>NOT refundable</strong>.</li>
            <li>Once payment is done, send the transaction screenshot, TX ID, and video of the transaction to <strong>WhatsApp: +9200000000</strong>.</li>
            <li><strong>Office working hours:</strong> 24 hours opened.</li>
            <li><strong>If you want to join monthly, contact at +92000000</strong></li>
        </ul>

        <h3>Submit Your Payment Details</h3>

        
        <form action="display_payment.php" method="post" enctype="multipart/form-data" class="payment-form">
            <label for="name">Your Full Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="transaction_id">Transaction ID:</label>
            <input type="text" id="transaction_id" name="transaction_id" required><br><br>

            <label for="amount">Amount Paid (USDT):</label>
            <input type="text" id="amount" name="amount" value="1500" readonly><br><br>

            <label for="screenshot">Screenshot of Transaction:</label>
            <input type="file" id="screenshot" name="screenshot" accept="image/*" required><br><br>

            <label for="video">Video of Transaction (optional):</label>
            <input type="file" id="video" name="video" accept="video/*"><br><br>

            <label for="comments">Additional Comments (optional):</label><br>
            <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br><br>

            <input type="submit" value="Submit Payment Details" class="btn-submit">
        </form>
    </div>
</main>

<?php include('../includes/footer.php'); ?>

<!-- Add inline CSS for enhanced design -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
    }

    main {
        margin: 50px auto;
        max-width: 900px;
        padding: 30px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    h1 {
        color: #333;
        font-size: 28px;
        text-align: center;
    }

    h3 {
        color: #444;
        font-size: 22px;
        margin-top: 20px;
    }

    .payment-instructions, .payment-notes {
        margin-left: 20px;
        list-style: none;
        padding-left: 0;
        font-size: 16px;
    }

    .payment-instructions li, .payment-notes li {
        margin-bottom: 10px;
    }

    .payment-form label {
        font-size: 16px;
        font-weight: bold;
    }

    .payment-form input[type="text"], .payment-form textarea, .payment-form input[type="file"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
    }

    .payment-form input[type="file"] {
        padding: 10px;
    }

    .payment-form textarea {
        font-size: 16px;
        padding: 10px;
    }

    .payment-form input[type="submit"] {
        background-color: #007bff;
        color: white;
        font-size: 18px;
        padding: 12px 25px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .payment-form input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .payment-form input[readonly] {
        background-color: #f1f1f1;
        border: 1px solid #ccc;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .payment-form {
            padding: 20px;
        }

        .payment-form label {
            font-size: 14px;
        }

        .payment-form input[type="text"], .payment-form textarea, .payment-form input[type="file"] {
            font-size: 14px;
        }

        .payment-form input[type="submit"] {
            font-size: 16px;
            padding: 10px 20px;
        }
    }
</style>
