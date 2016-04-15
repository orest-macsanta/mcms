<?php

class Engine
{
  public function __construct()
  {
    $this->ROOT_PATH = ROOT_PATH;
    $this->url_params = $this->get_params();
  }

  public function LoadModule()
  {
    $this->LoadAppModule();
    $module = $this->get_module($this->url_params[0]);
    $this->get_function($module);
  }

  private function LoadAppModule()
  {
    require_once './modules/AppModule.php';
  }

  private function get_function($module)
  {
    $module = $module.'Module';
    $oModule = new $module();
    if(isset($this->url_params[1])){
      if(method_exists($module,$this->url_params[1])){
        $function = $this->url_params[1];
        if(isset($this->url_params[2]))
          $oModule->$function($this->url_params[2]);
        else
          $oModule->$function();
      }
      else{
        $oModule->index();
      }
    }
    else{
      $oModule->index();
    }
  }

  private function get_module($param)
  {
    if($param && $param!==""){
      $param[0] = strtoupper($param[0]);
      if (file_exists($this->ROOT_PATH . '/modules/' . $param.'Module.php')){
        require_once './modules/' . $param.'Module.php';
        return $param;
      }
      else {
        require_once './modules/MainModule.php';
        return 'Main';
      }
    }else {
      require_once './modules/MainModule.php';
      return 'Main';
    }
  }

  private function get_params()
  {
    $search = '(^' . BASE_URL . '/|'; //remove BASE_URL
    $search.= '/$|';
    $search.= '\?.*|';
    $search.= '\.php|';
    $search.= '\.html|';
    $search.= '\.htm)';

    $uri = $_SERVER['REQUEST_URI'];
    $uri_clean = preg_replace($search, '', $uri);
    $params = explode('/', $uri_clean);

    return $params;
  }

}

?>
