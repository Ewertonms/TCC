<h1>Editar Temática</h1><br>
<p><?php echo $this->session->flashdata('msg');?></p>
<?= form_open('tematica/modificar/'.$registro->id_tematica) ?>
<label for="tematica">Temática: <input type="text" name="tematica" placeholder="<?= $registro->nometematica ?>"></label><br>
<button type="submit" class="btn btn-outline-secondary">Enviar</button>
<button type="reset" class="btn btn-outline-secondary">Limpar</button>
</form>
<?= form_close() ?>