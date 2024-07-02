<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chatbot.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="z-3 position-absolute ">
      <button class="chatbot-toggler ">
        <span class="bi bi-chat-right"></span>
        <span class="bi bi-x-square"></span>
      </button>
      <div class="chatbot border border-1 border-black">
        <header>
          <h2>Chat bot</h2>
          <span class="bi bi-x-square"></span>
        </header>

        <ul class="chatbox">
          <li class="chat incoming">
            <span class="bi bi-robot"></span>
            <p>Hi there! How can I help you?</p>
          </li>


        </ul>
        <div class="chat-input">
          <textarea placeholder="Enter a message.." required></textarea>
          <span class="bi bi-send-fill"></span>
        </div>
      </div>
    </div>
    <script src="chatbox.js" defer></script>
</body>
</html>