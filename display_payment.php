<?php include('../includes/header.php'); ?>

<main>
    <div class="container">
        <h1>Payment Details</h1>

        <?php
        // Check if the form is submitted via POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Retrieve form data and handle optional fields gracefully
            $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : 'Not provided';
            $transaction_id = isset($_POST['transaction_id']) ? htmlspecialchars($_POST['transaction_id']) : 'Not provided';
            $amount = isset($_POST['amount']) ? htmlspecialchars($_POST['amount']) : 'Not provided';
            $comments = isset($_POST['comments']) ? htmlspecialchars($_POST['comments']) : 'No comments';

            // File details
            $screenshot = isset($_FILES['screenshot']) && !empty($_FILES['screenshot']['name']) ? $_FILES['screenshot']['name'] : 'No screenshot uploaded';
            $video = isset($_FILES['video']) && !empty($_FILES['video']['name']) ? $_FILES['video']['name'] : 'No video uploaded';

            // Display the submitted data
            echo "<h3>Your Payment Details:</h3>";
            echo "<ul>";
            echo "<li><strong>Full Name:</strong> $name</li>";
            echo "<li><strong>Transaction ID:</strong> $transaction_id</li>";
            echo "<li><strong>Amount Paid (USDT):</strong> $amount</li>";
            echo "<li><strong>Screenshot of Transaction:</strong> $screenshot</li>";
            echo "<li><strong>Video of Transaction:</strong> $video</li>";
            echo "<li><strong>Additional Comments:</strong> $comments</li>";
            echo "</ul>";
        } else {
            echo "<p>No payment details received.</p>";
        }
        ?>

    </div>
</main>

<?php include('../includes/footer.php'); ?>
