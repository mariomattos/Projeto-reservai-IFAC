<?php
    //Classe Administrator ()
    class Administrator extends User {
        //Atributos
        protected $acessNumber;

        //Método Construct ()
        public function __construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword, $acessNumber) {
            parent::__construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword);
            $this->setAcessNumber($acessNumber);
        }//Fim do método Construct ()

        //Método setAcessNumber ()
        public function setAcessNumber ($acessNumber) {
            $this->acessNumber = $acessNumber;
        }//Fim do método setAcessNumber ()

        //Método getAcessNumber ()
        public function getAcessNumber () {
            return $this->acessNumber;
        }//Fim do método getAcessNumber ()
    }//Fim da classe Administrator () 
?>