<?php
    //Classe Administrator ()
    class Administrator extends User {
        //Atributos
        protected $acessNumber;

        //Método __construct ()
        public function __construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword, $acessNumber) {
            parent::__construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword);
            $this->setAcessNumber($acessNumber);
        }//Fim do método __construct ()

        //Método setAcessNumber ()
        public function setAcessNumber ($acessNumber) {
            $this->acessNumber = $acessNumber;
        }//Fim do método setAcessNumber ()

        //Método getAcessNumber ()
        public function getAcessNumber () {
            return $this->acessNumber;
        }//Fim do método getAcessNumber ()
    }//Fim da Classe Administrator () 
?>