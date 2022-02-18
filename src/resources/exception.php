<?php

if (!isset($data)) {
  $status = 404;
  $message = "Sorry we couldn't find what you were looking for.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coinbase &mdash; <?= $status ?> Page</title>
  <!-- generic -->
  <link rel="icon" href="assets/framework/images/favicon/favicon-32.png" sizes="32x32">
  <link rel="icon" href="assets/framework/images/favicon/favicon-57.png" sizes="57x57">
  <link rel="icon" href="assets/framework/images/favicon/favicon-76.png" sizes="76x76">
  <link rel="icon" href="assets/framework/images/favicon/favicon-96.png" sizes="96x96">
  <link rel="icon" href="assets/framework/images/favicon/favicon-128.png" sizes="128x128">
  <link rel="icon" href="assets/framework/images/favicon/favicon-192.png" sizes="192x192">
  <link rel="icon" href="assets/framework/images/favicon/favicon-228.png" sizes="228x228">

  <!-- Android -->
  <link rel="icon" href="assets/framework/images/favicon/favicon-196.png" sizes="196x196">

  <!-- iOS -->
  <link rel="apple-touch-icon" href="assets/framework/images/favicon/favicon-120.png" sizes="120x120">
  <link rel="apple-touch-icon" href="assets/framework/images/favicon/favicon-152.png" sizes="152x152">
  <link rel="apple-touch-icon" href="assets/framework/images/favicon/favicon-180.png" sizes="180x180">
  <style type="text/css">
    html,
    body {
      padding: 0;
      margin: 0;
      -webkit-font-smoothing: antialiased;
    }

    .wrapper {
      position: absolute;
      display: flex;
      align-items: center;
      justify-content: center;
      left: 0px;
      top: 0px;
      right: 0px;
      bottom: 0px;
      z-index: 1000;
      overflow: hidden;
    }

    h1 {
      display: block;
      background-image: url("assets/framework/images/exception.svg");
      background-position: center;
      background-repeat: no-repeat;
      font: 0px/0 a;
      margin: 40px auto 0;
    }

    .content {
      height: 100vh;
      width: 100%;
      z-index: 99999;
      text-align: center;
      text-rendering: optimizeLegibility;
      font-family: 'Graphik', -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 60px;
    }

    .container {
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    h2 {
      font-size: 18px;
      font-weight: 500;
      margin: 0;
    }

    a {
      color: #000;
      font-weight: 500;
      text-decoration: none;
      padding-top: 24px;
      display: inline-block;
    }

    a:hover {
      opacity: .7;
    }

    .back-link {
      border: 1px solid #A9B6C2;
      text-decoration: none;
      padding: 16px 40px;
      border-radius: 5px;
      font-size: 14px;
      font-weight: 500;
    }

    .subtext {
      padding: 8px 0 32px;
      text-align: center;
      max-width: 240px;
      font-weight: 400;
      font-size: 16px;
      line-height: 1.5;
      word-break: break-word;
      color: #587088;
    }

    .subtext {
      display: block;

    }

    @media (max-width: 768px) {
      .content {
        left: 0;
        padding: 24px 0;
      }

      h2 {
        font-size: 18px;
        font-weight: 500;
      }

      .subtext-container {
        width: 75%;
        padding: 8px 0 24px;
      }

      .subtext {
        padding-bottom: 16px;
        display: inline;
      }
    }
  </style>
</head>

<body class="app static error404">
  <div class="wrapper">
    <div class="content">
      <img src="assets/framework/images/exception.svg" />
      <div class="container">
        <h2 class="error-header"><?= $status ?> Page</h2>
        <div class="subtext">
          <?= $message ?>
        </div>
        <p class="back-link">Back to Coinbase</p>
      </div>
    </div>
  </div>
</body>

</html>