<?php
require_once "../modelo/Cadastro.php";
require_once "../dao/DAO.php";
session_start();
if (isset($_SESSION[""])) {
	if ($_SESSION[""] == "") {
		$cliente = new Cadastro();
		$cliente = new DAO();
		if (isset($_POST["nome"]) && isset($_POST["codigo"]) && isset($_POST("telefone")) && isset($_POST("email"))) {

			$cliente->nome = $_POST["nome"];
			$cliente->codigo = $_POST["codigo"];
			$cliente->telefone = $_POST["telefone"];
			$cliente->email = $_POST["email"];
			$alterou = $dao->alterar("cadastro", $cliente);

			if ($alterou) {
				echo "<script>
	        alert('Alterado com Sucesso');
	        window.open('../index.php?pagina=clientela','_self')</script>";
			}
		}
	}
}
?>