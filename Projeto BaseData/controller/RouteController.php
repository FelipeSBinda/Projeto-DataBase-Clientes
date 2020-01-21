<?php
class RouteController{
    function home(){
        include "index.php"
    }
    function clientes(){
        include "tree/clientela.php"
    }
    function edicao() {
		include "tree/formulario.php";
	}
	function novo() {
		include "tree/formulario.php";
	}
}
?>