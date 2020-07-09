<?php
require_once('template_view/header.php');
require_once('template_view/aside.php');
require_once(dirname(__FILE__, 3) . '/db/Connection.php');

//Setando o array como vazio para iniciailização da pagina.
$msg[0] = '';
$erros['type-manutention'] = '';

if (isset($_POST['save-maintenance'])) {

    if (count($_POST) > 0) {

        $type_manutention = htmlspecialchars($_POST['type-manutention'], ENT_QUOTES);
        $requester_name = htmlspecialchars($_POST['requester-name'], ENT_QUOTES);
        $status = htmlspecialchars($_POST['status'], ENT_QUOTES);
        $sector = htmlspecialchars($_POST['sector'], ENT_QUOTES);
        $occurrence = htmlspecialchars($_POST['occurrence'], ENT_QUOTES);


        if (trim($_POST['type-manutention']) === "") {
            $erros['type-manutention'] = 'Tipo de manutenção é obrigatória';
        }

        $query = "INSERT INTO maintenance (type_manutention, requester_name, status, sector, occurrence)
        VALUES ('$type_manutention', '$requester_name', '$status', '$sector', '$occurrence');";

        $conn = Connection::connectionDB();

        if (pg_query($query)) {
            $msg[0] = '<div class="alert alert-success" role="alert">Cadastrado com sucesso!</div>';
            unset($_POST);
        } else {
            $msg[0] = '<div class="alert alert-danger" role="alert">Manutenção não cadastrada!</div>';
        }

        pg_close();
    }
}

?>
<link rel="stylesheet" href="../assets/css/css_g10/maintenance.css">

<main>
    <div class="content">
        <div class="content-title-main">
            <div class="title-main">
                <i class="icon icofont-settings-alt mr-2"></i>Manutenções gerais
            </div>
        </div>
        <div class="content-form">
            <form action="maintenance.php" method="post">
                <?= $msg[0]; ?>
                <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                        <label for="current-manutention">Tipo de manutenção</label>
                        <input type="text" name="type-manutention" id="current-manutention" placeholder="Digite aqui..." class="form-control" <?= $erros['type-manutention'] ? 'is-invalid' : '' ?> />
                        <div class="invalid-feedback">
                            <?= $erros['type-manutention'] ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="requester-name">Nome do solicitante</label>
                        <input type="text" name="requester-name" id="requester-name" placeholder="Digite aqui..." class="form-control" required />
                        <div class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                        <label for="status">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="selecione" selected>Selecione o status</option>
                            <option value="pendente">Pendente</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sector">Setor</label>
                        <select class="form-control" name="sector" id="sector">
                            <option value="selecione" selected>Selecione o setor da manutenção</option>
                            <option value="setor1">Setor 1</option>
                            <option value="setor2">Setor 2</option>
                            <option value="setor3">Setor 3</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ocorrencia">Ocorrência</label>
                    <textarea class="form-control" name="occurrence" id="occurrence" rows="3" required></textarea>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-row btn-save mt-3">
                    <button class="btn btn-lg btn-primary mt-3" name="save-maintenance">
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