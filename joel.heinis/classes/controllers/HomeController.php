<?php

class HomeController
{
  public function list(){
    require_once MODELS.DS.'HomeModel.php';
    $m = new HomeModel();
    $public=$m->get();

    require_once VIEWS.DS.'HomeView.php';
    $v= new HomeView();
    $html=$v->genlist($public);
    echo $html;
    http_response_code(200);
    exit;
  }

  public function listone(){}

  public function create(){}

  public function delete(){}

  public function update(){}
}