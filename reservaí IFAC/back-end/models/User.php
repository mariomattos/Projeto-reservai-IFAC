<?php
    //Classe User
    class User {
        //Atributos
        private $registrationId;
        private $userCpf;
        private $userBirthDate;
        private $userEmail;
        private $userPassword;
        private $characteristics; //Composição

        //Métodos

        //Método Construct
        public function __construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword) {
            $this->setRegistrationId ($registrationId);
            $this->setUserCpf ($userCpf);
            $this->setUserBirthDate ($userBirthDate);
            $this->setUserEmail ($userEmail);
            $this->setUserPassword ($userPassword);
            $this->characteristics = array();
        }//Fim do método Construct

        //Método setRegistrationId ()
        public function setRegistrationId ($registrationId) {
            $this->registrationId = $registrationId;
        }//Fim do Método setRegistrationId ()

        //Método getRegistrationId ()
        public function getRegistrationId () {
            return $this->registrationId;
        }//Fim do Método getRegistrationId ()

        //Método setUserCpf ()
        public function setUserCpf ($userCpf) {
            $this->userCpf = $userCpf;
        }//Fim do Método setUserCpf ()

        //Método getUserCpf ()
        public function getUserCpf () {
            return $this->userCpf;
        }//Fim do Método getUserCpf ()

        //Método setUserBirthDate ()
        public function setUserBirthDate ($userBirthDate) {
            $this->userBirthDate = $userBirthDate;
        }//Fim do Método setUserBirthDate ()

        //Método getUserBirthDate ()
        public function getUserBirthDate () {
            return $this->userBirthDate;
        }//Fim do Método getUserBirthDate ()

        //Método setUserEmail ()
        public function setUserEmail ($userEmail) {
            $this->userEmail = $userEmail;
        }//Fim do Método setUserEmail ()

        //Método getUserEmail ()
        public function getUserEmail () {
            return $this->userEmail;
        }//Fim do Método getUserEmail ()

        //Método setUserPassword ()
        public function setUserPassword ($userPassword) {
            $this->userPassword = $userPassword;
        }//Fim do Método setUserPassword ()

        //Método getUserPassword ()
        public function getUserPassword () {
            return $this->userPassword;
        }//Fim do Método getUserPassword ()

        //Método addCharacteristics
        public function addCharacteristics($name, $description, $quantity) {
            $this->characteristics[] = new Characteristics ($name, $description, $quantity);
        }//Fim do método addCharacteristics()

        //Método addCharacteristics
        public function getCharacteristics () {
            return $this->characteristics;
        }//Fim do método addCharacteristics
    }//Fim da Classe User
?>