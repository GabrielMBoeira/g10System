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
        <div class="content-boxes">
            <div class="box card">
                <div class="card-header d-flex justify-content-center">Cadastrar substituição</div>
                <figure class="background-box">
                    <img class="image-box" src="../assets/images/image-box.jpg" alt="boxes">
                    <div class="content-center-box">
                        <a class="btn btn-primary btn-sm" href="register_replaced_boxes.php">Acessar</a>
                    </div>
                </figure>
            </div>
            <div class="box card">
                <div class="card-header d-flex justify-content-center">Etiquetas pendentes</div>
                <figure class="background-box">
                    <img class="image-box" src="../assets/images/image-box.jpg" alt="boxes">
                    <div class="content-center-box">
                        <a class="btn btn-primary btn-sm" href="#">Acessar</a>
                    </div>
                </figure>
            </div>
            <div class="box card">
                <div class="card-header d-flex justify-content-center">Consultas</div>
                <figure class="background-box">
                    <img class="image-box" src="../assets/images/image-box.jpg" alt="boxes">
                    <div class="content-center-box">
                        <a class="btn btn-primary btn-sm" href="#">Acessar</a>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</main>

<?php
require_once('template_view/footer.php');
?>