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
        <div class="content-boxes">
            <div class="box card">
                <div class="card-header d-flex justify-content-center">Cadastrar</div>
                <figure class="background-box">
                    <img class="image-box" src="../assets/images/truck-edit.jpg" alt="truck">
                    <div class="content-center-box">
                        <a class="btn btn-primary btn-sm" href="register_delivery_again.php">Acessar</a>
                    </div>
                </figure>
            </div>
            <div class="box card">
                <div class="card-header d-flex justify-content-center">Expedir</div>
                <figure class="background-box">
                    <img class="image-box" src="../assets/images/truck-edit.jpg" alt="truck">
                    <div class="content-center-box">
                        <a class="btn btn-primary btn-sm" href="#">Acessar</a>
                    </div>
                </figure>
            </div>
            <div class="box card">
                <div class="card-header d-flex justify-content-center">Consultar</div>
                <figure class="background-box">
                    <img class="image-box" src="../assets/images/truck-edit.jpg" alt="truck">
                    <div class="content-center-box">
                        <a class="btn btn-primary btn-sm" href="consult_delivery_again.php">Acessar</a>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</main>

<?php
require_once('template_view/footer.php');
?>