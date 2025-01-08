<?php
if(!session_id())
  session_start();

require_once '../../private/app/flash.php';

messageFlash();

?>