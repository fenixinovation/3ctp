<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>3CTP</title>

        <link href="source/css/bootstrap.min.css" rel="stylesheet">
        <link href="source/css/bootstrap-theme.css" rel="stylesheet">
        <link href="source/css/bootstrap-theme.css.map" rel="stylesheet">
        <link href="source//css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="source//css/bootstrap.css" rel="stylesheet">
        <link href="source//css/bootstrap.css.map" rel="stylesheet">
        <link href="source//css/bootstrap.min.css.map" rel="stylesheet">
        <link href="source//css/style.css" rel="stylesheet">
        <link href="source//css/layout_paginas.css" rel="stylesheet">
        <script src="source//js/bootstrap.min.js"></script>
        <script src="source//js/jquery-1.12.3.min.js"></script>
        <script src="source//js/bootstrap.js"></script>
        <script src="source//js/npm.js"></script>

        <script  src="source//js/jquery-1-4-2.min.js"></script> 


        <script  src="source//js/jquery-1.9.0.min.js"></script>

        <script  src="source//js/jquery.cycle.all.js"></script>


        <script type="text/javascript">
            $(function () {
                $(".bannerrotativo ul").cycle({
                    fx: 'fade',
                    speed: 2000,
                    timeout: 2000,
                })
            })
        </script>
    </head>
    <body >



        <nav style="margin-bottom: 0" class="navbar navbar-default">
            <div class="container-fluid bg-primary">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar">a</span>
                        <span class="icon-bar">b</span>
                        <span class="icon-bar">c</span>                        
                    </button>

                </div>
                <div class="collapse navbar-collapse " id="myNavbar">
                    <ul  class="nav navbar-nav text-uppercase">

                        <li ><a style="color: #ffffff" href="pagina_azul.html">Home</a></li>
                        <li><a style="color: #ffffff" href="#">Cursos</a></li>
                        <li><a style="color: #ffffff" href="#">Palestras</a></li>
                        <li><a style="color: #ffffff" href="#">Suporte</a></li>
                        <li><a style="color: #ffffff" href="index.php">Amarelo</a></li>

                      <li><a style="color: #ffffff" href="#" data-toggle="modal" data-target="#myModalEnvioEmailCliente">Contacte-nos</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">

                        <li> 
                            <label>INSTITUTO SUPERIOR POLITÉCNICO DA HUÍLA  
                                <img src="imagens/umn.png" width="30" height="25"/>

                            </label><br>
                            <label > 3C, Tendências e Paradígmas  
                                <img src="imagens/logo.jpg" class="img-circle" width="30" height="25"/>

                            </label>

                        </li>


                    </ul>
                </div>
            </div>
        </nav>


       <div id="slideShow" style="margin: 0px; background: url(imagens/fotofundoQuinho.png); " class="row jumbotron  text-center bg-primary">
            <div class="col-md-8">
              <!--    <h1 id="textoSlide">3CTP</h1>
                <img style="max-width: 100%; margin: 0" src="imagens/fotofundo.png" alt=""/>
                -->
               </div>
              <div class="col-md-4">
                 <div class="bannerrotativo">
                     <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>  <br>
                <ul  style="margin-right: 0; list-style: none; ">

                    <li>
                       <article id="loop-eventos">
                  
                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/workshop/foto7.jpg" class="img-thumbnail" width="300" height="200"/>


                        </div>
                        <div class="descEvento bg-primary">
                      Comissão Organizadora - 3CTP

                        </div></a>
                    
                </article>
                    </li>
                         <li>
                       <article id="loop-eventos">
                  
                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/workshop/foto6.jpg" class="img-thumbnail" width="300" height="200"/>
