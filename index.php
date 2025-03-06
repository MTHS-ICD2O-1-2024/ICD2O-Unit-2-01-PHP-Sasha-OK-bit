<!DOCTYPE html>
<!--ICD2O Unit 2-01 Calculations HTML-->
<html lang="en ca">

<head>
  <meta charset="utf-8">
  <meta name="descirption" content="A troll.. I mean an endless button clicking fun">
  <meta name="keywords" content="mths, icd2o, button, clicking">
  <meta name="author" content="sasha.vorontsov">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.dark_blue.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>The XXX Program</title>
</head>

<header>
  <h>Welcome to question converts into a random answer</h>
</header>

<body>

  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header"></div>
    <header class="mdl-layout__header-row">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Button Sim</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content">
        Press or Push, if you put in a number
      </div>
      <div class="page-content-answer">CLICKIE CLICK.</div>
      <br />
      <!--Simple Textfield for integers-->
      <form action="answer.php" method="GET">
        <br />
        <!-- Raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" 
          onclick="myButtonClicked()" type="button">
          PUSH ME!!!
        </button>
      </form>
      <br>
      <div class="page-content-answer">
        <div id="answer"> </div>
      </div>
      
      
      <a href="./index.php"></a>
    </main>
  </div>
</body>

</html>
