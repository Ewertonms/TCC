<br><br><br><br><br><br><br>
<h1>Cadastro</h1><br>
<?= form_open('tematica/salvar') ?>
<form action="<?= base_url('tematica/salvar') ?>" method="post">
<label for="tematica">Temática: <input type="text" name="tematica"></label><br>
<button type="submit" class="btn btn-outline-secondary">Enviar</button>
<button type="reset" class="btn btn-outline-secondary">Limpar</button>
</form>
<?= form_close() ?>