</div>
                        <div class="descEvento bg-primary">
                          Participantes do curso de Virtualização

                        </div></a>
                    
                </article>
                    </li>
                    
                         <li>
                       <article id="loop-eventos">
                  
                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/workshop/foto1.jpg" class="img-thumbnail" width="300" height="200"/>


                        </div>
                        <div class="descEvento bg-primary">
                         Formador: Henriques Zacarias.
                       
                        </div></a>
                    
                </article>
                    </li>
                         <li>
                       <article id="loop-eventos">
                  
                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/workshop/foto2.jpg" class="img-thumbnail" width="300" height="200"/>


                        </div>
                        <div class="descEvento bg-primary">
                         Formador: Abel Zacarias.

                        </div></a>
                    
                </article>
                    </li>
                         <li>
                       <article id="loop-eventos">
                  
                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/workshop/foto3.jpg" class="img-thumbnail" width="300" height="200"/>


                        </div>
                        <div class="descEvento bg-primary">
                         Formador: Evaldo Dos Prazeres.
                        </div></a>
                    
                </article>
                    </li>
                    
                     <li>
                       <article id="loop-eventos">
                  
                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/workshop/foto4.jpg" class="img-thumbnail" width="300" height="200"/>


                        </div>
                        <div class="descEvento bg-primary">
                       Formador: Eugénio Manuel.
                        </div></a>
                    
                </article>
                    </li>
                    <li>
                       <article id="loop-eventos">
                  
                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/workshop/foto5.jpg" class="img-thumbnail" width="300" height="200"/>


                        </div>
                        <div class="descEvento bg-primary">
                     Formador: Francisco Chimuco
                        </div></a>
                    
                </article>
                    </li>
                       <li>
                       <article id="loop-eventos">
                  
                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/workshop/foto8.jpg" class="img-thumbnail" width="300" height="200"/>


                        </div>
                        <div class="descEvento bg-primary">
                     Formador: João Bioco
                        </div></a>
                    
                </article>
                    </li>
           </ul>

            </div>
            </div>

           


        </div>

        <div style="margin: 0px; background: #cccccc">
            <div class="row">
                <div id="seccao" class="col-md-7">


                    <p><big> <b style="font-size: 27px">Cursos pré-eventos</b> </big><br>
                    <small> Venha fazer parte dos cursos pré-eventos, cadastre-se já!</small>
                    </p>
                </div>

                <div  class="col-md-5 ">
                      <a  href="#"><button class="btn-primary">Inscreva-te </button> </a>
                </div>


            </div>






        </div>

        <div id="cursos" >
            <br><br>

            <h2 class="text-primary" style="margin: 0; text-align: center"><b>Painel dos cursos pré-evento </b></h2>
            <hr>
            <div  class="row">


                <article id="loop-cursos">

                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/cursos/python.jpg " />


                        </div>
                        <div class=" desc text-left">
                            <h5>
                                Introdução a programação<br> com python
                            </h5>
                            <hr>
                            <h4 class="text-success">Março/2018</h4>

                            <h4 class="text-warning">&star;&star;&star;&star;&star;</h4>


                        </div></a>

                </article>



                <article id="loop-cursos">

                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/cursos/r.jpg" />


                        </div>
                        <div class=" desc text-left">
                            <h5>
                                Análise de dados com <br> ferramente R
                            </h5>
                            <hr>
                            <h4 class="text-success">Março/2018</h4>

                            <h4 class="text-warning">&star;&star;&star;&star;&star;</h4>


                        </div></a>

                </article>



                <article id="loop-cursos">

                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/cursos/it.jpg" />


                        </div>
                        <div class=" desc text-left">
                            <h5>
                                Informacion Tecnology (IT) <br> Governance
                            </h5>
                            <hr>
                            <h4 class="text-success">Março/2018</h4>

                            <h4 class="text-warning">&star;&star;&star;&star;&star;</h4>


                        </div></a>

                </article>



                <article id="loop-cursos">

                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/cursos/linux.jpg" />


                        </div>
                        <div class=" desc text-left">
                            <h5>
                                Administração de Sistemas<br> com Linux
                            </h5>
                            <hr>
                            <h4 class="text-success">Março/2018</h4>

                            <h4 class="text-warning">&star;&star;&star;&star;&star;</h4>


                        </div></a>

                </article>

                <article id="loop-cursos">

                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/cursos/moddle.jpg" />


                        </div>
                        <div class=" desc text-left">
                            <h5>
                                Modle para<br> Professores
                            </h5>
                            <hr>
                            <h4 class="text-success">Março/2018</h4>

                            <h4 class="text-warning">&star;&star;&star;&star;&star;</h4>


                        </div></a>

                </article>

                <article id="loop-cursos">

                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/cursos/matlabe.jpg" />


                        </div>
                        <div class=" desc text-left">
                            <h5>
                                Visão computacional<br> com Matlab
                            </h5>
                            <hr>
                            <h4 class="text-success">Março/2018</h4>

                            <h4 class="text-warning">&star;&star;&star;&star;&star;</h4>


                        </div></a>

                </article>

                <article id="loop-cursos">

                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/cursos/virtuais.jpg" />


                        </div>
                        <div class=" desc text-left">
                            <h5>
                                Introdução a virtualização<br> de Maquinas
                            </h5>
                            <hr>
                            <h4 class="text-success">BREVEMENTE</h4>

                            <h4 class="text-warning">&star;&star;&star;&star;&star;</h4>


                        </div></a>

                </article>

                <article id="loop-cursos">

                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/cursos/agentes.jpg" />


                        </div>
                        <div class=" desc text-left">
                            <h5>
                                Modelação Baseada em Agentes <br> ABM
                            </h5>
                            <hr>
                            <h4 class="text-success">BREVEMENTE</h4>

                            <h4 class="text-warning">&star;&star;&star;&star;&star;</h4>


                        </div></a>

                </article>






            </div> <!-- /.row das colunas -->


            <div class="row">

                <div class="col-md-12">
                    <a href="#" >  <h2  style="margin: 0; text-align: center"><b> <small  class="bg-primary"> VER MAIS &DoubleRightArrow;</small></b></h2></a>  

                    <hr>
                </div>
            </div>

            <div class="row">

                <div class=" text-center">
                    <h2 class="text-primary" style="margin: 0; text-align: center"><b>  Eventos Recentes</b></h2>  
                    <hr>
                    
                    
                         <article id="loop-eventos">
                  
                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/workshop/foto7.jpg" />


                        </div>
                        <div class="descEvento  bg-primary">
                            3CTP ISCED - Huila, 2017 - Organização

                        </div></a>
                  
                </article>
                    
                     <article id="loop-eventos">
                  
                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/workshop/foto6.jpg" />


                        </div>
                        <div class="descEvento bg-primary">
                          Participantes do curso de Virtualização

                        </div></a>
                    
                </article>
                    
                    
                     <article id="loop-eventos">
                  
                    <a href="#">
                        <div id="imgloop">
                            <img src="imagens/workshop/encerramento.jpg" />


                        </div>
                        <div class="descEvento  bg-primary">
                           3C, tendências e paradigma - ISCE-Huila

                        </div></a>
                    
                </article>
                    
                  
                    
                    

                </div></div>

            <div class="row jumbotron">
                <div class="col-md-6 text-right">
                    <h2 > <b>Comentarios </b> </h2>
                    
                    
                      <h6 > Veja o feedback no facebook</h6>
                      
                      <a href="#">   <h4 > <b class="bg-primary">Ler todos comentarios </b> </h4></a>    
                </div>
                <div class="col-md-6 text-left">
                    <p style="font-size: 12px">
                        Olá pessoal! Eu sou <b>Romeo Arafath </b>,<br> participei dos cursos pré-eventos <br>e 
                        aconselho vocês a aderirem ao 3CTP, <br>porque aprende-se 
                        bastante e tem <br>Formadores com bastante qualidade!
                    </p>
                    
                    <img src="imagens/internautas/arafath.jpg" class="img-circle" width="80" height="60"/>

                </div>
            </div>

            
           
             <div class=" bg-primary row featurette">
                <div class="col-md-4">
                    <fieldset>
                        <legend style="color: #ffffff; margin-left: 30px">Contacto</legend>

                        <address class="text-right ">
                            Entre em contacto connosco,   acesse abaixo nossas redes e curta nossa pagina do FACEBOOK

                        </address>
                    </fieldset>
                    <div style="margin-left: 20px">
                        <a href="#"> <img src="imagens/icones/facebook.png" width="24" height="24" title="visete-nos no facebook" /></a>
                        <a href="#"> <img src="imagens/icones/pag.png" width="25" height="25" title="curta nossa pagina do facebook" /></a>
                        <a href="#"> <img src="imagens/icones/twitter.png" width="24" height="24" title="acesse nosso twitter"/></a>
                        <a href="#"> <img src="imagens/icones/wats.png" width="30" height="30" alt="Numero de telefone" title="Colocar o numero do telefone da empresa" /></a>
                        <a href="#"> <img src="imagens/icones/youtube.png" width="24" height="24" title="curta nosso canal do youtube"/></a>
                        <br><br>
                        <label>Ou contacte-nos pelo Correio Eletronico:<address> <big>  3ctpangola@gmail.com</big></address></label>
                    </div>
                    


                </div>

                <div class="col-md-4">
                    <fieldset>
                        <legend style="color: #ffffff; margin-left: 30px">Parceiros</legend>
                        <ul>
                            <li>Universidade Agostinho Neto</li>
                             <li>Universidade Católica de Angola</li>
                             <li>Instituto Superior Politecnico Independente</li>
                             <li>Universidade Metodista</li>
                              <li>ISUTIC</li>
                              <li>ISPTEC</li>
                              <li>Radio +</li>
                              <li>Radio Huila</li>
                              <li>Radio 2000</li>
                        </ul>


                    </fieldset>


                </div>

                <div class="col-md-4">
                    <fieldset>
                        <legend style="color: #ffffff; margin-left: 9px">Apoio</legend>
                      
                            <div class="form-group">
                                
                                <A href="#"> <h5 style="color: #ffffff;">&GT; INSTITUTO SUPERIOR POLITECNICO DA HUILA</h5> </A>        
                            </div>
                            <div class="form-group">
                                
                              <A href="#">    <h5 style="color: #ffffff;">&GT; INSTITUTO SUPERIOR DE CIENCIAS DA EDUCAÇÃO</h5></A> 
                            </div>




                           
                     
                    </fieldset>







                </div>

            </div>








