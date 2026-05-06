<?php
    //Classe Student ()
    class Teacher extends User {
        //Atributos
        protected $subject;
        
        //Método Construct ()
        public function __construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword, $subject) {
            parent::__construct ($registrationId, $userCpf, $userBirthDate, $userEmail, $userPassword);
            $this->setSubject ($subject);
        }//Fim do método Construct ()

        //Método setSubject ()
        public function setSubject ($subject) {
            $this->subject = $subject;
        }//Fim do método setSubject ()

        //Método getSubject ()
        public function getSubject () {
            return $this->subject;
        }//Fim do método getSubject ()
    }//Fim da classe Student ()
?>