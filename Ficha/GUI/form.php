<main>
    <div class="OutLogin Flex Centro">
        <div class="Login Flex CentroY">
            <form class="Form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <?php if (isset($_SESSION['Login'])&&$_SESSION['Login']=='erro') echo "<h6>ERRO AO LOGAR! TENTE NOVAMENTE</h6> "; ?>
                <div class='Input'><label for="Id"><i class="fa-solid fa-user"> :</i></label> <input type="text" name="Id" id="Id"></div>
                <div class='Input'><label for="Pass"><i class="fa-solid fa-key">:</i></label> <input type="password" name="Pass" id="Pass"></div>
                <button type="submit" name="Entrar" class="Botao" id="Entrar">Entrar-></button>
            </form>
        </div>
    </div>
</main>
