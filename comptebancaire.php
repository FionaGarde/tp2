<?php 

class CompteBancaire{

	private $_name;
	private $_depot;
	private $_retrait;

    const SOLDE = 1000;

   	/* CONSTRUCTEURS */	
       public function __construct($name, $depot = 0, $retrait = 0){
		if (empty($name)) 
			$name = 'Dupont';

		$this->_name = $name;
        $this->_depot = $depot;
        $this->_retrait = $retrait;

	}

    //permet d'afficher un message avec le nom du compte et son solde
    public function Affiche($choix){
        if($choix == 'depot')
        {        
            $add = $this->Depot();
            echo $this->_name.' votre solde est de '.$add.'€.';
         
        }
        if($choix == 'retrait')
        {        
            $remove = $this->Retrait();
            echo $this->_name.' votre solde est de '.$remove.'€.';
         
        }
        
        //return $this->_name.' votre solde est de '.self::SOLDE.'€.';
    }

    //permet d'ajouter une somme au solde
    private function Depot(): int{
        if($this->_depot > 0)
            return $this->_depot + self::SOLDE;
    }

    //permet de retirer une somme au solde
    private function Retrait(): int{
        if($this->_retrait > 0)
        return self::SOLDE - $this->_retrait;
    }   

}