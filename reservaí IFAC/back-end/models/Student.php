<?php
    //Classe Student ()
    class Student extends User {
        //Atributos
        protected $educationLevel;

        //Método Construct ()
        public function __construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword, $educationLevel) {
            parent::__construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword);
            $this->setEducationLevel($educationLevel);
        }//Fim do método Construct ()

        //Método setEducationLevel ()
        public function setEducationLevel ($educationLevel) {
            $this->educationLevel = $educationLevel;
        }//Fim do método setEducationLevel ()

        //Método getEducationLevel ()
        public function getEducationLevel () {
            return $this->educationLevel;
        }//Fim do método getEducationLevel ()
    }//Fim da Classe Student
?>