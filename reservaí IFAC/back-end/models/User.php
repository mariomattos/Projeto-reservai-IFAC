<?php
    //Classe User
    class User {
        //Atributos
        private $registrationId;
        private $userCpf;
        private $userBirthDate;
        private $userEmail;
        private $userPassword;
        //Referência de memória
        private $characteristics; //Composição

        //Métodos

        //Método __construct ()
        public function __construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword) {
            $this->setRegistrationId ($registrationId);
            $this->setUserCpf ($userCpf);
            $this->setUserBirthDate ($userBirthDate);
            $this->setUserEmail ($userEmail);
            $this->setUserPassword ($userPassword);
            $this->characteristics = array();
        }//Fim do método __construct ()

        //Método setRegistrationId ()
        public function setRegistrationId ($registrationId) {
            $this->registrationId = $registrationId;
        }//Fim do método setRegistrationId ()

        //Método getRegistrationId ()
        public function getRegistrationId () {
            return $this->registrationId;
        }//Fim do método getRegistrationId ()

        //Método setUserCpf ()
        public function setUserCpf ($userCpf) {
            $this->userCpf = $userCpf;
        }//Fim do método setUserCpf ()

        //Método getUserCpf ()
        public function getUserCpf () {
            return $this->userCpf;
        }//Fim do método getUserCpf ()

        //Método setUserBirthDate ()
        public function setUserBirthDate ($userBirthDate) {
            $this->userBirthDate = $userBirthDate;
        }//Fim do método setUserBirthDate ()

        //Método getUserBirthDate ()
        public function getUserBirthDate () {
            return $this->userBirthDate;
        }//Fim do método getUserBirthDate ()

        //Método setUserEmail ()
        public function setUserEmail ($userEmail) {
            $this->userEmail = $userEmail;
        }//Fim do método setUserEmail ()

        //Método getUserEmail ()
        public function getUserEmail () {
            return $this->userEmail;
        }//Fim do método getUserEmail ()

        //Método setUserPassword ()
        public function setUserPassword ($userPassword) {
            $this->userPassword = $userPassword;
        }//Fim do método setUserPassword ()

        //Método getUserPassword ()
        public function getUserPassword () {
            return $this->userPassword;
        }//Fim do método getUserPassword ()

        //Método addCharacteristics
        public function addCharacteristics($name, $description, $quantity) {
            $this->characteristics[] = new Characteristic ($name, $description, $quantity);
        }//Fim do método addCharacteristics()

        //Método addCharacteristics
        public function getCharacteristics () {
            return $this->characteristics;
        }//Fim do método addCharacteristics
    }//Fim da Classe User
?>