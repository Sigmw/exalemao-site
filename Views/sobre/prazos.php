<div style="background: black; margin-top:10px;">
    <div id="radio-pesquisa" class="container pags">
        <!-- DESTAQUE SEMANAL E PESQUISA -->
        <div style="width: 730px;padding:10px;" class="comum">
            <img src="https://i.imgur.com/5uHdpPr.png" alt="separador" style="width: 100%;" />
            <div class="breadcrumb">
                <a href="<?php echo BASE; ?>">Início</a>
                <a href="<?php echo BASE; ?>sobre">Sobre</a>
                <a href="<?php echo BASE; ?>sobre/atos-normativos" class="last">Atos normativos</a>
            </div>

            <h2 class="titulo">Prazos de Promoção</h2>

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
                <li><a href="<?php echo BASE; ?>sobre/historia">História</a></li>
                    <li><a href="<?php echo BASE; ?>sobre/comandantes">Comandantes</a></li>
                    <li><a href="<?php echo BASE; ?>sobre/hierarquia">Hierarquia</a></li>
                    <!--<li><a href="<?php echo BASE; ?>sobre/prazos">Prazos</a></li> -->
                </ul>
            </div>


</div>