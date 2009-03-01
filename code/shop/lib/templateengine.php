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
    exit();
  }
}
?>