<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="public/bootstrap/fontes/icomun/icomun.css">
    <link rel="stylesheet" href="public/bootstrap/sonycss/index1.css">

    <!-- CSS Páginas -->
    

    <title>Document</title>
</head>

<body>

    <header>

        <header>
            <!-- topo inicio -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="public/bootstrap/img/h.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="public/bootstrap/img/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="public/bootstrap/img/2 (2).jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="TituloModalCentralizado">Adicionado Ao Carrinho</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Numero do pedido:77485155-6
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"> Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>

        </header>






        <!-- navbar  -->
        <nav class="luiz navbar navbar-expand-lg navbar-light fixed  ">
            <a class="navbar-brand text-light " href="projetosony.php?pg=home">SONY</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link  text-light " href="projetosony.php?pg=home"> <span class="lua-house"></span> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="projetosony.php?pg=sobre"> <span class="lua-star"></span> Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " href="projetosony.php?pg=car"> <span class="lua-shopping-cart"></span> Carinho de compras</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="lua-product-hunt "></span> Produtos
                        </a>

                        <div class="dropdown-menu bg-white" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item  text-primary " href="projetosony.php?pg=produto2">Controles</a>
                            <a class="dropdown-item text-primary " href="projetosony.php?pg=produto3">Consoles</a>
                            <a class="dropdown-item  text-primary " href="projetosony.php?pg=home">Games</a>
                            <a class="dropdown-item text-primary  " href="projetosony.php?pg=produto2">Acessorios</a>
                            <a class="dropdown-item text-primary " href="projetosony.php?pg=produto3">Headset</a>
                            <a class="dropdown-item text-primary  " href="projetosony.php?pg=home">Cameras</a>
                        </div>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Busque Aqui!" aria-label="Search">
                    <button type="button" class="btn btn-danger">Buscar</button>
                </form>

                <button type="button" class="btn btn-danger mx-3 " data-toggle="modal" data-target="#loginModal">

                    <span class="lua-user 
                "></span>


                </button>
            </div>
        </nav>

        <!-- Pagina de login -->
        <form>
            <div class="modal fade  " id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  " role="document">
                    <div class="modal-content  modal1 ">
                        <div class="modal-header border-bottom-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body  ">
                            <div class="form-title text-center">
                                <h4>Login</h4>
                            </div>
                            <div class="d-flex flex-column text-center">
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" " placeholder=" Seu endereço de Email... ">
                                    </div>
                                    <div class=" form-group ">
                                        <input type=" password " class=" form-control "id="inputPassword " " placeholder="Sua senha... ">
                                    </div>
                                    <button type="submit" class="btn btn-info btn-block btn-round" value="Enviar">Login</button>
                                </form>

                                <div class="text-center text-muted delimiter "> > ou use uma rede social </div>
                                <div class="d-flex justify-content-center social-buttons ">
                                    <button type="button " class="btn btn-secondary rounded-circle " data-toggle="tooltip " data-placement="top " title="Twitter ">
                                        <i class=" lua-google-plus-square "></i>
                                    </button>
                                    <button type="button " class="btn btn-secondary rounded-circle " data-toggle="tooltip " data-placement="top " title="Facebook ">
                                        <i class=" lua-facebook-square "></i>
                                    </button>
                                    <button type="button " class="btn btn-secondary rounded-circle " data-toggle="tooltip " data-placement="top " title="Linkedin ">
                                        <i class=" lua-linkedin-square "></i>
                                    </button>
                                    </di>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center ">
                            <div class="signup-section ">Nao e Membro? <a href="#a " class="text-info "> cadastre-se</a>.</div>
                        </div>
                    </div>
                </div>
        </form>

    </header>