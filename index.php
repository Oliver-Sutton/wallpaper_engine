<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wallpaper_engine</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div id="burger_menu">
        <div class="bar1">
        </div>
        <div class="bar2">
        </div>
        <div class="bar3">
        </div>
    </div>
    <div id="content">
      <p>
        INSERT TEXT HERE
      </p>
    </div>
    <div id="menu">
      <p style="margin-top: 2px;">SETTINGS</p>
      <input id="textInput" type="text" />
      <input type="checkbox" value="Text" />
      <select>
        <option value="font1">Font 1</option>
        <option value="font2">Font 2</option>
      </select>
      <input type="range" min="1000" max="60000"/>
      <button id="submit" type="button" name="changeSettings">Submit</button>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
    // ON LOAD //
    $(function(){

      $('#menu').fadeToggle(0); // Set to hidden on load.

      function changeColour(selector, colours, interval) {
        $(selector).css('transition', ` background-color ${(interval / 1000) / 2}s ease-in-out`); // Set transition time dependant on interval.
        var curCol = 0; // Init curCol (currentColour)
        setInterval(function() { // Function to trigger every x seconds.
          if(curCol === colours.length) { curCol = 0; } // If currentColour has reached max set to 0.
          $(selector).css('background-color', colours[curCol]); // Set the new background colour.
          curCol++; // Increase currentColour by 1.
        }, interval); // Set time interval for function to trigger.
      }
      changeColour('body', ['#D16879', '#E86561', '#AB406B', '#C45284', '#B3495C'], 1000); // Call function with colour array and time.
    });
    // BURGER MENU CLICK //
    $('#burger_menu').click(function(){
      $('#burger_menu').toggleClass('change');
      $('#menu').fadeToggle(400);
    });

    $('#submit').click(function(){
      textInput = $('#textInput').val();
      $('#content p').html(textInput);
    });

    </script>
  </body>
</html>
