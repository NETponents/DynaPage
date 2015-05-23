<!DOCTYPE html>
<html lang="en">
<head>
  <title>DynaPage Setup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="jumbotron">
    <h1>DynaPage Setup</h1>
    <p>Follow the instructions below to finish setting up DynaPage!</p>
    <div class="progress">
      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
    50% Complete (2/4)
  </div>
</div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <h3>PHP test</h3>
      <?php
      echo '<div class="well">It works!!!</div>';
      ?>
    </div>
    <div class="col-sm-6">
      <h3>Did it work?</h3>
      <p>Since your browser showed this page, you do have PHP installed. If you don't see the text "It works!!!", then you may need to update or enable your version of PHP.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <h3>Whats next?</h3>
      <p>The next step will ask you for some information about your site.</p>
      <a href="part3.html" class="btn btn-info" role="button">Step 3</a>
    </div>
  </div>
</div>
</body>
</html>
