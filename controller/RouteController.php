<?php
class RouteController{
    function home(){
        include "tree/inicio.php"
    }
    function informacao(){
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