<?php
require_once "../models/Cadastro.php";
require_once "../dao/DAO.php";
session_start();
if (isset($_SESSION[""])) {
	if ($_SESSION[""] == "") {
		$dao = new DAO();
		if (isset($_POST["nome"]) && isset($_POST["codigo"]) && isset($_POST["telefone"]) && isset($_POST["email"]) && isset($_POST["telefone"]) && isset($_POST["foto"])) {
			$al = array(
				array(
					'nome' => $_POST["nome"],
                    'telefone' => $_POST["telefone"],
                    'email' => $_POST["email"],
                    'foto' => $_POST["foto"],
				),
			);
			$dao->inserir("cliente", $codigo);
			$salvou = $dao->inserir("cliente", $codigo);

			if ($salvou) {
				echo "<script>alert('Salvo Com Sucesso');
        		window.open('../index.php?pagina=clientela','_self')</script>";
			}
		}
	}
}
?>