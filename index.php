<html>
  <head>
  <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache">
    <title>Mock Payment Provider</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
  </head>
  <header>
    Mock Payment Provider
  </header>
  <body>
    <script>
      function pay() {
        paymentSuccess();
      }
      function cancel() {
        paymentFailed("Payment canceled by the user");
      }
    </script>

<?php

require_once("JWT.php");
require_once("prettyJSON.php");

$request = $_GET["req"];
if (!$request) {
  echo("No JWT found"); 
  return;
}

$json = JWT::decode($request, null, false);

?>
    <div id="product">
      <?php
        $encoded = json_encode($json);
        $pretty = pretty_json($encoded);
        print($pretty);
      ?>
    <div>
    <footer>
      <button type=button style="width:100px;height:100px" onclick="pay()">Pay!</button> 
      <button type=button style="width:100px;height:100px" onclick="cancel()">Cancel!</button>
    </footer>
  </body>
</html>
