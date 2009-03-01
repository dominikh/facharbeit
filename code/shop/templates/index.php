<?php echo '<'; echo '?xml version="1.0" encoding="utf-8"?'; echo '>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Elektronisches Kaufhaus</title>
    <link rel="stylesheet" href="templates/style.css"/>
  </head>
  <body>
    <h1>Elektronisches Kaufhaus</h1>

    <div id="navigation">
      <h2>Navigation</h2>
      <ul>
        <li><a href="?s=home">Startseite</a></li>
        <li><a href="?s=categories">Produkte</a></li>
        <li><a href="?s=aboutus">Über uns</a></li>
      </ul>
    </div>

    <div id="content">
      <?php include("templates/" . $this->get('include')); ?>
    </div>
  </body>
</html>