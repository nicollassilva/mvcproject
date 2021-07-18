<?php
$pageTitle = "Registre-se!";
require_once('includes/header.php');
?>
<main class="form-element w-100">
    <form action="<?= route('users.store') ?>" method="post" class="form-signin text-center">
        <?php require_once('layouts/alerts.php'); ?>
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Registre-se abaixo</h1>
        <div class="form-group">
            <label for="name" class="sr-only">Seu nome</label>
            <input type="text" id="name" name="name" class="form-control start" placeholder="Seu nome" autofocus>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="sr-only">Digite seu e-mail</label>
            <input type="email" id="inputEmail" name="email" class="form-control rounded-0" placeholder="Digite seu e-mail">
        </div>
        <div class="form-group">
            <label for="inputPassword" class="sr-only">Informe sua senha</label>
            <input type="password" id="inputPassword" name="password" class="form-control rounded-0" placeholder="Informe sua senha">
        </div>
        <div class="form-group">
            <label for="inputCPassword" class="sr-only">Confirme sua senha</label>
            <input type="password" id="inputCPassword" name="cpassword" class="form-control end" placeholder="Confirme sua senha">
        </div>

        <button class="btn btn-lg btn-success btn-block mt-2" type="submit">Registrar</button>
    </form>
</main>