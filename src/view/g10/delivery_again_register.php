<?php
require_once('template_view/header.php');
require_once('template_view/aside.php');
require_once(dirname(__FILE__, 3) . '/db/Connection.php');

//Setando o array como vazio para iniciailização da pagina.
$msg[0] = '';
$erros = [];

if (isset($_POST['save-delivery-again'])) {

    if (count($_POST) > 0) {

        $status = 'ativa';
        $receiving_vehicle = htmlspecialchars($_POST['receiving_vehicle'], ENT_QUOTES);
        $boarding_vehicle = 'vazio';
        $driver = htmlspecialchars($_POST['driver'], ENT_QUOTES);
        $nfs = htmlspecialchars($_POST['nfs'], ENT_QUOTES);
        $local = htmlspecialchars($_POST['local'], ENT_QUOTES);
        $occurrence = htmlspecialchars($_POST['occurrence'], ENT_QUOTES);


        if (trim($_POST['receiving_vehicle']) === "") {
            $erros['receiving_vehicle'] = 'Placa do veículo é obrigatória';
        }

        if (trim($_POST['driver']) === "") {
            $erros['driver'] = 'Motorista é obrigatório';
        }

        if (trim($_POST['nfs']) === "") {
            $erros['nfs'] = 'Informe as notas fiscais';
        }

        if (trim($_POST['local']) === "") {
            $erros['local'] = 'Informe o local de armazenagem';
        }

        if (!count($erros)) {

            $query = "INSERT INTO deliver_again (receiving_vehicle, boarding_vehicle, driver, occurrence, local, num_nf, status)
            VALUES ('$receiving_vehicle', '$boarding_vehicle', '$driver', '$occurrence', '$local', '$nfs', '$status');";

            $conn = Connection::connectionDB();

            if (pg_query($query)) {
                $msg[0] = '<div class="alert alert-success" role="alert">Cadastrado com sucesso!</div>';
                unset($_POST);
            } else {
                $msg[0] = '<div class="alert alert-danger" role="alert">Reentrega não cadastrada!</div>';
            }

            pg_close();
        }
    }
}

?>
<main>
    <div class="content">
        <div class="content-title-main">
            <div class="title-main">
                <i class="icon icofont-delivery-time mr-2"></i>Cadastrar Reentregas
            </div>
        </div>
        <div class="content-form">
            <?= $msg[0] ?>
            <form action="delivery_again_register.php" method="post">
                <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                        <label for="current-manutention">Placa do veículo</label>
                        <input type="text" name="receiving_vehicle" id="current-manutention" placeholder="Digite aqui..." 
                        class="form-control <?= $erros['receiving_vehicle'] ? 'is-invalid' : '' ?>" 
                        value="<?=$_POST['receiving_vehicle'] ?? ''?>" />
                        <div class="invalid-feedback">
                            <?= $erros['receiving_vehicle'] ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="driver">Motorista</label>
                        <input type="text" name="driver" id="driver" placeholder="Digite aqui..." class="form-control <?= $erros['driver'] ? 'is-invalid' : '' ?>" value="<?=$_POST['driver'] ?? ''?>"/>
                        <div class="invalid-feedback">
                            <?= $erros['driver'] ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nfs">Notas Fiscais</label>
                    <textarea class="form-control <?= $erros['nfs'] ? 'is-invalid' : '' ?>" name="nfs" rows="1"><?=$_POST['nfs'] ?? ''?></textarea>
                    <div class="invalid-feedback">
                        <?= $erros['nfs'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="local">Local de armazenagem</label>
                    <textarea class="form-control <?= $erros['local'] ? 'is-invalid' : '' ?>" name="local" rows="1"><?=$_POST['local'] ?? ''?></textarea>
                    <div class="invalid-feedback">
                        <?= $erros['local'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ocorrencia">Ocorrência</label>
                    <textarea class="form-control <?= $erros['occurrence'] ? 'is-invalid' : '' ?>" name="occurrence" id="occurrence" rows="3"></textarea>
                    <div class="invalid-feedback">
                        <?= $erros['occurrence'] ?>
                    </div>
                </div>
                <div class="form-row btn-save mt-3">
                    <button class="btn btn-primary mt-3" name="save-delivery-again">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
require_once('template_view/footer.php');
?>