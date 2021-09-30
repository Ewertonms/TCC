<br><br><br><br><br><br><br>
<h1>Nova publicação</h1><br>
<?= form_open('publicacao/salvar') ?>
<label for="publicacao_tipo">Tipo de publicação: <input type="text" name="publicacao_tipo"></label><br>
<button type="submit" class="btn btn-outline-secondary">Enviar</button>
<button type="reset" class="btn btn-outline-secondary">Limpar</button>
</form>
<?= form_close() ?>