<footer>
                <nav class="navbar navbar-default">
                    <div class="container-fluid ">


                        <p class="pull-right"><a href="#">TOPO</a></p>
                        <p class="text-primary text-center"><br>&copy; <b>Conferência de Ciências da Computação, Tendencias e Paradígmas <a href="#">-3CTP </a></b>
                            <img src="imagens/logo.jpg" width="50" height="30"/>
                           

                        </p>
                    </div>
                </nav>
            </footer>





        
        
        
                                <!-- Inicio Modal envie seu email -->
        <div id="myModalEnvioEmailCliente" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <form class="form-horizontal" role="form" action="" method="POST">
                    <div class="modal-content">
                        <div class="panel panel-primary">
                         <div class="modal-header btn-primary">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Envie seu email para 
                                <img src="imagens/logo.png"  alt="" width="250" height="50"/></h4>
                        </div>
                         <div class="panel-body">
                      
                        <div class="modal-body">

                          
                            
                            
                                   

                                       
                                              <div class="form-group">
                                                <label for="inputName">*Nome</label>
                                                <input type="text" placeholder="digite seu nome" value="" class="form-control" required="" id="inputName" name="nome">

                                            </div>

                                         



                                            <div class="form-group">
                                                <label for="inputName">*Email</label>
                                                <input type="email" class="form-control" value="" placeholder="digite seu endereço de email" required="" id="inputName" name="email" >

                                              
                                                
                                            </div>

                                            <div class="form-group">
                                                <label for="inputName">*Mensagem</label>
                                                <textarea class="form-control" required="" placeholder="escreva aqui a sua mensagem" name="mensagem" rows="4" cols="20">
                                                </textarea>
                                            </div>
                                           


                        </div>
                        <div class="modal-footer">
                            <button	type="submit" class="btn btn-primary">Enviar</button>
                            <button	type="reset" class="btn btn-primary">Limpar</button>
                            <button type="submit" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                         </div></div></div>
                </form>
   

            </div>
        </div>
        <!-- Fim  Modal -->
    </body>
</html>
