<html>
<title>
WEBNET CSE
</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="icon" href="http://www.clker.com/cliparts/m/a/F/u/X/7/simple-black-and-white-earth-with-magnifying-glass-md.png" type="image/png sizes="30x27">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<center>
<a href="index.php"> <img border="0" alt="W3Schools" src="http://www.clker.com/cliparts/m/a/F/u/X/7/simple-black-and-white-earth-with-magnifying-glass-md.png" width="100" height="100"> </a>
<br><br>
<form id="search" method="post" action="search.php">
<input type="text" class="form-control input-lg" name="q" required placeholder="WebNet Custom Search">
<br>
<button type="submit" class="btn btn-info btn-lg">
<span class="glyphicon glyphicon-search"></span> CSE
</button>
</form>
<hr>
</body>
</html>
	<style>
body{
    background-image: url("http://s1.picswalls.com/wallpapers/2015/09/20/beautiful-hd-wallpaper-2015_111526537_269.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>	
<?php
$path='http://www.web-net.tk/';
$html = file_get_contents($path);
//file_put_contents('links.txt',$html);
$dom = new DOMDocument();
@$dom->loadHTML($html);
// grab all the on the page
$xpath = new DOMXPath($dom);
$hrefs = $xpath->evaluate("/html/body//a");
for ($i = 0; $i < $hrefs->length; $i++ ) {
$href = $hrefs->item($i);
$url = $href->getAttribute('href');
echo $url."<font color=white><br>";
echo "<font color=white><h4><a href=\"$url\">View Site</a><br><br><br>";
}
?>
<?php
$q = $_REQUEST["q"];
$f = fopen("links.txt", "r");
while (($line = fgets($f)) !== FALSE) {
   if (strstr($line, $q)) {
       echo "$line";
	   echo "<font color=white><h4><a href=\"$line\">View Site</a></font><br><br><br>";
   }   // outputs name+ip if either one is found in the line
}
?>
<html>
<hr>
 <footer>
  Copyright &copy; WebNet Official (Custom Search Engine) 2017 &bull;All rights reserved
</footer> 
</html>
