<h1>Probando Laravel</h1>

<ul>
    <?php foreach ($personas as $persona) { ?>
        <li><?php echo $persona->nombre; ?>, <?php echo $persona->email; ?></li>
    <?php } ?>
</ul>