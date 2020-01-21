<?php
require_once "Conexao.php";
class DAO {

	public $conn;

	public function __construct() {
		$this->conn = Conexao::conectar();
	}

	function inserir($tabela, $listaObjetos) {
		$tuplas = array();
		$toBind = array();
		$colunas = array_keys($listaObjetos[0]);
		foreach ($listaObjetos as $indice => $linha) {
			$parametros = array();
			foreach ($linha as $coluna => $valor) {
				$parametro = ":" . $coluna . $indice;
				$parametros[] = $parametro;
				$toBind[$parametro] = $valor;
			}
			$tuplas[] = "(" . implode(", ", $parametros) . ")";
		}
		$sql = "INSERT INTO `$tabela` (" . implode(", ", $colunas) . ") VALUES " . implode(", ", $tuplas);
		$stmt = $this->conn->prepare($sql);

		foreach ($toBind as $parametro => $valor) {
			$stmt->bindValue($parametro, $valor);
		}
		return $stmt->execute();
	}
    function buscarTodos($tabela) {
		$sql = "select codigo,nome,email,telefone,foto,criacao from $tabela";
		try {
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $lista;
		} catch (Exception $e) {
			echo "Erro ao listar";
		}
    }
    function buscarCodigo($codigo) {
		$sql = "select codigo,nome,email,telefone from usuario where codigo = :codigo ";
		try {

			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(":codigo", $codigo);
			$stmt->execute();
			$nome = $stmt->fetch(PDO::FETCH_ASSOC);
			return $nome;
		} catch (Exception $e) {
			echo "Erro ao consultar" . $e->getMessage();
		}
	function alterar($tabela, $nome) {
		$sql = "update $tabela set nome = :nome where codigo = :codigo ";
		try {

			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(":nome", $cadastro->nome);
			$stmt->bindValue(":codigo", $cadastro->codigo);
			return $stmt->execute();

		} catch (Exception $e) {
			echo "Erro ao Editar" . $e->getMessage();
		}
    }
    function alterarContato($tabela, $telefone) {
		$sql = "update $tabela set telefone = :telefone where codigo = :codigo ";
		try {

			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(":telefone", $cadastro->telefone);
			$stmt->bindValue(":codigo", $cadastro->codigo);
			return $stmt->execute();

		} catch (Exception $e) {
			echo "Erro ao Editar" . $e->getMessage();
		}
    }
    function alterarEmail($tabela, $email) {
		$sql = "update $tabela set email = :email where codigo = :codigo ";
		try {

			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(":email", $cadastro->email);
			$stmt->bindValue(":codigo", $cadastro->codigo);
			return $stmt->execute();

		} catch (Exception $e) {
			echo "Erro ao Editar" . $e->getMessage();
		}
	}
	function excluir($tabela, $codigo) {
		$sql = "delete from $tabela where codigo = :codigo ";
		try {

			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(":codigo", $codigo);
			return $stmt->execute();

		} catch (Exception $e) {
			echo "Erro ao Excluir" . $e->getMessage();
		}
	}
?>
