<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/homepage.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Permanent+Marker&family=Protest+Riot&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="debug">
    <p>Hill Color 1: <span id="hillColor1Display"></span></p>
    <p>Hill Color 2: <span id="hillColor2Display"></span></p>
    <p>Tree Color: <span id="treeColorDisplay"></span></p>
    <p>Theme: <span id="themeDisplay"></span></p>
    <p>Headband: <span id="colorDisplay"></span></p>
  </div>

  <style>
    body {
      background-image: url("wavesbg.svg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      margin: 0;
    }
  </style>

  <div class="start-screen">
    <div class="menu">
        <button id="play" onclick="document.location.href='stickhero.php'">
          <a id="text">Start Game</a>
        </button>

        <button id="play" onclick="characterColor()">
          <a id="text">Character</a>
        </button>

        <button id="play" onclick="themeChange()">
          <a id="text">Themes</a>
        </button>
    </div>
  </div>
  <div class="stickhero">
    <img src="assets/images/stickheroman-nobg.png" alt="">
  </div>

  <script>
    let i_Color = 0;
    let color = "red";
    let i_hillColor1 = 0;
    let hillColor1 = "#95C629";
    let hillColor2 = "#FEF1E1";
    let theme = "normal";

    function characterColor() {
      console.log('Change Color');
      i_Color++;
      if (i_Color == 5) {
        i_Color = 0;
      }

      if (i_Color == 0) {
        color = "red";
      } else if (i_Color == 1) {
        color = "blue";
      } else if (i_Color == 2) {
        color = "green";
      } else if (i_Color == 3) {
        color = "yellow";
      } else if (i_Color == 4) {
        color = "purple";
      }
      console.log(color);
      localStorage.setItem('color', color);
      document.getElementById('colorDisplay').innerText = color;
    }

    function themeChange() {
      i_hillColor1++;
      if (i_hillColor1 == 5) {
        i_hillColor1 = 0;
      }

      if (i_hillColor1 == 0) {
        // normal
        theme = "normal";
        hillColor1 = "#95C629";
        hillColor2 = "green";
        tree_color = "green";
      } else if (i_hillColor1 == 1) {
        // winter
        theme = "winter";
        hillColor1 = "#e7e7e7";
        hillColor2 = "#d6d6d6";
        tree_color = "white";
      } else if (i_hillColor1 == 2) {
        // Fall
        theme = "fall";
        hillColor1 = "#eabb1d"; 
        hillColor2 = "#d6ac1e";
        tree_color = "green";
      } else if (i_hillColor1 == 3) {
        // Blue
        theme = "blue";
        hillColor1 = "#07015e";
        hillColor2 = "#1b1570";
        tree_color = "black";
      } else if (i_hillColor1 == 4) {
        // Pink
        theme = "pink";
        hillColor1 = "#ffbdfa";
        hillColor2 = "#f99af1";
        tree_color = "#e3c3e1";
      }

      localStorage.setItem('hillColor1', hillColor1);
      localStorage.setItem('hillColor2', hillColor2);
      localStorage.setItem('tree_color', tree_color);
      console.log(hillColor1);
      console.log(hillColor2);
      console.log(tree_color);
      console.log(i_hillColor1);
      
      // Update the displayed values
      document.getElementById('hillColor1Display').innerText = hillColor1;
      document.getElementById('hillColor2Display').innerText = hillColor2;
      document.getElementById('treeColorDisplay').innerText = tree_color; 
      document.getElementById('themeDisplay').innerText = theme;  
    }

    // Initialize the displayed values
    document.getElementById('hillColor1Display').innerText = hillColor1;
    document.getElementById('hillColor2Display').innerText = hillColor2;
    document.getElementById('treeColorDisplay').innerText = tree_color;
    document.getElementById('themeDisplay').innerText = theme; 
    document.getElementById('colorDisplay').innerText = color; 
  </script>

</body> 
</html>