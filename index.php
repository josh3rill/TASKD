<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Coding Test AppMart</title>
  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Captcha</header>
    <div class="captcha-area">
      <div class="captcha-img">
        <img src="assets/image/captcha-bg.png" alt="Captch Background">
        <span class="captcha"></span>
      </div>
      <button class="reload-btn"><i class="fas fa-redo-alt"></i></button>
    </div>
    <form action="#" class="input-area">
      <input type="text" placeholder="Enter captcha" maxlength="6" onkeyup="check-btn" spellcheck="false" required>
      <button class="check-btn">Check</button>
    </form>
    <div class="status-text"></div>
  </div>

  <script src="assets/js/script.js"></script>

</body>
</html>
