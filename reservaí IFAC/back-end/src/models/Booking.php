<?php
    //Classe Booking
    class Booking {
        //Atributos
        private $bookingId;
        private $bookingDate;
        private $bookingStart;
        private $bookingEnd;
        //Referência de memória
        private $user; //Associação

        //Métodos

        //Método __construct ()
        public function __construct ($bookingId, $bookingDate, $bookingStart, $bookingEnd) {
            $this->setBookingId ($bookingId);
            $this->setBookingDate ($bookingDate);
            $this->setBookingStart ($bookingStart);
            $this->setBookingEnd ($bookingEnd);
        }//Fim do método __construct ()

        //Método setBookingId ()
        public function setBookingId ($bookingId) {
            $this->bookingId = $bookingId;    
        }//Fim do método setBookingId ()

        //Método getBookingId ()
        public function getBookingId () {
            return $this->bookingId;
        }//Fim do método getBookingId ()

        //Método setBookingStart ()
        public function setBookingStart ($bookingStart) {
            $this->bookingStart = $bookingStart;
        }//Fim do método setBookingStart ()

        //Método getBookingStart ()
        public function getBookingStart () {
            return $this->bookingStart;
        }//Fim do método getBookingStart ()

        //Método setBookingEnd ()
        public function setBookingEnd ($bookingEnd) {
            $this->bookingEnd = $bookingEnd;
        }//Fim do método setBookingEnd ()

        //Método getBookingEnd ()
        public function getBookingEnd () {
            return $this->bookingEnd;
        }//Fim do método getBookingEnd ()

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
            $this->user = $u;
        }//Fim do método setUser ()

        //Método getUser ()
        public function getUser () {
            return $this->user;
        }//Fim do método getUser ()
    }//Fim da Classe Booking
?>