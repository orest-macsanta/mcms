<?php
    require 'includes/smarty/libs/Smarty.class.php';
    $tpl = new Smarty;
    $tpl->force_compile = true;
    $tpl->debugging = false;
    $tpl->caching = false;
    $tpl->cache_lifetime = 120;

    function display($param)
    {
      global $tpl;
      $tpl->display($param);
    }

    function assign($p1, $p2)
    {
      global $tpl;
      $tpl->assign($p1, $p2);
    }
?>
