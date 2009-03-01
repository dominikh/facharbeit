<?php
error_reporting(E_ALL);
class TemplateEngine {
  function TemplateEngine($file) {
    $this->file      = $file;
    $this->variables = array();
  }

  function assign($varname, $value) {
    $this->variables[$varname] = $value;
  }

  function get($varname) {
    return $this->variables[$varname];
  }

  function display() {
    require($this->file);
    exit();
  }
}

$tmp = new TemplateEngine('templates/index.php');

$db    = simplexml_load_file("etc/db.xml");
$tmp->assign("db", $db);

$config = simplexml_load_file("etc/config.xml");

$allowed_sites = array("home", "categories", "aboutus", "category", "order");
$site = '';

if(!isset($_REQUEST['s'])) {
  $_REQUEST['s'] = 'home';
}

if(in_array($_REQUEST['s'], $allowed_sites)) {
  $site       = $_REQUEST['s'];
  $controller = 'lib/controllers/' . $site . '.php';
  if(file_exists($controller)) {
    require $controller;
  }
} else {
  $site = 'error';
}

$site .= '.php';
$tmp->assign('include', $site);

$tmp->display();
?>