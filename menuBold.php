
  <?php
foreach(array( "HOME", "ABOUT US","SERVICES","ROOMS","OUR DOCTORS","APPLICATION FORMS","CAREER","GALLERY","EVENTS / PROMOS","NEWS & UPDATES","CONTACT US") as $menu) {
echo '<a href="menus.php='.$menu.'">'.($menu===$menus ? '<strong>'.$menu.'</strong>' : $menu).'</a>';)}

?>

