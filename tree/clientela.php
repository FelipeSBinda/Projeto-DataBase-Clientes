<?php
session_start();
if (isset($_SESSION[""])) {

	if ($_SESSION[""] == "") {
		?>
            <section class="container" id="tabela">
     <?php
echo "<div class='col-sm'> <a href='?pagina=novo'>";
		include "assets/icons/plus.svg";
		echo "</a>";
		?>
                <div class="row">
                    <div class="col-sm">Cliente</div>
                    <div class="col-sm">informações</div>
                    <div class="col-sm">Ações</div>
                </div>
                    <?php
$dao = new DAO();
		$cadastros = $dao->buscarTodos("cadastro");
		foreach ($cadastros as $cadastro) {
			echo " <div class='row'>";

			echo "<div class='col-sm'>" . $cadastro["nome"] . "</div>";
            echo "<div class='col-sm'>" . $cadastro["telefone"] . "</div>";
            echo "<div class='col-sm'>" . $cadastro["email"] . "</div>";
            echo "<div class='col-sm'>" . $cadastro["foto"] . "</div>";

			echo "<div class='col-sm'> <a href='?pagina=editar&log=" . $cadastro["telefone"] . "'>";
            include "assets/icons/resume.svg";
            echo "<div class='col-sm'> <a href='?pagina=editar&log=" . $cadastro["email"] . "'>";
            include "assets/icons/resume.svg";
            echo "<div class='col-sm'> <a href='?pagina=editar&log=" . $cadastro["foto"] . "'>";
			include "assets/icons/resume.svg";
			echo "</a> <a href='' onclick='confirmacao(" . $cadastro["codigo"] . ",this)'>";
			include "assets/icons/delete2.svg";
			echo "</a> </div></div>";
		}
		?>
                </div>
            </section>
            <?php
}

}

?>
<script type="text/javascript" src="assets/script/script.js"></script>