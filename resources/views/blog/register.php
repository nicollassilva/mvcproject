<?php
$pageTitle = "Registre-se!";
require_once('includes/header.php');
?>
<main class="form-element w-100">
    <form class="form-signin text-center">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Registre-se abaixo</h1>
        <label for="name" class="sr-only">Seu nome</label>
        <input type="text" id="name" class="form-control" placeholder="Seu nome" required autofocus>
        <label for="inputEmail" class="sr-only">Digite seu e-mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Digite seu e-mail" required autofocus>
        <div class="form-group">
            <label for="inputPassword" class="sr-only">Informe sua senha</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Informe sua senha" required>
        </div>

        <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">Entrar</button>
    </form>
</main>