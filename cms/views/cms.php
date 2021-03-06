<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <title>CMS Central</title>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/jquery.mask.js"></script>
    <!-- <script src="js/jquery-3.2.1.js"></script> -->
    <script src="js/jquery-ui.js"></script>
    <script src="js/masks.js"></script>
    <script src="js/list.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    //pagina de duvidas frequentes
      $("#duvidas").click(function(){
        $.ajax({
          type:"POST",
          url:"views/Duvidas_Frequentes/pagina_layout_duvidas.php",
          data:{},
          success: function(dados){
            $("#main").html(dados);
          }
        });
      });
      //pagina de frotas
      $("#frotas").click(function(){
          $.ajax({
            type:"POST",
            url:"views/Frotas/pagina_layout_frotas.php",
            data:{},
            success: function(dados){
              $("#main").html(dados);
            }
          });
        });
        //pagina de home
      $("#home").click(function(){
            $.ajax({
              type:"POST",
              url:"views/Home/pagina_layout_home.php",
              data:{},
              success: function(dados){
                $("#main").html(dados);
              }
            });
          });
          //pagina de Interacao
      $("#interacao").click(function(){
              $.ajax({
                type:"POST",
                url:"views/Interacao/pagina_layout_interacao.php",
                data:{},
                success: function(dados){
                  $("#main").html(dados);
                }
              });
            });
              //pagina de sobre a empresa
       $("#sobre").click(function(){
                  $.ajax({
                    type:"POST",
                    url:"views/Sobre_Empresa/pagina_layout_sobre.php",
                    data:{},
                    success: function(dados){
                      $("#main").html(dados);
                    }
                  });
                });

      //pagina de funcionario
      $("#funcionario").click(function(){
                    $.ajax({
                      type:"POST",
                      url:"views/Cadastro_Funcionario/pagina_layout_funcionario.php",
                      data:{},
                      success: function(dados){
                        $("#main").html(dados);
                      }
                    });
                  });
                  //cadastro de onibus
      $("#onibus").click(function(){
                      $.ajax({
                        type:"POST",
                        url:"views/Cadastro_Onibus/pagina_layout_onibus.php",
                        data:{},
                        success: function(dados){
                          $("#main").html(dados);
                        }
                      });
                    });
                    //cadastro de postos rodoviarios
      $("#postos_rodoviarios").click(function(){
                        $.ajax({
                          type:"POST",
                          url:"views/Cadastro_Postos_Rodoviarios/postos_rodoviarios_layout.php",
                          data:{},
                          success: function(dados){
                            $("#main").html(dados);
                          }
                        });
                      });
                      //cadastro de vendas de passagen
      $("#pacote_viagem").click(function(){
                          $.ajax({
                            type:"POST",
                            url:"views/Pacote_Viagem/pacote_viagem_layout.php",
                            data:{},
                            success: function(dados){
                              $("#main").html(dados);
                            }
                          });
                        });
                        //cadastro de motorista
      $("#motorista").click(function(){
                            $.ajax({
                              type:"POST",
                              url:"views/Cadastro_Motorista/layout_motorista.php",
                              data:{},
                              success: function(dados){
                                $("#main").html(dados);
                              }
                            });
                          });
                          //cadastro de motorista
      $("#usuarios").click(function(){
            $.ajax({
              type:"POST",
              url:"views/Usuarios/layout_usuario.php",
              data:{},
              success: function(dados){
                $("#main").html(dados);
              }
            });
          });

          $("#parada").click(function(){
                $.ajax({
                  type:"POST",
                  url:"views/Parada/parada_layout.php",
                  data:{},
                  success: function(dados){
                    $("#main").html(dados);
                  }
                });
              });
          $("#auditoria").click(function(){
                    $.ajax({
                      type:"POST",
                      url:"views/Auditoria/auditoria_layout.php",
                      data:{},
                      success: function(dados){
                        $("#main").html(dados);
                      }
                    });
                  });
          $("#viagem").click(function(){
              $.ajax({
              type:"POST",
              url:"views/Viagem/viagem_layout.php",
              data:{},
              success: function(dados){
                $("#main").html(dados);
            }
          });
        });

        $("#faleconosco").click(function(){
              $.ajax({
              type:"POST",
              url:"views/Faleconosco/layout_faleconosco.php",
              data:{},
              success: function(dados){
                $("#main").html(dados);
            }
          });
        });
        $("#itinerario").click(function(){
              $.ajax({
              type:"POST",
              url:"views/Itinerarios/itinerario_layout.php",
              data:{},
              success: function(dados){
                $("#main").html(dados);
            }
          });
        });
        $("#acompanhamento").click(function(){
              $.ajax({
              type:"POST",
              url:"views/Acompanhamento/acompanhamento_layout.php",
              data:{},
              success: function(dados){
                $("#main").html(dados);
            }
          });
        });
      });
    </script>
  </head>
  <body>
    <div class="modalContainer">
     <div class="modal">

     </div>
   </div>
      <!-- Cabeçalho -->
      <header>
        <!-- Logo -->
        <div class="header-content" style="">
          <img class="img_user" src="img/logo-cms.png" alt="logo">
          <a href=""><div class="text_user">rea Administrativa</div></a>
        </div>
        <!-- usuario -->
        <div class="header-content" style="">
          <img class="img_user" src="img/user-icon-cms.png" alt="user">
          <div class="text_user">Bem vindo Teste</div>
          <!-- <input class="logout" type="submit" name="btnlogout" value="Logout"> -->
        </div>
      </header>
    <div class="container_cms">
      <!-- menu lateral -->
      <nav>
        <ul class="mainmenu">
          <li class="itens" >
            <div class="nav_title">

              <img src="img/adm.png">
              <a href="#">Admistração</a>
            </div>

              <ul id='1' class="submenu">
                <li><a href="#">Relatorios</a></li>
                <li><a href="#">Graficos</a></li>
                <li id="funcionario"><a href="#">Cadastro de funcionarios</a></li>
                <li id="motorista"><a href="#">Cadastro de Motorista</a></li>
                <li id="usuarios"><a href="#">Usuarios</a></li>
                <li id="auditoria"><a href="#">Auditoria</a></li>
              </ul>
          <li>
          <li class="itens" >

            <div class="nav_title">

              <img src="img/mark.png">
              <a href="#">Marketing</a>
            </div>
              <ul id='2' class="submenu">
                <li id="sobre"><a href="#" >Sobre a Empresa</a></li>
                <li id="duvidas"><a href="#">Duvidas Frequentes</a></li>
                <li id="interacao"><a href="#">Interação</a></li>
                <li id="frotas"><a href="#">Frotas</a></li>
                <li id="home"><a href="#">Home</a></li>
                <li id="faleconosco"><a href="#">Fale Conosco</a></li>
              </ul>
          <li>
            <li id='3' class="itens" >
              <div class="nav_title">

              <img src="img/vend.png">
              <a href="#">Vendas</a>
            </div>
                <ul class="submenu">
                  <li id="pacote_viagem"><a href="#">Pacotes de Viagens</a></li>
                  <li id="viagem"><a href="#">Viagens</a></li>
                  <li id="parada"><a href="#">Parada</a></li>
                  <li id="itinerario"><a href="#">Itinerario</a></li>
                  <li id="onibus"><a href="#">Cadastro de Onibus</a></li>
                  <li id="acompanhamento"><a href="#">Acompanhamento das Viagens</a></li>
                  <li id="postos_rodoviarios"><a href="#">Postos Rodoviarios</a></li>
                </ul>
            <li>
              <li id='4' class="itens" >
                <div class="nav_title">
              <img src="img/mec.png">
              <a href="#">Mecânico</a>
            </div>
                  <ul class="submenu">
                    <li><a href="#">Onibus em Manutenção</a></li>
                  </ul>
              <li>
        </ul>
      </nav>
      <!-- Conteudo -->
      <div id="main">

      </div>
    </div>
    <?php if(isset($_GET['mensagem'])):?>
      <script type="text/javascript">alert("Parada não pode ser apagada pois esta selecionada em um registro de Itinerario!")</script>
    <?php
   endif;
   ?>

  </body>
</html>
