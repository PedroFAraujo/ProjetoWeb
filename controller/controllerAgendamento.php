<?php

    class ControllerAgendamentos{

        private $agendamentos;

        public function __construct(){
            $this->agendamentos = new Agendamentos();
            $this->incluir();
        }

        public function Incluir(){
            $this->agendamentos->setNome($_POST['nome']);
            $this->agendamentos->setTelefone($_POST['telefone']);
            $this->agendamentos->setOrigem($_POST['origem']);
            $this->agendamentos->setData_contato($_POST['dataContato']);
            $this->agendamentos->setObservacao($_POST['observacao']);
        }

    }

?>