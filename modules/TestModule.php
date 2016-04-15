<?php

require_once './includes/Test.class.php';

Class TestModule extends AppModule
{

  function __construct(){
    $this->test = new TestInc();
  }

  public function index()
  {
    $res = $this->test->TestFunc();

    assign('res', $res);
    display('Test/main.tpl');
  }

}
