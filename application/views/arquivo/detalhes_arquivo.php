<ul class="detalhes">
    <h1><?= $registro->titulo ?></h1>
    <li>Código do Documento: <?= $registro->id_documento ?></li>
    <li>Titulo do Documento: <?= $registro->titulo ?></li>
    <li>Autor: <?= $registro->autor ?></li>
    <li>Descrição: <?= $registro->descricao ?></li>
    <li>Tipo de Publicação: <?= $registro->tipo_publicacao ?></li>
    <li>Temática: <?= $registro->nometematica ?></li>
    <li>Link do Documento: <br><button type="button" class="btn btn-secondary btn-lg"><a href="<?= base_url($registro->arquivo)?>">Download</a></button></li>
</ul> 
<style>
 .detalhes{margin-top: 100px; text-align: center; list-style-type: none}
</style>