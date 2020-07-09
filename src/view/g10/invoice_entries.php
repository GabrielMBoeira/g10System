<?php
    require_once('template_view/header.php');
    require_once('template_view/aside.php');
?>
<main>
    <div class="content">
        <div class="content-title-main">
            <div class="title-main">
                <i class="icon icofont-settings-alt mr-2"></i>Lançamentos/Entradas
            </div>
        </div>
        <div class="content-form">
            <form action="#" method="post">
                <div class="form-row mt-3">
                    <div class="form-group col-md-6">
                        <label for="current-manutention">Tipo de manutenção</label>
                        <input type="text" name="type-manutention" id="current-manutention" placeholder="Digite aqui..." class="form-control" value="" />
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="requester-name">Nome do solicitante</label>
                        <input type="text" name="requester-name" id="requester-name" placeholder="Digite aqui..." class="form-control" value="" />
                        <div class="invalid-feedback"></div>
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
                    <textarea class="form-control" name="occurrence" id="occurrence" rows="3"></textarea>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-row btn-save mt-3">
                    <button class="btn btn-lg btn-primary mt-3">
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