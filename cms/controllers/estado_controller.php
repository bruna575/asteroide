<?php

    /*
        Autor:William
        Data de Modificação:22/03/2018
        Controller:Funcionario
        Obs:Controller para realizar o CRUD de contatos que vai vir do contatos (RETIRAR OS DADOS DO FORMULÁRIO!!!!!)
    */

    class controllerEstado{


        //Busca um registro existente
        public function Buscar($id){


        }

        //Lista todos os contatos existentes
        public function Listar(){

          $estado = new Estado();

          return $estado::Select();

        }



    }

?>
