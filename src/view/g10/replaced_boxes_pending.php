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
<link rel="stylesheet" href="../assets/css/css_g10/replaced_boxes_pending.css">
<main>
    <div class="content">
        <div class="content-title-main">
            <div class="title-main">
                <i class="icon icofont-box mr-2"></i>Lista de etiquetas pendentes
            </div>
        </div>
        <div class="container-fluid mt-2">
            <div class="delivery">
            <div class="delivery-item">
                    <div class="header-item">
                        <div>
                            <i class="icon icofont-box m-2"></i>
                            Etiqueta: 1231564546897879465464
                        </div>
                        <div>
                            <a class="btn btn-primary btn-sm ml-2" href="#"><i class="icofont-ui-edit"></i></a>
                            <a class="btn btn-danger btn-sm ml-2" href="#"><i class="icofont-trash"></i></a>
                        </div>
                    </div>
                    <div class="body-item">
                        <span>Item: 123456</span>
                        <span class="ml-3">Placa: MMC1234</span>
                        <div>Observação: Testando a observação do item</div>
                    </div>
                    <div class="footer-item">
                        <span>Usuario: Gabriel Machado Boeira</span>
                        <span>Horário do registro: 12/04/2020 10:00:00</span>
                    </div>
                </div>
                <div class="delivery-item">
                    <div class="header-item">
                        <div>
                            <i class="icon icofont-truck m-2"></i>
                            Placa:MMC1234
                        </div>
                        <div>
                            <a class="btn btn-primary btn-sm ml-2" href="#"><i class="icofont-ui-edit"></i></a>
                            <a class="btn btn-danger btn-sm ml-2" href="#"><i class="icofont-trash"></i></a>
                        </div>
                    </div> 
                    <div class="body-item">
                        <span>Notas Fiscais: 2312132, 6546546, 654645, 6546465, 65464564</span>
                        <div>Local de armazenagem: Localizado na rua 3 andar 4</div>
                    </div>
                    <div class="footer-item">
                        <span>Motorista: Gabriel Machado Boeira</span>
                        <span>Horário do registro: 12/04/2020 10:00:00</span>
                    </div>
                </div>
                <div class="delivery-item">
                    <div class="header-item">
                        <div>
                            <i class="icon icofont-truck m-2"></i>
                            Placa:MMC1234
                        </div>
                        <div>
                            <a class="btn btn-primary btn-sm ml-2" href="#"><i class="icofont-ui-edit"></i></a>
                            <a class="btn btn-danger btn-sm ml-2" href="#"><i class="icofont-trash"></i></a>
                        </div>
                    </div>
                    <div class="body-item">
                        <span>Notas Fiscais: 2312132, 6546546, 654645, 6546465, 65464564</span>
                        <div>Local de armazenagem: Localizado na rua 3 andar 4</div>
                    </div>
                    <div class="footer-item">
                        <span>Motorista: Gabriel Machado Boeira</span>
                        <span>Horário do registro: 12/04/2020 10:00:00</span>
                    </div>
                </div>
                <div class="delivery-item">
                    <div class="header-item">
                        <div>
                            <i class="icon icofont-truck m-2"></i>
                            Placa:MMC1234
                        </div>
                        <div>
                            <a class="btn btn-primary btn-sm ml-2" href="#"><i class="icofont-ui-edit"></i></a>
                            <a class="btn btn-danger btn-sm ml-2" href="#"><i class="icofont-trash"></i></a>
                        </div>
                    </div>
                    <div class="body-item">
                        <span>Notas Fiscais: 2312132, 6546546, 654645, 6546465, 65464564</span>
                        <div>Local de armazenagem: Localizado na rua 3 andar 4</div>
                    </div>
                    <div class="footer-item">
                        <span>Motorista: Gabriel Machado Boeira</span>
                        <span>Horário do registro: 12/04/2020 10:00:00</span>
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