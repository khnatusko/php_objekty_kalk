<?php


require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/KalkForm.class.php';
require_once $conf->root_path.'/app/calc/KalkResult.class.php';


class KalkCtrl {
    
    private $msgs;
    private $vat;
    private $resultx;
    private $resulty;
    
    public function __construct() {
        $this->msgs = new Messages();
        $this->vat = new KalkForm();
        $this->resultx = new KalkResult();
        $this->resulty = new KalkResult(); 
    }
    
    public function getParams(){
        $this->vat->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
        $this->vat->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
        $this->vat->proc = isset($_REQUEST ['proc']) ? $_REQUEST ['proc'] : null;
    }
    
    public function validate(){
        if(! (isset ( $this->vat->x) && isset ($this->vat->y) && isset ($this->vat->proc))){
            return false;
        }
        
        if ($this->vat->x == "" && $this->vat->y == ""){
            $this->msgs->addError('Nie podano liczby netto/brutto');
        }
      
    
        if (! $this->msgs->isError())
            
        return ! $this->msgs->isError();    
    }
    
    public function process(){
        
        $this->getParams();
        
        if($this->validate()){
            $this->vat->x = doubleval($this->vat->x);
            $this->vat->y = doubleval($this->vat->y);
            $this->msgs->addInfo('Parametry poprawne.');
            
            switch ($this->vat->proc){
                case 'trzy':
                    $this->resultx->resultx = $this->vat->x + ($this->vat->x * 0.03);
                    $this->resulty->resulty = $this->vat->y / 1.03;
                    break;
                case 'piec':
                    $this->resultx->resultx = $this->vat->x + ($this->vat->x * 0.05);
                    $this->resulty->resulty = $this->vat->y / 1.05;
                    break;
                case 'siedem':
                    $this->resultx->resultx = $this->vat->x + ($this->vat->x * 0.07);
                    $this->resulty->resulty = $this->vat->y / 1.07;
                    break;
                case 'osiem':
                    $this->resultx->resultx = $this->vat->x + ($this->vat->x * 0.08);
                    $this->resulty->resulty = $this->vat->y / 1.08;
                    break;
                case 'dwadziesciadwa':
                    $this->resultx->resultx = $this->vat->x + ($this->vat->x * 0.22);
                    $this->resulty->resulty = $this->vat->y / 1.22;
                    break;
                case 'dwadziesciatrzy':
                    $this->resultx->resultx = $this->vat->x + ($this->vat->x * 0.23);
                    $this->resulty->resulty = $this->vat->y / 1.23;
                    break;    
            }
            $this->msgs->addInfo('Wykonano obliczenia.');
        }
    $this->generateView();        
            
    }
        
      public function generateView(){
          global $conf;
          
          $smarty = new Smarty();
          $smarty->assign('conf',$conf);
          
          $smarty->assign('page_title','Kalkulator');
          $smarty->assign('page_description','VATOWY');
          $smarty->assign('page_header','Kalkulator_VAT');
          
          $smarty->assign('msgs',$this->msgs);
          $smarty->assign('vat',$this->vat);
          $smarty->assign('resx',$this->resultx);
          $smarty->assign('resy',$this->resulty);
          
          $smarty->display($conf->root_path.'/app/calc/Kalk.tpl');    
    }
}