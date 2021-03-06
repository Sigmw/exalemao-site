<?php if (in_array($tipo, [1, 2, 4, 5, 6, 9, 10, 11])) : ?>
    <form method="POST" action="<?php echo BASE; ?>relatorios/addRelatorio">
        <?php if ($tipo == 1) : ?>
            <input type="hidden" name="tipo" value="1" />

            <div class="form-group">
                <label for="date-mask2">Data <small class="text-muted">dd/mm/aaaa</small></label>
                <input type="text" class="form-control date-inputmask" id="date-mask2" name="data" value="<?php echo date('d/m/Y'); ?>" readonly />
            </div>

            <div class="form-group">
                <label for="atendente" class="form-label">Pessoa que fez o atendimento</label>
                <input id="atendente" type="text" class="form-control" name="atendente" placeholder="Nickname do atendente..." required value="<?php echo $acesso->getInfo('nickname'); ?>" />
            </div>

            <div class="form-group">
                <label for="responsavel">Oficial que comprova o ato</label>
                <select class="form-control" id="responsavel" name="responsavel" required>
                    <option value="">Escolha um Oficial</option>
                    <?php foreach ($executivos as $executivo) : ?>
                        <option value="<?php echo $executivo['nickname']; ?>"><?php echo $executivo['nickname']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="novato" class="form-label">Novato que foi atendido</label>
                <input id="novato" type="text" class="form-control" name="novato" placeholder="Nickname do novato..." required />
            </div>
        <?php elseif ($tipo == 2) : ?>
            <input type="hidden" name="tipo" value="2" />

            <div class="form-group">
                <label for="date-mask2">Data <small class="text-muted">dd/mm/aaaa</small></label>
                <input type="text" class="form-control date-inputmask" id="date-mask2" name="data" value="<?php echo date('d/m/Y'); ?>" readonly />
            </div>

            <div class="form-group">
                <label for="atendente" class="form-label">Pessoa que est?? fazendo</label>
                <input id="atendente" type="text" class="form-control" name="atendente" placeholder="Nickname do atendente..." required value="<?php echo $acesso->getInfo('nickname'); ?>" />
            </div>

            <div class="form-group">
                <label for="responsavel">Respons??vel por Supervisionar a Ronda</label>
                <select class="form-control" id="responsavel" name="responsavel" required>
                    <option value="">Escolha um Oficial</option>
                    <?php foreach ($executivos as $executivo) : ?>
                        <option value="<?php echo $executivo['nickname']; ?>"><?php echo $executivo['nickname']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="novato" class="form-label">Novato que foi levado ao QG</label>
                <input id="novato" type="text" class="form-control" name="novato" placeholder="Nickname do civil..." required />
            </div>
        <?php elseif ($tipo == 4) : ?>
            <input type="hidden" name="tipo" value="4" />

            <div class="form-group">
                <label for="date-mask2">Data <small class="text-muted">dd/mm/aaaa</small></label>
                <input type="text" class="form-control date-inputmask" id="date-mask2" name="data" value="<?php echo date('d/m/Y'); ?>" readonly />
            </div>

            <div class="form-group">
                <label for="treinamento_tipo">Tipo de Aula</label>
                <select class="form-control" id="treinamento_tipo" name="treinamento_tipo" required>
                    <option value="">Escolha um treino</option>
                    <option value="TFPE">TFPE</option>
                    <option value="TFSA">TFSA</option>
                    <option value="TFCA">TFCA</option>
                    <option value="TFSS">TFSS</option>
                    <option value="TFSG">TFSG</option>
                    <option value="TFTE">TFTE</option>
                </select>
            </div>

            <div class="form-group">
                <label for="atendente" class="form-label">Pessoa que Treinou</label>
                <input id="atendente" type="text" class="form-control" name="atendente" placeholder="Nickname do atendente..." required value="<?php echo $acesso->getInfo('nickname'); ?>" />
            </div>

          

            <div class="nicknames">
                <div class="row" style="align-items:flex-end;">
                    <div class="form-group col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11">
                        <label for="nickname" class="col-form-label">Nickname</label>
                        <input id="nickname" type="text" class="form-control" name="nicksnames[]" placeholder="Nickname do membro..." required />
                    </div>

                    <div class="form-group col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                        <button class="btn btn-outline-success btn-block" type="button" onclick="addInput('nicknames')"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>
        <?php elseif ($tipo == 5) : ?>
            <input type="hidden" name="tipo" value="5" />

            <div class="form-group">
                <label for="date-mask2">Data <small class="text-muted">dd/mm/aaaa</small></label>
                <input type="text" class="form-control date-inputmask" id="date-mask2" name="data" value="<?php echo date('d/m/Y'); ?>" readonly />
            </div>

            <div class="form-group">
                <label for="atendente" class="form-label">Nickname do ajudante</label>
                <input id="atendente" type="text" class="form-control" name="atendente" placeholder="Nickname do ajudante..." required value="<?php echo $acesso->getInfo('nickname'); ?>" />
            </div>

            <div class="form-group">
                <label for="ajudado" class="form-label">Membro ajudado</label>
                <input id="ajudado" type="text" class="form-control" name="ajudado" placeholder="Nickname do membro ajudado..." required />
            </div>

            <div class="form-group">
                <label for="como">Como ajudou?</label>
                <select class="form-control" id="como" name="como" required>
                    <option value="">Escolha um op????o</option>
                    <option value="D??vidas Frequentes (FAQ's)">D??vidas Frequentes (FAQ's)</option>
                    <option value="Tour pelos Quartos do SIHB">Tour pelos Quartos do AL</option>
                    <option value="Entrar no Discord">Entrar no Discord</option>
                </select>
            </div>

            <div class="form-group">
                <label for="onde">Onde ajudou?</label>
                <select class="form-control" id="onde" name="onde" required>
                    <option value="">Escolha um op????o</option>
                    <option value="HelpDesk">HelpDesk</option>
                    <option value="Discord">Discord</option>
                </select>
            </div>
        <?php elseif ($tipo == 6) : ?>
            <input type="hidden" name="tipo" value="6" />

            <div class="form-group">
                <label for="date-mask2">Data <small class="text-muted">dd/mm/aaaa</small></label>
                <input type="text" class="form-control date-inputmask" id="date-mask2" name="data" value="<?php echo date('d/m/Y'); ?>" readonly />
            </div>

            <div class="form-group">
                <label for="nickname" class="form-label">Nickname</label>
                <input id="nickname" type="text" class="form-control" name="nickname" placeholder="Digite seu nickname aqui..." required value="<?php echo $acesso->getInfo('nickname'); ?>" />
            </div>

            <div class="form-group">
                <label for="sugestao" class="form-label">Sugest??o</label>
                <textarea name="sugestao" id="sugestao" class="form-control"></textarea>
            </div>
        <?php elseif ($tipo == 9) : ?>
            <!--<input type="hidden" name="tipo" value="9" />

            <div class="form-group">
                <label for="date-mask2">Data <small class="text-muted">dd/mm/aaaa</small></label>
                <input type="text" class="form-control date-inputmask" id="date-mask2" name="data" value="<?php echo date('d/m/Y'); ?>" readonly />
            </div>

            <div class="form-group">
                <label for="atendente" class="form-label">Nickname do professor</label>
                <input id="atendente" type="text" class="form-control" name="atendente" placeholder="Nickname do professor..." required value="<?php echo $acesso->getInfo('nickname'); ?>" />
            </div>

            <div class="form-group">
                <label for="ajudado" class="form-label">Membro</label>
                <input id="ajudado" type="text" class="form-control" name="ajudado" placeholder="Nickname do(s) membro(s)..." required />
            </div>

            <div class="form-group">
                <label for="como">Curso tipo</label>
                <select class="form-control" id="como" name="como" required>
                    <option value="">Escolha um op????o</option>
                    <option value="Curso de Habbo Etiqueta (CHE)">
                        Curso de Habbo Etiqueta (CHE)
                    </option>
                    <option value="Curso de Proped??utica Jur??dica (CPJ)">
                        Curso de Proped??utica Jur??dica (CPJ)
                    </option>
                    <option value="Curso de Gest??o Operacional (CGP)">
                        Curso de Gest??o Operacional (CGP)
                    </option>
                    <option value="Curso de Refor??o Ortogr??fico (CRO)">
                        Curso de Refor??o Ortogr??fico (CRO)
                    </option>
                    <option value="Curso de Seguran??a Digital (CSD)">
                        Curso de Seguran??a Digital (CSD)
                    </option>
                    <option value="Curso de Finan??as e Remunera????es (CFR)">
                        Curso de Finan??as e Remunera????es (CFR)
                    </option>
                    <option value="Curso de Progress??o no SIHB (CP)">
                        Curso de Progress??o no SIHB (CP)
                    </option>
                    <option value="Programa de Incentivo ao Colaborador (PIC)">
                        Programa de Incentivo ao Colaborador (PIC)
                    </option>
                    <option value="Programa de Gest??o de Carreira (PGC)">
                        Programa de Gest??o de Carreira (PGC)
                    </option>
                </select>
            </div> -->
        <?php elseif ($tipo == 10) : ?>
            <input type="hidden" name="tipo" value="10" />

            <div class="form-group">
                <label for="date-mask2">Data <small class="text-muted">dd/mm/aaaa</small></label>
                <input type="text" class="form-control date-inputmask" id="date-mask2" name="data" value="<?php echo date('d/m/Y'); ?>" readonly />
            </div>

            <div class="form-group">
                <label for="atendente" class="form-label">Nickname do promotor</label>
                <input id="atendente" type="text" class="form-control" name="atendente" placeholder="Nickname do promotor..." required value="<?php echo $acesso->getInfo('nickname'); ?>" />
            </div>

            <div class="nicknames">
                <div class="row" style="align-items:flex-end;">
                    <div class="form-group col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11">
                        <label for="nickname" class="col-form-label">Nickname(s) dos(as) vencedor(es)</label>
                        <input id="nickname" type="text" class="form-control" name="nicksnames[]" placeholder="Nickname do membro..." required />
                    </div>

                    <div class="form-group col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1">
                        <button class="btn btn-outline-success btn-block" type="button" onclick="addInput('nicknames')"><i class="fas fa-plus"></i></button>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="como">Evento tipo</label>
                <input id="como" type="text" class="form-control" name="evento_tipo" placeholder="Digite o tipo do evento" required />
            </div>

            <div class="form-group">
                <label for="premio">Pr??mio</label>
                <input id="premio" type="number" class="form-control" name="premio" placeholder="Pr??mio (Em EUROS)" required />
            </div>
        <?php elseif ($tipo == 11) : ?>
            <input type="hidden" name="tipo" value="11" />

            <div class="form-group">
                <label for="date-mask2">Data <small class="text-muted">dd/mm/aaaa</small></label>
                <input type="text" class="form-control date-inputmask" id="date-mask2" name="data" value="<?php echo date('d/m/Y'); ?>" readonly />
            </div>

            <div class="form-group">
                <label for="atendente" class="form-label">Nickname do redator</label>
                <input id="atendente" type="text" class="form-control" name="atendente" placeholder="Nickname do promotor..." required value="<?php echo $acesso->getInfo('nickname'); ?>" />
            </div>

            <div class="form-group">
                <label for="feedback" class="form-label">Nickname de quem deu feedback</label>
                <input id="feedback" type="text" class="form-control" name="feedback" placeholder="Nickname de quem deu feedback..." required />
            </div>

            <div class="form-group">
                <label for="como">Categoria</label>
                <select class="form-control" id="como" name="como" required>
                    <option value="">Escolha um op????o</option>
                    <option value="Cr??ticas">
                        Cr??ticas
                    </option>
                    <option value="Sugest??es">
                        Sugest??es
                    </option>
                </select>
            </div>
        <?php endif; ?>

        <input type="submit" value="Enviar" class="btn btn-success btn-block" />
    </form>
<?php elseif ($tipo == 3) : ?>
    <h5>Relat??rio de In??cio</h5>
    <form method="POST" action="<?php echo BASE; ?>relatorios/addRelatorio">
        <input type="hidden" name="tipo" value="3" />

        <div class="form-group">
            <label for="date-mask2">Data <small class="text-muted">dd/mm/aaaa</small></label>
            <input type="text" class="form-control date-inputmask" id="date-mask2" name="data" value="<?php echo date('d/m/Y'); ?>" readonly />
        </div>

        <div class="form-group">
            <label for="atendente" class="form-label">Membro realizando a atividade</label>
            <input id="atendente" type="text" class="form-control" name="atendente" placeholder="Nickname do membro realizando a atividae..." required value="<?php echo $acesso->getInfo('nickname'); ?>" />
        </div>

        <div class="form-group">
            <label for="contas" class="form-label">Nickname das contas utilizadas</label>
            <input id="contas" type="text" class="form-control" name="contas" placeholder="Nickname das contas..." required />
        </div>

        <input type="submit" value="Enviar" class="btn btn-success btn-block" />
    </form><br /><br />

    <h5>Relat??rio de T??rmino</h5>
    <form method="POST" action="<?php echo BASE; ?>relatorios/addRelatorio">
        <input type="hidden" name="tipo" value="7" />

        <div class="form-group">
            <label for="date-mask2">Data <small class="text-muted">dd/mm/aaaa</small></label>
            <input type="text" class="form-control date-inputmask" id="date-mask2" name="data" value="<?php echo date('d/m/Y'); ?>" readonly />
        </div>

        <div class="form-group">
            <label for="atendente" class="form-label">Membro realizando a atividade</label>
            <input id="atendente" type="text" class="form-control" name="atendente" placeholder="Nickname do membro realizando a atividade..." required value="<?php echo $acesso->getInfo('nickname'); ?>" />
        </div>

        <div class="form-group">
            <label for="contas" class="form-label">Nickname das contas utilizadas</label>
            <input id="contas" type="text" class="form-control" name="contas" placeholder="Nickname das contas..." required />
        </div>

        <div class="form-group">
            <label for="tempo" class="form-label">Tempo que ficou em Auto-Lota????o</label>
            <input id="tempo" type="text" class="form-control" name="tempo" placeholder="Tempo que ficou em Auto-Lota????o..." required />
        </div>

        <div class="form-group">
            <label for="responsavel">Oficial Respons??vel por Comprovar o Ato</label>
            <select class="form-control" id="responsavel" name="responsavel" required>
                <option value="">Escolha um Oficial</option>
                <?php foreach ($executivos as $executivo) : ?>
                    <option value="<?php echo $executivo['nickname']; ?>"><?php echo $executivo['nickname']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <input type="submit" value="Enviar" class="btn btn-success btn-block" />
    </form>
<?php elseif ($tipo == 8) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Voc?? est?? tentando acessar um relat??rio que n??o tem permiss??o, os Oficiais foram avisados sobre seu ato.
        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">??</span>
        </a>
    </div>
<?php endif; ?>