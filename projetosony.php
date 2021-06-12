<?php

include_once "paginas/projetosony/includes/header.php";



//PÁGINAS 

$paginas = isset($_GET['pg']);


if ($paginas) {

    switch ($_GET['pg']) {
        case 'home':
            include_once "paginas/projetosony/produto1.php";
            break;
        
            case 'produto2':
                include_once "paginas/projetosony/produto2.php";
                break;
            case 'produto3':
                include_once "paginas/projetosony/produto3.php";
                break;

            

        
        case 'sobre':
            include_once "paginas/projetosony/sobre.php";
            break;

        case 'car':
            include_once "paginas/projetosony/carrinho.php";
            break;
    
        }

} else {
    include_once "paginas/projetosony/produto1.php";
}


include_once  "paginas/projetosony/includes/footer.php";


