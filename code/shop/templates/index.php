<?php
echo '<'; echo '?xml version="1.0" encoding="utf-8"?'; echo '>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Webshop</title>
    <link rel="stylesheet" href="templates/style.css"/>
  </head>
  <body>
    <ul id="navigation">
      <li><a href="?s=home">Startseite</a></li>
      <li><a href="?s=products">Produkte</a></li>
      <li><a href="?s=aboutus">Über uns</a></li>
    </ul>

    <div id="content">
      <?php
        include("templates/" . $this->get('include'));
      ?>
    </div>
  </body>
</html>