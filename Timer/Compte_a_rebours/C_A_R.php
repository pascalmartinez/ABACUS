<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" href="style.sass">


<meta charset=utf-8 />
<title>Chrono</title>
</head>
<body>
    <div class="count"></div>

   <script id="count-template" type="text/template">
    <span class="current top <%= currentSize %>"><%= time %></span>
    <span class="next top <%= nextSize %>"><%= nextTime %></span>
    <span class="current bottom <%= currentSize %>"><%= time %></span>
    <span class="next bottom <%= nextSize %>"><%= nextTime %></span>
   </script>
</body>
</html>
