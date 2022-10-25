<?php
namespace itrax\controllers;
use itrax\core\controller;
use itrax\models\site_settingModel;
class homeController extends controller{
      public function index(){
        $setting = new site_settingModel();
        $theam =  $setting->GetSetting('theam');   
        $title = "mohamed";
        //   echo "welcome home";
        return $this->view("website/".$theam."/index",['welcome' => $title]);
      }  
}