<dl>
  <?php  foreach($this->get('db')->category as $category): ?>
  <dt class="name">
    <a href="?s=category&amp;c=<?php echo urlencode($category->name) ?>"><?=$category->name?></a>
  </dt>
  <dd class="description">
    <?=$category->description?>
  </dd>
  <?php endforeach ?>
</dl>