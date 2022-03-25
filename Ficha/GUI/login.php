<div class="OutLogin Flex CentroY">
    <div class="Login">
        <form class="Form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class='Input Flex JCSB CentroY'><label for="Id">ID:</label> <input type="text" name="Id" id="Id"></div>
            <div class='Input Flex JCSB CentroY'><label for="Pass">Senha:</label> <input type="password" name="Pass" id="Pass"></div>
            <button type="submit" name="Entrar" class="Botao" id="Entrar">Entrar-></button>
        </form>
    </div>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../Script/validate.php';
    checkForm();
}
