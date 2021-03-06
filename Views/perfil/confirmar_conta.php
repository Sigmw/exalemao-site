<div style="background:linear-gradient(to bottom, transparent 0px, transparent 380px, #FFF 380px, #fff 100%);margin-top:10px;">
    <div id="radio-pesquisa" class="container pags">
        <!-- DESTAQUE SEMANAL E PESQUISA -->
        <div style="width: 730px;padding:10px;" class="comum">
            <img src="https://i.imgur.com/5uHdpPr.png" alt="separador" style="width: 100%;" />
            <div class="breadcrumb">
                <a href="<?php echo BASE; ?>">Início</a>
                <a href="<?php echo BASE; ?>">Login</a>
                <a href="<?php echo BASE; ?>perfil/configuracoes">Configurações</a>
                <a href="<?php echo BASE; ?>perfil/confirmar-conta" class="last">Confirmar Conta</a>
            </div>

            <h2 class="titulo">Confirmar Conta</h2>

            <div style="padding:13px;font-size:13px;display: flex;justify-content: center;align-items: center;flex-direction: column;">
                <p class="text-center mb-10">Cole o código abaixo em sua missão no habbo, deixando somente ele igual ao print de exemplo e depois clique no botão confirmar. <strong style="color: #F9DF93;">(Note que é necessário fazer igual ao exemplo e não usar os números do mesmo)</strong></p>

                <img src="https://i.imgur.com/Modeq7w.png" alt="Exemplo" class="mb-10">

                <form action="<?php echo BASE; ?>form/confirmarConta" method="POST" />
                <?php $codigo = 'EXAL-' . rand(1000, 9999); ?>
                <label onclick="copiarText()" id="codigo-text-label" class="tooltipped" data-toggle="tooltip" data-position="bottom" data-tooltip="Clique para copiar"><?php echo $codigo; ?></label>

                <input type="text" name="codigo" value="<?php echo $codigo; ?>" id="codigo_confirmacao" style="opacity: 0;">

                <button class="btn btn-block" style="width:185px;font-weight:bold;background:#1d9200;outline:0;">
                    Confirmar conta
                </button>
                </form>
            </div>
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
                <h4>MEU MENU</h4>

                <ul>
                    <li><a href="<?php echo BASE; ?>profile/<?php echo $acesso->getInfo('nickname'); ?>">Meu Perfil</a></li>
                    <li class="active"><a href="<?php echo BASE; ?>perfil/configuracoes">Configurações</a></li>
                    <li><a href="<?php echo BASE; ?>perfil/configuracoes-perfil">Configurações do Perfil</a></li>
                </ul>
            </div>
        </div>
        <!-- ./RÁDIO, NAVEGAÇÃO RÁPIDA E LINKS -->
    </div>


</div>