<?php
require_once('template_view/header.php');
require_once('template_view/aside.php');
?>
<link rel="stylesheet" href="../../assets/css/css_g10/delivery_again.css">
<main>
    <div class="content">
        <div class="content-title-main">
            <div class="title-main">
                <i class="icon icofont-delivery-time mr-2"></i>Reentregas
            </div>
        </div>
        <div class="content-button">
            <a class="btn-link mt-5" href="delivery_again_register.php">
                <span>Adicionar Reentrega</span>
            </a>
            <a class="btn-link" href="delivery_again_pending.php">
                <span>Lista de reentregas pendentes</span>
            </a>
            <a class="btn-link" href="delivery_again_consult.php">
                <span>Consultar reentregas</span>
            </a>
        </div>
    </div>
    </div>
</main>

<?php
require_once('template_view/footer.php');
?>