<?php
    //Classe Booking
    class Booking {
        //Atributos
        private $bookingId;
        private $bookingTime;
        private $bookingDate;
        //Referência de memória
        private $user; //Associação

        //Métodos

        //Método construct
        public function __construct ($bookingId, $bookingTime, $bookingDate) {
            $this->setBookingId ($bookingId);
            $this->setBookingTime ($bookingTime);
            $this->setBookingDate ($bookingDate);
        }//Fim do método construct

        //Método setBookingId ()
        public function setBookingId ($bookingId) {
            $this->bookingId = $bookingId;    
        }//Fim do método setBookingId ()

        //Método getBookingId ()
        public function getBookingId () {
            return $this->bookingId;
        }//Fim do método getBookingId ()

        //Método setBookingTime ()
        public function setBookingTime ($bookingTime) {
            $this->bookingTime = $bookingTime;
        }//Fim do método setBookingTime ()

        //Método getBookingTime ()
        public function getBookingTime () {
            return $this->bookingTime;
        }//Fim do método getBookingTime ()

        //Método setBookingDate ()
        public function setBookingDate ($bookingDate) {
            $this->bookingDate = $bookingDate;
        }//Fim do método setBookingDate ()

        //Método getBookingDate ()
        public function getBookingDate () {
            return $this->bookingDate;
        }//Fim do método getBookingDate ()

        //Método setUser ()
        public function setUser (User $u) {
        //Passando a referência do objeto u
            $this->user = $u;
        }//Fim do método setUser ()

        //Método getUser ()
        public function getUser () {
            return $this->user;
        }//Fim do método getUser ()
    }//Fim da classe Booking
?>