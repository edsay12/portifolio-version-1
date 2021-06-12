<?php

// topo
include_once "paginas/nike/includes/header.php";



//  meio
$paginas = isset($_GET["pg"]);

if ($paginas) {  

switch ($_GET["pg"]) {
    case 'inicial':
        include_once "paginas/nike/inicial.php";
        break;
    
        case 'Produtos':
            include_once "paginas/nike/Produtos.php";
            break;

            case 'sobre':
                include_once "paginas/nike/sobre.php";
                break;

                case "contato";
                include_once "paginas/nike/contato.php";
            break;
    

            case "pagamento";
            include_once "paginas/nike/pagamento.php";
        break;


    } 

 } else {
    include_once "paginas/nike/Produtos.php";
};

 


// final
include_once "paginas/nike/includes/footer.php";

// final tag
