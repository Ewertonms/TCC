<br><br><br><br><br><br><br>
<table class="table table-dark table-borderless">
    <tr>
        <th>Documentos</th>
        <th>Visualizar</th>
    </tr>

    <?php foreach ($registros as $r): ?>
        <tr>
            <td><?php echo $r->titulo ?></td>
            <td>
              <button type="button" class="btn btn-info"><a href="<?= base_url('arquivo/detalhes/'.$r->id_documento); ?>">Visualizar</a></button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>