<?php if($this->get('cant_proceed')): ?>
Es ist ein Fehler aufgetreten. Bitte kehren Sie zur Produktübersicht zurück und wiederholen Sie den Vorgang.
<?php elseif(!$this->get('got_information')): ?>
<?php $product = $this->get('product') ?>
<?php $category = $this->get('category') ?>
<?php $defaults = $this->get('defaults'); ?>
<form id="order-form"  method="post" action="">
  <fieldset>
    <legend>Produktinformationen</legend>
    <label for="category">Kategorie</label><input name="category" type="text" value="<?php echo $category->name ?>" disabled="disabled" />
    <label for="product">Produkt</label><input name="product" type="text" value="<?php echo $product->name ?>" disabled="disabled" />
    <label for="price">Preis</label><input name="price" type="text" value="<?php echo $product->price ?>" disabled="disabled" />
  </fieldset>

  <fieldset>
    <legend>Kontaktinformationen</legend>
    <label for="name">Name</label><input name="name" type="text" value="<?php echo $defaults['name']?>" />
    <label for="address">Anschrift</label><textarea name="address" cols="60" rows="6"><?php echo $defaults['address'] ?></textarea>
    <label for="email">Emailadresse</label><input name="email" type="text" value="<?php echo $defaults['email']?>" />
    <input type="submit" value="Bestellen" />
  </fieldset>
</form>
<?php else: ?>
Bestellung wurde in Auftrag gegeben.
<?php endif ?>