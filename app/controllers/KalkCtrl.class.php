<?php   


namespace app\controllers;


use app\forms\KalkForm;
use app\transfer\KalkResult;


class KalkCtrl {
    
  
    private $vat;
    private $resultx;
    private $resulty;
    
    public function __construct() {

        $this->vat = new KalkForm();
        $this->resultx = new KalkResult();
        $this->resulty = new KalkResult(); 
    }
    
    public function getParams(){
        $this->vat->x = getFromRequest('x');
        $this->vat->y = getFromRequest('y');
        $this->vat->proc = getFromRequest('proc');
    }
    
    public function validate(){
        if(! (isset ( $this->vat->x) && isset ($this->vat->y) && isset ($this->vat->proc))){
            return false;
        }
        
        if ($this->vat->x == "" && $this->vat->y == ""){
            getMessages()->addError('Nie podano liczby netto/brutto');
        }
      
    
        if (! getMessages()->isError())
            
        return ! getMessages()->isError();    
    }
    
    public function action_calcCompute(){
        
        $this->getParams();
        
        if($this->validate()){
            $this->vat->x = doubleval($this->vat->x);
            $this->vat->y = doubleval($this->vat->y);
            getMessages()->addInfo('Parametry poprawne.');
            
            switch ($this->vat->proc){
                case 'trzy':
                    $this->resultx->resultx = $this->vat->x + ($this->vat->x * 0.03);
                    $this->resulty->resulty = $this->vat->y / 1.03;
                    break;
                case 'piec':
                    if(inRole('admin')){
                    $this->resultx->resultx = $this->vat->x + ($this->vat->x * 0.05);
                    $this->resulty->resulty = $this->vat->y / 1.05;
                    } 
                    else {
                    getMessages()->addError("Tylko administrator może wykonać tę operację.");
                    }
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
            getMessages()->addInfo('Wykonano obliczenia.');
        }
    $this->generateView();        
            
    }
        
        public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
        
      public function generateView(){
          
          global $user;
          getSmarty()->assign('user',unserialize($_SESSION['user']));
          
          getSmarty()->assign('page_title','Kalkulator');
          getSmarty()->assign('page_description','VATOWY');
          getSmarty()->assign('page_header','Kalkulator_VAT');
          
          getSmarty()->assign('vat',$this->vat);
          getSmarty()->assign('resx',$this->resultx);
          getSmarty()->assign('resy',$this->resulty);
          
          getSmarty()->display('Kalk.tpl');    
    }
}