<?php
    if ( isset($_GET['page']) )
    {
        $page = $_GET['page'];
    } else 
    {
        $page = 'inicio';
    }
    require_once('functions.php');
    require_once('header.php');
    
?>
<section id="page">
    <?php
        echo cargarPagina($page);
    ?>
</section>
<?php
    require_once('footer.php');
?>
