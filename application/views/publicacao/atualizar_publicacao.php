<h1>Editar Publicação</h1><br>
<p><?php echo $this->session->flashdata('msg');?></p>
<?= form_open('publicacao/modificar/'.$registro->id_publicacao) ?>
<label for="publicacao_tipo">Tipo de Publicação: <input type="text" name="publicacao_tipo" placeholder="<?= $registro->tipo_publicacao ?>"></label><br>
<button type="submit" class="btn btn-outline-secondary">Enviar</button>
<button type="reset" class="btn btn-outline-secondary">Limpar</button>
</form>
<?= form_close() ?>