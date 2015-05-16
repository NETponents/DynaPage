<?php
//required files
//require_once 'sqldata.php';
//require_once SCRIPT_ROOT . '/admin/settings.php';
require_once './admin/settings.php';
require_once './design/styles.php';


//start HTML headers
echo '<html>';
echo '<header>';
echo '<LINK href=\"' . $st_home . '\" rel="stylesheet" type="text/css">';
echo '<title>' . $cf_title . '- Built with DynaPage</title>';
//add any header information you need such as Google Analytics tracking
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<?php
echo '</header>';
//start body
if(!$st_bodyimage)
{
  echo '<body>';
}
else
{
  echo '<body style=\"background-image:url(' . $st_bodyimage . ')\">';
}
?>

<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
         </button>
         <a class="navbar-brand" href="./index.html"><?php echo $cf_title; ?></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <!--<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="./products.html">Products<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Submenu 1-1</a></li>
                <li><a href="#">Submenu 1-2</a></li>
                <li><a href="#">Submenu 1-3</a></li>
              </ul>
           </li>-->
           <li><a href="./index.php">Home</a></li>
          </ul>
         <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="jumbotron">
<?php
if(!$st_headerimage)
{
  echo "<h1>" . $cf_title . "</h1>";
  echo "<h2>" . $cf_caption . "</h2>";
  echo '</div>';
}
else
{
  //TODO: finish call to create header image from media source listed in settings.php
  //echo "<img src=\"" . $st_headerimage . ""\" alt="Mountain View" style="width:304px;height:228px">"
  echo '</div>';
}
?>
