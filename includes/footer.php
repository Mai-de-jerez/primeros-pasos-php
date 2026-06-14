<?php include 'includes/newsletter.php'; ?>
<p>&copy; 2026 Mi Web PHP. Todos los derechos reservados.</p>
<!-- "require_once" imprimirá el contenido de newsletter.php solo una vez aunque 
 se llame varias veces y además pararía la ejecución si no se encuentra el archivo, 
 en este caso como ya está arriba, no lo volverá a incluir -->
<?php require_once 'includes/newsletter.php'; ?> 
<!-- "include_once" imprimirá el contenido de newsletter.php solo una vez aunque 
 se llame varias veces, pero no parará la ejecución si no se encuentra el archivo, 
 en este caso como ya está arriba, no lo volverá a incluir -->
<?php include_once 'includes/newsletter.php'; ?>