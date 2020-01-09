<?php
$value="none";
if(isset($_GET['value'])) $value=$_GET['value'];

if($value=='a'){
    echo "<ul value='1'><a href='admin/index.php'>Sell Home</></ul><ul value='2'><a href='admin/category.php'>Category</a></ul><ul value='3'><a href='admin/all_book.php'>Books</a></ul><ul value='3'><a href='admin/contact.php'>Contacts</a></ul>";
}
else if($value=='b'){
    echo "<ul value='4'><a href='index.php'>Buy Home</a></ul><ul value='6'><a href='admin/index.php'>Sell</a></ul><ul value='3'><a href='contact.php'>contact</a></ul><ul value='3'><a href='viewcart.php'>View Cart</a></ul><ul value='3'><a href='register.php'>Register</a></ul>";
}

?>