<?php
    //Classe Teacher
    class Teacher extends User {
        //Atributos
        protected $subject;

        //Métodos
        
        //Método __construct ()
        public function __construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword, $userName, $subject) {
            parent::__construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword, $userName);
            $this->setSubject ($subject);
        }//Fim do método __construct ()

        //Método setSubject ()
        public function setSubject ($subject) {
            $this->subject = $subject;
        }//Fim do método setSubject ()

        //Método getSubject ()
        public function getSubject () {
            return $this->subject;
        }//Fim do método getSubject ()
    }//Fim da Classe Teacher
?>