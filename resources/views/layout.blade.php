
    

<?php
#echo "<pre>";
#print_r($products);
#echo "<pre>";
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/app.css">
        <title>Products</title>
       <!-- <script src="/app.js"></script> -->
    </head>
    <body >
      <div class="container">

        @yield('content')

   
    
      </div>  
    </body>
</html>

