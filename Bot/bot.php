<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
<link rel="stylesheet" href="bot.css">
<script  src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="title"> Online ChatBot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="uil uil-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here" required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
    <script src="bot.js"></script>
</body>
</html>