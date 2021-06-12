<?php
// topo
include_once "paginas/curriculo/includes/header.php";


$curriculo= isset($_GET["cr"]);

if ($curriculo) {

switch ($_GET["cr"]) {
    case 'curriculo':
       include_once "paginas/curriculo/curriculo.php"  ;
      
        break;

        case 'rule':
            include_once "paginas/curriculo/qualificacoes.php";
            
             break;
        

             case 'portifolio':
                include_once "paginas/curriculo/portifolio.php";
               
                 break;
            

        
}

}


else {
 
 
    include_once "paginas/curriculo/none.php";
}


include_once "paginas/curriculo/includes/foot.php";