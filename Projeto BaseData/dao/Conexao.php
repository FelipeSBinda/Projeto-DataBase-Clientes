<?php
class Conexao {
	static function conectar() {
		try {
			$conn = new PDO("mysql:host=localhost;dbname=database", "root", "");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}
?>