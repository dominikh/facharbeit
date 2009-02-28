<?php
foreach($this->get('db')->category as $category) {
  ?>
  <div class="category">
  <a class="name" href="?s=category&c=<?=urlencode($category->name)?>"><?=$category->name?></a>
  <?=$category->description?>
  </div>

  <?php
}
?>
