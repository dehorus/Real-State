<?php require '../includes/functions.php';

includeTemplate('header');   ?>


    <main class="container">
        <h1>Administrador</h1>

        <div class="buttons-admin">
            <a href="/admin/propiedades/create.php" > <button class="btn btn-positive"> Crear </button>  </a>
            <a href="/admin/propiedades/delete.php" > <button class="btn btn-negative"> Delete </button> </a>
            <a href="/admin/propiedades/update.php" > <button class="btn btn-neutral"> Update</button> </a>
        </div>
    </main>


<?php includeTemplate('footer'); ?>  