<?php
$category = $this->get('db')->xpath('/shop/category[name = "Kategorie 1"]');
$category = $category[0];
// print_r($category);
foreach($category->items->item as $item) {
  echo $item->name;
  //print_r($item);
}
?>