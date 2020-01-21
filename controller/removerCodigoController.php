<?php
require_once "../dao/DAO.php";
if (isset($_GET["id"])) {
	$dao = new DAO();
	$cliente = $dao->buscarCodigo('cadastro', $_GET["codigo"]);
	$dao->excluir('cadastro', $_GET["codigo"]);
	$excluiu = $dao->excluir($cliente["cadastro"]);
	if ($excluiu) {
		echo "<script>alert('Excluido Com Sucesso');
        		window.open('../index.php?pagina=clientela','_self')</script>";
	}

}
?>