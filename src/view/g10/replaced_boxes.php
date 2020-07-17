<?php
require_once('template_view/header.php');
require_once('template_view/aside.php');
?>
<link rel="stylesheet" href="../../assets/css/css_g10/replaced_boxes.css">
<main>
    <div class="content">
        <div class="content-title-main">
            <div class="title-main">
                <i class="icon icofont-box mr-2"></i>Caixas Substituídas
            </div>
        </div>
        <div class="dashboard">
            <span>Caixas pendentes para baixa: 5</span>
        </div>
        <div class="content-button">
            <a class="btn-link " href="replaced_boxes_register.php">
                <span>Adicionar etiqueta substituida</span>
            </a>
            <a class="btn-link" href="#">
                <span>Lista de etiquetas pendentes</span>
            </a>
        </div>
    </div>
</main>

<?php
require_once('template_view/footer.php');
?>