<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo asset('css/main.css')?>" type="text/css">
        <script src="<?php echo asset('javascript/main.js')?>"></script>
    </head>
    <body>
      <div class="calculator">
        <div class="result"></div>
        <div class="clear">C</div>
        <div class="keys">
          <span class="button">7</span>
          <span class="button">8</span>
          <span class="button">9</span>
          <span class="button operator">/</span>

          <span class="button">4</span>
          <span class="button">5</span>
          <span class="button">6</span>
          <span class="button operator">*</span>

          <span class="button">1</span>
          <span class="button">2</span>
          <span class="button">3</span>
          <span class="button operator">-</span>

          <span class="button">0</span>
          <span class="button">.</span>
          <span class="button">=</span>
          <span class="button operator">+</span>
        </div>
      </div>
    </body>
</html>
