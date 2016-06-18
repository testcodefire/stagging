<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>tokens example</title>
    <link rel="stylesheet" type="text/css" href="dist/tokens.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
	<script src="dist/tokens.js"></script> 
    <script src="dist/jquery.min.js"></script>
    <script src="dist/fidel.min.js"></script>
    <script src="dist/fidel.tokens.js"></script>
  </head>
  <body>
	<form method="post" name="frm" action="">
		<h2>Enter names:</h2>
		<input type="text" id="tokens-example" name="tokens-example" />
    <script>
      (function(){
        $('#tokens-example').tokens({
          source : [{"id":"856","name":"House"},{"id":"1035","name":"Desperate Housewives"}],
        });
      })();
    </script>
    </form>
  </body>
</html>
