<div style="background:linear-gradient(to bottom, transparent 0px, transparent 500px, #FFF 500px, #fff 100%);margin-top:10px;">
    <div id="radio-pesquisa" class="container pags">
        <!-- DESTAQUE SEMANAL E PESQUISA -->
        <div style="width: 730px;padding:10px;" class="comum">
            <img src="https://i.imgur.com/5uHdpPr.png" alt="separador" style="width: 100%;" />
            <div class="breadcrumb">
                <a href="<?php echo BASE; ?>">Início</a>
                <a href="<?php echo BASE; ?>servicos-externos">Serviços Externos</a>
                <a href="<?php echo BASE; ?>servicos-externos/operacoes" class="last">Operações</a>
            </div>

            <h2 class="titulo">Operações</h2>

            <div style="padding:13px;font-size:13px;"><?php echo $texto['texto']; ?></div>
        </div>
        <!-- ./DESTAQUE SEMANAL E PESQUISA -->

        <!-- RÁDIO, NAVEGAÇÃO RÁPIDA E LINKS -->
        <div class="radio-buttons">
            <div class="radio">
                <div class="locucao">
                    <p>BOT <span style="color: yellow;">com</span> Programação normal</p>
                    <status style="color: yellow;">NO AR</status>
                </div>
                <div class="botoes">
                    <button class="btn"><i class="fa fa-play"></i></button>
                    <button class="btn"><i class="fa fa-pause"></i></button>
                    <div class="volume">
                          <i class="fa fa-volume-up" style="color: yellow;"></i>
                    <div class="range" style="background: yellow;">
                        <input style="color: yellow;" type="range" min="0" max="100" value="1">
                    </div>
                    </div>
                </div>
            </div>

            <div class="relacionadas mt-10">
                <h4>PÁGINAS RELACIONADAS</h4>

                <ul>
                    <!-- <li><a href="<?php echo BASE; ?>servicos-externos/operacoes">Operações</a></li> -->
                    <li><a href="<?php echo BASE; ?>servicos-externos/atendimento-de-ocorrencias">Atendimento de Ocorrências</a></li>
                    <li><a href="<?php echo BASE; ?>servicos-externos/conquistas">Conquistas</a></li>
                </ul>
            </div>

            <a href="<?php echo BASE; ?>cursos" class="btn-block" id="adicionais">
                <span>Consulte também</span>
                <strong>CURSOS</strong>
                <span>ADICIONAIS </span>
            </a>

            <a href="<?php echo BASE; ?>apostilas/blacklist" class="btn-block" id="blist">
                <span>Consulte também</span>
                <strong>
                    BLACK <span>LIST</span>
                </strong>

            </a>

        </div>
        <!-- ./RÁDIO, NAVEGAÇÃO RÁPIDA E LINKS -->
    </div>

    <div class="mt-30 container pb-30 veja-tambem">
            <h3>
                <strong>VEJA</strong>
                TAMBÉM
            </h3>

            <a style="background: black; color: beige;" href="<?php echo BASE; ?>apostilas/hb-etiqueta" id="etiqueta">
                <strong>HABBO</strong>
                ETIQUETA
            </a>

            <a style="background: black; color: black;" href="<?php echo BASE; ?>noticias" id="sihb">
                <strong style="background: black; color: beige;">VER</strong>
                <span style="background: black; color: beige;">NOTÍCIAS</span>
            </a>

            <a style="background: black; color: beige;" href="<?php echo BASE; ?>apostilas/discord" id="discord">
                <strong>DISCORD</strong>
                TUTORIAL
            </a>

        </div>

</div>