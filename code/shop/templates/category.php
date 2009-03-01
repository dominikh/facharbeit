<?php  $category = $this->get('category'); ?>

<h2>Produkte</h2>
<?php foreach($category->products->product as $product): ?>
<div class="product">
  <img src="<?php echo $product->image ?>" alt="Produktbild von <?php echo $product->name ?>" />
  <h2 class="name"><?php echo $product->name; ?></h2>

  <h3>Preis</h3>
  <span class="price"><?php echo $product->price; ?>€</span>

  <h3 class="description">Beschreibung</h3>
  <p class="description">
    <?php echo $product->description; ?>
  </p>
  <a class="order" href="?s=order&amp;c=<?php echo urlencode($category->name) ?>&amp;p=<?php echo urlencode($product->name) ?>">Bestellen</a>
</div>
<?php endforeach; ?>