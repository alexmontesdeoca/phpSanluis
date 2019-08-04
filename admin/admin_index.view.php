<?php require'../secciones/array.php';?>



<div class="contenedor">
    <h2>Panel de control</h2>
   <?php  foreach ($posts as $posts => $value) :?>
<div class="post">
<article>
<h2 class="titulo"></h2>
<a href="#">Editar<a>
<a href="#">Ver<a>
<a href="#">Borrar<a>
</article>
</div>

 <?php endforeach  ?>