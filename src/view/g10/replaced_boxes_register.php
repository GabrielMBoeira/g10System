<?php
require_once('template_view/header.php');
require_once('template_view/aside.php');
require_once(dirname(__FILE__, 3) . '/db/Connection.php');

//Setando o array como vazio para iniciailização da pagina.
$msg[0] = '';
$erros = [];

if (isset($_POST['save-register_boxes'])) {

    if (count($_POST) > 0) {

        $item = htmlspecialchars($_POST['item'], ENT_QUOTES);
        $ticket = htmlspecialchars($_POST['ticket'], ENT_QUOTES);
        $status = 'pendente';

        if (trim($item) === "") {
            $erros['item'] = 'Item é obrigatório';
        }

        if (trim($ticket) === "") {
            $erros['ticket'] = 'Etiqueta é obrigatória';
        }

        if (!count($erros)) {

            $query = "INSERT INTO tickets (item, ticket, status) VALUES ('$item', '$ticket', '$status');";

            $conn = Connection::connectionDB();

            if (pg_query($query)) {
                $msg[0] = '<div class="alert alert-success" role="alert">Cadastrado com sucesso!</div>';
                unset($_POST);
            } else {
                $msg[0] = '<div class="alert alert-danger" role="alert">Etiqueta não cadastrada!</div>';
            }

            pg_close();
        }
    }
}

?>
<link rel="stylesheet" href="../assets/css/css_g10/maintenance.css">

<main>
    <div class="content">
        <div class="content-title-main">
            <div class="title-main">
                <i class="icon icofont-box mr-2"></i>
                Cadastrar substituição (etiqueta)
            </div>
        </div>
        <div class="content-form">
            <form action="register_replaced_boxes.php" method="post">
                <?= $msg[0]; ?>
                <div class="form-row mt-3">
                    <div class="form-group col-md-4">
                        <label>Código do item</label>
                        <input type="text" name="item" placeholder="Digite aqui..." class="form-control <?= $erros['item'] ? 'is-invalid' : '' ?>" value="<?= $_POST['item'] ?? '' ?>" />
                        <div class="invalid-feedback">
                            <?= $erros['item'] ?>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Etiqueta</label>
                        <input type="text" name="ticket" id="" placeholder="Digite aqui..." class="form-control <?= $erros['ticket'] ? 'is-invalid' : '' ?>" value="<?= $_POST['ticket'] ?? '' ?>" />
                        <div class="invalid-feedback">
                            <?= $erros['ticket'] ?>
                        </div>
                    </div>
                </div>
                <div class="form-row btn-save mt-3">
                    <button class="btn btn-primary mt-3" name="save-register_boxes">
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