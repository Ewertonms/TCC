<br><br><br><br><br><br><br>
<?php if ($this->session->flashdata("msg")): ?>
<div class="alert alert-success">
    <?= $this->session->flashdata("msg") ?>
</div>
<?php endif; ?>
<button type="button" class="btn btn-secondary btn-lg"><a href="<?= base_url('arquivo/novo') ?>">Novo Documento</a></button>
<table class="table table-dark table-borderless">
    <tr>
        <th>Documentos</th>
        <th>Detalhes</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <?php foreach ($registros as $r): ?>
        <tr>
            <td><?php echo $r->titulo ?></td>
            <td>
                <button type="button" class="btn btn-info"><a href="<?= base_url('arquivo/detalhes/'.$r->id_documento); ?>">Detalhes</a></button>
            </td>
            <td>
                <button type="button" class="btn btn-secondary"><a href="<?= base_url('arquivo/atualizar/'.$r->id_documento); ?>">Editar</a></button>
            </td>
            <td>
                <button type="button" class="btn btn-danger"><a href="<?= base_url('arquivo/excluir/'.$r->id_documento); ?>">Excluir</a></button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>