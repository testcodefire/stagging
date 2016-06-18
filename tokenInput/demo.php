<?php 
if(isset($_POST['submit']))
{
	echo '<pre>';print_r($_POST['send_to']);die;
}
?>
<html>
<head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="src/jquery.tokeninput.js"></script>
  <link rel="stylesheet" href="styles/token-input.css" type="text/css" />
  <link rel="stylesheet" href="styles/token-input-facebook.css" type="text/css" />
</head>
<body>
	<form method="post" action="">
		         <select class="tokenizeclass" name="send_to[]" multiple="multiple"><option selected="selected" value="25" data-type="custom">3M</option><option selected="selected" value="28" data-type="custom">accenture</option></select>
							
		
		
  <h2 id="theme">Json local</h2>
  <div>
    <input type="text" id="input-local" name="input-local" />
    <script type="text/javascript">
      $(document).ready(function() {
        $("#input-local").tokenInput([
            {"id":"856","name":"House"},
            {"id":"1035","name":"Desperate Housewives"},
            {"id":"1036","name":"Housewives"},
            {"id":"1037","name":"Desperate"}
          ], {
          theme: "facebook",
          maxTokens : 2,
          onFull: function( obj ){ alert( "You have already reached the maximum number of tokens" ); },
          preventDuplicates: true,
        });
      });
    </script>
  </div>

  <!--h2 id="theme">Json local - no duplicates</h2>
  <div>
    <input type="text" id="input-local-prevent-duplicates" />
    <script type="text/javascript">
      $(document).ready(function() {
        $("#input-local-prevent-duplicates").tokenInput([
            {"id":"856","name":"House"},
            {"id":"1035","name":"Desperate Housewives"}
          ], {
          theme: "facebook",
          preventDuplicates: true
        });
      });
    </script>
  </div>

  <h2 id="theme">Json server</h2>
  <div>
    <input type="text" id="input-server" />
    <script type="text/javascript">
      $(document).ready(function() {
        $("#input-server").tokenInput("http://shell.loopj.com/tokeninput/tvshows.php", {
          theme: "facebook"
        });
      });
    </script>
  </div>

  <h2 id="prevent-duplicates">Json server - no duplicates</h2>
  <div>
    <input type="text" id="input-server-prevent-duplicates" />
    <script type="text/javascript">
      $(document).ready(function() {
        $("#input-server-prevent-duplicates").tokenInput("http://shell.loopj.com/tokeninput/tvshows.php", {
          theme: "facebook",
          preventDuplicates: true
        });
      });
    </script>
  </div-->
  <div><input type="submit" value="submit" name="submit"></div>
  </form>
</body>
</html>
