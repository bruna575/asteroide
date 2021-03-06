<?php
// session_start();
    /*
        Autor:Lucas
        Data de Modificação:23/05/2018
        Controller:Sobre Empresa
        Obs:Controller para realizar o CRUD de titulos, textos e imagens na página de Sobre Empresa.
    */

    class controllerSobreEmpresa{


        //Insere novo contato
        public function Novo(){
          $sobre_empresa = new sobreEmpresa();

          $sobre_empresa->titulo1 = $_POST['txttitulo1'];
          $sobre_empresa->texto1 = $_POST['txttexto1'];
          $sobre_empresa->titulo2 = $_POST['txttitulo2'];
          $sobre_empresa->texto2 = $_POST['txttexto2'];
          $sobre_empresa->detalhes1 = $_POST['txtdetalhes1'];
          $sobre_empresa->detalhes2 = $_POST['txtdetalhes2'];
          $sobre_empresa->detalhes3 = $_POST['txtdetalhes3'];
          $sobre_empresa->detalhes4 = $_POST['txtdetalhes4'];

          //NAO PEGA IMAGEM ASSIM
          // $sobre_empresa->imagem = $_POST['imagem'];
          // $sobre_empresa->icon1 = $_POST['icon1'];
          // $sobre_empresa->icon2 = $_POST['icon2'];
          // $sobre_empresa->icon3 = $_POST['icon3'];
          // $sobre_empresa->icon4 = $_POST['icon4'];

          //PRIMEIRO PEGA AS IMAGENS PRA DEPOIS CHAMAR ESSA FUNÇÃO COM INSERT
          // $frotas->imagem=$diretorio_completo;
          // $frotas->nome=$_POST['txttitulo1'];
          // $sobre_empresa::Insert($sobre_empresa);


        // PEGA AS IMAGENS
          require_once('trata_imagem.php');

          // iniciado variaveis
           $diretorio_completo=Null;
           $MovUpload=false;
           $imagem_file=Null;

          //pegando a foto
             if (!empty($_FILES['imagem']['name'])) {
                $imagem_file = true;
                $diretorio_completo=salvarFoto($_FILES['imagem'],'arquivo');
                if ($diretorio_completo == "Erro") {
                      $MovUpload=false;
                }else {
                  $MovUpload=true;
                }
              } else {
                $imagem_file = false;
              }

              $sobre_empresa->imagem = $diretorio_completo;
              $sobre_empresa::Insert($sobre_empresa);


        }

        //Atualiza um contato existente
        public function Editar($sobre_empresa){
          $sobre_empresa = new sobreEmpresa();

          require_once('trata_imagem.php');

           $diretorio_completo=Null;
           $MovUpload=false;
           $imagem_file=Null;
           $foto="nada";

          $sobre_empresa->titulo1 = $_POST['txttitulo1'];
          $sobre_empresa->texto1 = $_POST['txttexto1'];
          $sobre_empresa->titulo2 = $_POST['txttitulo2'];
          $sobre_empresa->texto2 = $_POST['txttexto2'];
          $sobre_empresa->imagem = $_POST['imagem'];
          $sobre_empresa->icon1 = $_POST['icon1'];
          $sobre_empresa->detalhes1 = $_POST['txtdetalhes1'];
          $sobre_empresa->icon2 = $_POST['icon2'];
          $sobre_empresa->detalhes2 = $_POST['txtdetalhes2'];
          $sobre_empresa->icon3 = $_POST['icon3'];
          $sobre_empresa->detalhes3 = $_POST['txtdetalhes3'];
          $sobre_empresa->icon4 = $_POST['icon4'];
          $sobre_empresa->detalhes4 = $_POST['txtdetalhes4'];

          //pegando a foto
             if (!empty($_FILES['imagem']['name'])) {
                $imagem_file = true;
                $diretorio_completo=salvarFoto($_FILES['imagem'],'arquivo');
                if ($diretorio_completo == "Erro") {
                      $MovUpload=false;
                }else {
                  $MovUpload=true;
                }
              }else {
                $imagem_file = false;
              }

              if ($imagem_file == true && $MovUpload==true) {
               $foto =$diretorio_completo;
             }else {
               $foto="nada";
             }

             $sobre_empresa->id = $idFrotas;
             $sobre_empresa->imagem=$diretorio_completo;
             $sobre_empresa->titulo1=$_POST['txttitulo1'];
             $sobre_empresa->imagem = $foto;

          $sobre_empresa::Update($sobre_empresa);

        }

        //Apaga um contato existente
        public function Excluir(){
          $idEmpresa = $_GET['id'];
          $sobre_empresa = new sobreEmpresa();

          $sobre_empresa->id = $idEmpresa;

          $sobre_empresa::Delete($sobre_empresa);
        }

        //Busca um registro existente
        public function Buscar($id){
          $sobre_empresa = new sobreEmpresa();
          $sobre_empresa->id = $id;

          return $sobre_empresa_dados= $sobre_empresa::SelectById($sobre_empresa);

        }

        //Lista todos os contatos existentes
        public function Listar(){

          $sobre_empresa = new sobreEmpresa();

          return $sobre_empresa::Select();

        }
    }

?>
