<div class="card">
    <h5 class="card-header">Editar registro de <?php echo $registro['nickname']; ?></h5>
    <div class="card-body">
        <form method="POST" action="<?php echo BASE; ?>registros/editRegistro/<?php echo $registro['id']; ?>">
            <input type="hidden" name="id_registro" value="<?php echo $registro['id']; ?>" />

            <div class="form-group">
                <label for="date-mask2">Data ultima promoção <small class="text-muted">dd/mm/aaaa (deixe em branco caso queira automatico)</small></label>
                <input type="text" class="form-control date-inputmask" id="date-mask2" name="data_ultima_promocao" value="<?php echo date('d/m/Y', strtotime($registro['ultima_promocao'])); ?>">
            </div>            

            <div class="form-group">
                <label for="responsavel">Oficial responsável</label>
                <select class="form-control" id="responsavel" name="responsavel">
                    <option value="">Escolha um responsável</option>
                    <?php foreach ($executivos as $executivo) : ?>
                        <option value="<?php echo $executivo['nickname']; ?>" <?php echo($registro['promovido_por'] == $executivo['nickname'])?'selected':''; ?>><?php echo $executivo['nickname']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="nickname" class="col-form-label">Nickname</label>
                <input id="nickname" type="text" class="form-control" name="nickname" placeholder="Nickname do membro..." value="<?php echo $registro['nickname']; ?>" />
            </div>

            <div class="form-group">
                <label for="cargo">Cargo</label>
                <select class="form-control" id="cargo" name="cargo">
                    <option value="">Escolha um cargo</option>
                    <?php foreach ($patentes as $patente) : ?>
                        <?php if ($acesso->podePromover($patente['id'], $acesso->getInfo('patente'))) : ?>
                            <option value="<?php echo $patente['id']; ?>" <?php echo($registro['patente_id'] == $patente['id'])?'selected':''; ?> ><?php echo $patente['nome']; ?><?php if($patente['executivo'] != "")  {
                            echo "/".$patente['executivo'];
                            }
                            ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
 <div class="form-group">
               
            </div>


            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="">Escolha um status</option>
                    <option value="1" <?php echo($registro['status_id'] == 1)?'selected':''; ?>>Ativo</option>
                    <option value="2" <?php echo($registro['status_id'] == 2)?'selected':''; ?>>Demitido</option>
                    <?php if ($acesso->getInfo('patente') <= 7) : ?>
                        <option value="3" <?php echo($registro['status_id'] == 3)?'selected':''; ?>>Aposentado</option>
                        <option value="4" <?php echo($registro['status_id'] == 4)?'selected':''; ?>>Conselheiro</option>
                        <option value="5" <?php echo($registro['status_id'] == 5)?'selected':''; ?>>Reservista</option>
                    <?php endif; ?>

                </select>
            </div>


<?php if ($acesso->getInfo('patente') <= 7) : ?>
            <div class="form-group">
                <label for="moedas">Euros</label>
                </div>
                
                <div class="form-group">
                      <input class="form-control" id="moedas" type="number" name="moedas" placeholder="Insira uma quantidade de euros" value="<?php echo $registro['moedas']; ?>"/>
                </div>
              
            <?php endif; ?>


            <button class="btn btn-outline-success btn-block">Atualizar</button>
        </form>
    </div>
</div>