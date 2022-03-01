<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layouts
{
  private $CI;
  private $includes = array();

  public function __construct()
  {
    $this->CI = &get_instance();
  }

  public function view($view_name, $params = array(), $layout = '')
  {
    if (empty($layout)) {
      $layout = 'main';
    }
    $content = $this->CI->load->view($view_name, $params, TRUE);

    $this->CI->load->view('layouts/' . $layout, array(
      'content' => $content
    ));
  }

  public function add_include($path, $prepend_base_url = TRUE, $version ='')
  {

    if($version === 'async') {
      $ver = '1.0.1';
    } else {
      $ver = $version;
    }

    if ($prepend_base_url) {
      $this->CI->load->helper('url'); // Load this just to be sure 
      $this->includes[] = base_url() . $path. '?v='. $ver;
    } else {
      $this->includes[] = $path;
    }

    return $this; // This allows chain-methods 
  }

  public function print_includes($type)
  {

    
    // Initialize a string that will hold all includes 
    foreach ($this->includes as $include) {
      
      if ($type == 'js' && preg_match('/js$/', $include)) {
        $final_includes .= '<script async type="text/javascript" src="' . $include . '"></script>';
      } elseif ($type == 'css') {
        $final_includes .= '<link href="' . $include . '" rel="stylesheet" type="text/css" async />';
      }
      // // Check if it's a JS or a CSS file 
      // if (preg_match('/js$/', $include)) 
      // { 
      //   // It's a JS file 
      //   $final_includes .= '<script type="text/javascript" src="' . $include . '"></script>'; 
      // } 
      // elseif (preg_match('/css$/', $include)) 
      // { 
      //   // It's a CSS file 
      //   $final_includes .= '<link href="' . $include . '" rel="stylesheet" type="text/css" />'; 
      // } 


    }
    return $final_includes;
  }
}
