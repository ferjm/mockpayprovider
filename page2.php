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

    <footer>
      <button type=button style="width:100px;height:100px" onclick="pay()">Pay!</button> 
      <button type=button style="width:100px;height:100px" onclick="cancel()">Cancel!</button>
    </footer>
  </body>
</html>
