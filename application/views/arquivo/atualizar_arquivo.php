<div class="text-center">
<h1>Modificar Arquivo</h1>
<p><?= $this->session->flashdata('msg'); ?></p>
<?= form_open_multipart('arquivo/modificar/'.$registro->id_documento) ?>
<br><br><label for="nome_titulo">Titulo do Arquivo: <input type="text" name="nome_titulo" value="<?= $registro->titulo ?>"></label><br><br>
    <label for="nome_autor">Nome do Autor: <input type="text" name="nome_autor" value="<?= $registro->autor ?>"></label><br><br>
    <label for="descricao_arquivo">Descrição do Arquivo: <input type="text" name="descricao_arquivo" value="<?= $registro->descricao ?>"></label><br><br>
    <label for="publicacao">Tipo de publicação: </label>
    <select name="publicacao" id="">
        <option value="">--</option>
    <?php foreach ($Publicacao as $publi): ?>
        <option value="<?= $publi->id_publicacao ?>"><?= $publi->tipo_publicacao ?></option>
    <?php endforeach; ?>
    </select> <br><br>
    <label for="tematica">Temática: </label>
    <select name="tematica" id="">
        <option value="">--</option>
    <?php foreach ($Tematica as $tema): ?>
        <option value="<?= $tema->id_tematica ?>"><?= $tema->nometematica ?></option>
    <?php endforeach; ?>
    </select> <br><br>
    <label for="archive">Arquivo: <input type="file" class="btn btn-outline-secondary" required name="archive"></label><br><br>
    <button type="submit" class="btn btn-outline-secondary">Enviar</button>
    <button type="reset" class="btn btn-outline-secondary">Limpar</button>
<?= form_close() ?>
</div>