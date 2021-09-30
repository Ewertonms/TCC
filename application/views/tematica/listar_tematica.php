<br><br><br><br><br><br><br>
<?php if ($this->session->flashdata("msg")): ?>
<div class="alert alert-success">
    <?= $this->session->flashdata("msg") ?>
</div>
<?php endif; ?>
<button type="button" class="btn btn-secondary btn-lg"><a href="<?= base_url('tematica/novo') ?>">Nova Temática</a></button>
<table class="table table-dark table-borderless">
    <tr>
        <th>Temática</th>
        <th>Detalhes</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <?php foreach ($tematicas_registradas as $tr): ?>
        <tr>
            <td><?php echo $tr->nometematica ?></td>
            <td>
                <button type="button" class="btn btn-info"><a href="<?= base_url('tematica/detalhes/'.$tr->id_tematica); ?>">Detalhes</a></button>
            </td>
            <td>
                <button type="button" class="btn btn-secondary"><a href="<?= base_url('tematica/atualizar/'.$tr->id_tematica); ?>">Editar</a></button>
            </td>
            <td>
                <button type="button" class="btn btn-danger"><a href="<?= base_url('tematica/excluir/'.$tr->id_tematica); ?>">Excluir</a></button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>