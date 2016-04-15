<?php

if(DB_HOST!=="" && DB_NAME!=="" && DB_USER!=="")
{
  $db  =  new  PDO('mysql:dbname='.base64_decode(DB_NAME).'; host='.base64_decode(DB_HOST),base64_decode(DB_USER),base64_decode(DB_PASS), array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
  $db->exec("SET CHARACTER SET utf8");

    function dbRequest($sql, $params)
      {
        global $db;

        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        $ret = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        unset($stmt);
        return $ret;

      }
}


?>
