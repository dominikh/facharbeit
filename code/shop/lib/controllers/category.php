<?php
$category = $db->xpath('/shop/category[name = "'. $_REQUEST['c']  .'"]');
$category = $category[0];

$tmp->assign('category', $category);
?>