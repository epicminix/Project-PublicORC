<?php

  $id = (INT)$_GET["id"];
  
  if (file_exists($id)) {
    header("Content-Type: text/plain");
    readfile($id);
    } else {
    // audio thing
  //  header("User-Agent: Roblox/WinInet");
  //  ini_set('user_agent', 'Roblox/WinInet');
  //  header('Content-Type: application/octet-stream');
      header("Location: https://assetdelivery.roblox.com/v1/asset/?id=".$id."");
      }
  

