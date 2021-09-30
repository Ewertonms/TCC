<br><br><br><br><br><br><br>
<?php if ($this->session->flashdata("msg")): ?>
<div class="alert alert-success">
    <?= $this->session->flashdata("msg") ?>
</div>
<?php endif; ?>
<button type="button" class="btn btn-secondary btn-lg"><a href="<?= base_url('publicacao/novo') ?>">Novo Tipo de Publicação</a></button>
<table class="table table-dark table-borderless">
    <tr>
        <th>Tipo de Publicação</th>
        <th>Detalhes</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <?php foreach ($registros as $r): ?>
        <tr>
            <td><?php echo $r->tipo_publicacao ?></td>
            <td>
                <button type="button" class="btn btn-info"><a href="<?= base_url('publicacao/detalhes/'.$r->id_publicacao); ?>">Detalhes</a></button>
            </td>
            <td>
                <button type="button" class="btn btn-secondary"><a href="<?= base_url('publicacao/atualizar/'.$r->id_publicacao); ?>">Editar</a></button>
            </td>
            <td>
                <button type="button" class="btn btn-danger"><a href="<?= base_url('publicacao/excluir/'.$r->id_publicacao); ?>">Excluir</a></button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
