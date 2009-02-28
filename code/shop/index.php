<?php
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
  }
}

$tmp = new TemplateEngine('templates/index.php');

$allowed_sites = array("home", "products", "aboutus", "category");
$site = '';
if(in_array($_REQUEST['s'], $allowed_sites)) {
  $site = $_REQUEST['s'];
} else {
  $site = 'error';
}

$site .= '.php';
$tmp->assign('include', $site);

$xml    = simplexml_load_file("etc/db.xml");

$tmp->assign("db", $xml);

$tmp->display();
?>