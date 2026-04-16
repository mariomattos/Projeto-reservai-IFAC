<?php
    //Classe Produto
    class Reserva {
        //atributos
        private $ID;
        private $horario;
        private $espaco;
        //Referência de memória
        private $usuario;

        //Métodos

        //Método construtor
        public function __construct ($ID, $horario, $espaco) {
            $this->setID($ID);
            $this->setHorario($horario);
            $this->setEspaco($espaco);
        }//Fim do método construtor

        //Método setID()
        public function setID ($ID) {
                $this->ID = $ID;    
        }//Fim do método setID()

        //Método getID()
        public function getID () {
            return $this->ID;
        }//Fim do método getID()

        //Método setHorario()
        public function setHorario ($horario) {
            if (is_string($horario) AND $horario >= 0) {
                $this->horario = $horario;
            }
        }//Fim do método setHorario()

        //Método getHorario()
        public function getHorario () {
            return $this->horario;
        }//Fim do método getHorario()

        //Método setEspaco()
        public function setEspaco($espaco) {
            if (is_string($espaco) AND $espaco > 0) {
                $this->espaco = $espaco;
            }
        }//Fim do método setEspaco()

        //Método getEspaco()
        public function getEspaco() {
            return $this->espaco;
        }//Fim do método getEspaco()

        //Método setUsuario()
        public function setUsuario (Usuario $u) {
            //Passando a referência do objeto uf que
            //é do tipo Fabricante
            $this->usuario = $u;
        }//Fim do método setUsuario()

        //Método getUsuario()
        public function getUsuario () {
            //Retorna a referência inteira de fabricante
            //É possível acessar os atributos e os 
            //métodos de fabricante
            return $this->usuario;
        }//Fim do método getUsuario()
    }//Fim da classe Produto
?>