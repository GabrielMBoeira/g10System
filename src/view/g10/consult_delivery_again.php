<?php
require_once('template_view/header.php');
require_once('template_view/aside.php');
require_once(dirname(__FILE__, 3) . '/db/Connection.php');

//Setando o array como vazio para iniciailização da pagina.
$msg[0] = '';
$erros = [];

if (isset($_POST['save-delivery-again'])) {

    // if (count($_POST) > 0) {

    //     $status = 'ativa';
    //     $receiving_vehicle = htmlspecialchars($_POST['receiving_vehicle'], ENT_QUOTES);
    //     $boarding_vehicle = 'vazio';
    //     $driver = htmlspecialchars($_POST['driver'], ENT_QUOTES);
    //     $nfs = htmlspecialchars($_POST['nfs'], ENT_QUOTES);
    //     $local = htmlspecialchars($_POST['local'], ENT_QUOTES);
    //     $occurrence = htmlspecialchars($_POST['occurrence'], ENT_QUOTES);


    //     if (trim($_POST['receiving_vehicle']) === "") {
    //         $erros['receiving_vehicle'] = 'Placa do veículo é obrigatória';
    //     }

    //     if (trim($_POST['driver']) === "") {
    //         $erros['driver'] = 'Motorista é obrigatório';
    //     }

    //     if (trim($_POST['nfs']) === "") {
    //         $erros['nfs'] = 'Informe as notas fiscais';
    //     }

    //     if (trim($_POST['local']) === "") {
    //         $erros['local'] = 'Informe o local de armazenagem';
    //     }

    //     if (!count($erros)) {

    //         $query = "INSERT INTO deliver_again (receiving_vehicle, boarding_vehicle, driver, occurrence, local, num_nf, status)
    //         VALUES ('$receiving_vehicle', '$boarding_vehicle', '$driver', '$occurrence', '$local', '$nfs', '$status');";

    //         $conn = Connection::connectionDB();

    //         if (pg_query($query)) {
    //             $msg[0] = '<div class="alert alert-success" role="alert">Cadastrado com sucesso!</div>';
    //             unset($_POST);
    //         } else {
    //             $msg[0] = '<div class="alert alert-danger" role="alert">Reentrega não cadastrada!</div>';
    //         }

    //         pg_close();
    //     }
    // }
}

?>
<link rel="stylesheet" href="../assets/css/css_g10/consult_delivery_again.css">
<main>
    <div class="content">
        <div class="content-title-main">
            <div class="title-main">
                <i class="icon icofont-delivery-time mr-2"></i>Consultar Reentregas
            </div>
        </div>
        <div class="container-fluid mt-2">
            <div class="col div-content">
                <div class="row">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                </div>
                <div class="row mt-2">
                    <div class="form-group">
                        <label for="">Data Inicial</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group ml-2">
                        <label for="">Data Final</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<?php
require_once('template_view/footer.php');
?>