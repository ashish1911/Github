<?php

/* browsing history */
if (!empty($_COOKIE['ECS']['history']))
{
   $history = explode(',', $_COOKIE['ECS']['history']);
 
   array_unshift($history, $goods_id);
   $history = array_unique($history);
 
   while (count($history) > $_CFG['history_number'])
   {
      array_pop($history);
   }
 
   setcookie('ECS[history]', implode(',', $history), gmtime() + 3600 * 24 * 30);
 
} else {
 
   setcookie('ECS[history]', $goods_id, gmtime() + 3600 * 24 * 30);
 
}

?>