

<?php   


include_once "paginas/includes/header.php";




$_paginas = isset($_GET["pg"]);


if ($_paginas) {
   
    switch ($_GET["pg"]) {
        case 'inicial':
           include_once "paginas/inicial.php";
            break;

        case 'projetos':
           include_once "paginas/projetos.php";
            break;

        case 'tecnologias':
           include_once "paginas/tecnologias.php";
            break;
        
       
    }


} else {
    include_once "paginas/inicial.php";
      }

?>
        