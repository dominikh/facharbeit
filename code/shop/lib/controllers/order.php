<?php
if(!isset($_REQUEST['c']) or !isset($_REQUEST['p'])) {
  // we are missing really important information and cant proceed
  // without those. this happens, however, only when the user fiddled
  // with the URL oder the formular
  $tmp->assign("cant_proceed", true);
} else {
  $category = $db->xpath('/shop/category[name = "'. $_REQUEST['c']  .'"]');
  $category = $category[0];
  $tmp->assign('category', $category);

  $product = $category->xpath('products/product[name = "'. $_REQUEST['p'] .'"]');
  $product = $product[0];
  $tmp->assign('product', $product);
  error_reporting(E_ERROR); // so we dont have to use dozens of !isset ifs
  if(empty($_REQUEST['name']) or empty($_REQUEST['address']) or empty($_REQUEST['email'])) {
    // we are missing important information so we are going to display the order formular
    $tmp->assign("cant_proceed", false);
    $tmp->assign("got_information", false);


    // setting the stuff the user already entered so it won't be lost
    $defaults = array(
                      'name' => $_REQUEST['name'],
                      'address' => $_REQUEST['address'],
                      'email' => $_REQUEST['email']
                      );

    $tmp->assign('defaults', $defaults);
  } else {
    // yay, got all information, going to send the email

    //we are not going to check the supplied information. if the user
    // changed the product information, its his own fault...
    $tmp->assign("cant_proceed", false);
    $tmp->assign("got_information", true);

    $message = "";
    $message .= "Kategorie: " . $category->name . "\n";
    $message .= "Produkt: " . $product->name . "\n";
    $message .= "\n";
    $message .= "Name: " . $_REQUEST['name'] . "\n";
    $message .= "Anschrift: " . $_REQUEST['address'] . "\n";
    $message .= "Email: " . $_REQUEST['email'] . "\n";

    mail($config->email_address['value'], "Bestellung", $message);
    // echo '<pre>' . $message . '</pre>';
  }
  // in general we want to see all warnings, these really help
  error_reporting(E_ALL);
}
?>