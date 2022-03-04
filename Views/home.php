<div id="radio-pesquisa" class="container">
    <!-- DESTAQUE SEMANAL E PESQUISA -->
    <div class="destaque-semana-pesquisa">
        <img src="https://i.imgur.com/5uHdpPr.png" alt="separador" style="width:100%;" />
        <div id="marquee">
            <img src="https://i.imgur.com/9K7gohg.png" alt="alerta" />
            <marquee width="690" onmouseover="this.stop();" onmouseout="this.start()">
                <strong>(AL INFO):</strong>
               Seja muito bem-vindo ao site oficial do Exército Alemão!
            </marquee>
        </div>

        <div class="d-flex mt-10 dd1">
            <div>
                <div id="destaque">
                    <div class="p-10 d-flex space-between d-column h-65">
                        <h3 style="font-family:'Poppins', sans-serif;color:#661900;">DESTAQUE SEMANAL</h3>

                        <p class="text-end">
                           <a style="color: white;" href="profile/<?php echo $destaque['nickname']; ?>"> <?php echo $destaque['nickname']; ?></a>
                            <?php if ($destaque['vip'] == 1) : ?>
                                <img src="https://i.imgur.com/1DBSVgG.png" alt="vip" style="margin-bottom:-5px;" />
                            <?php endif; ?>
                        </p>
                    </div>
                    <div style="background:url(https://i.imgur.com/3Z0QKsN.png);line-height: 25px;" class="pr-10 h-25">
                        <p style="font-size:12px;font-weight:bold;color:#FFDC73;" class="text-end"><?php echo $destaque['patente']; ?></p>
                    </div>

                    <div class="d-flex h-70" style="position:relative;align-items:flex-end;">
                        <div style="margin-bottom:-3px;">
                            <img src="https://habbo.com.br/habbo-imaging/avatarimage?user=<?php echo $destaque['nickname']; ?>&action=std&direction=2&head_direction=3&gesture=sml&size=m" alt="avatar habbo" style="position:absolute;bottom:15px;left: -5px;" />
                            <img src="https://i.imgur.com/DJeU6zT.png" alt="palanque habbo" />
                        </div>

                        <div class="d-flex align-center h-70 pr-10" style="flex-wrap:wrap;position:absolute;right:0;width:200px;justify-content:flex-end;">
                            <?php foreach (explode(';', $destaque['qualidades']) as $qualidade) : ?>
                                <caracteristica>• <?php echo ucfirst($qualidade); ?></caracteristica>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <a href="<?php echo BASE; ?>melhores-da-semana" class="btn-block mt-10 h-91 melhores-semana"></a>
            </div>
            <div id="busca-registro" class="ml-10">
                <div class="mt-10 d-flex space-between pl-10 pr-20">
                    <div class="pesquise"><i class="fa fa-search"></i> PESQUISAR MEMBRO</div>
                </div>
                <div class="mt-10 d-flex space-between pl-10 pr-20">
                    <form action="#" onsubmit="return getRegistro()">
                        <div style="display:inline-block;border: 2px solid #464132;border-radius:25px;padding: 5px;">
                            <input type="text" name="nickname" id="nickname" placeholder="Digite o nickname do membro aqui!" required />
                        </div>
                        <button type="submit" class="btn">
                            <i class="fa fa-search"></i> OK
                        </button>
                    </form>
                </div>

                <img src="https://i.imgur.com/vW3lHYN.png" alt="divisor" style="width:100%;" />

                <div class="resultado ml-10 mt-1">
                    <div class="mb-10 pesquise">
                        RESULTADO DA PESQUISA
                    </div>

                    <div class="d-flex space-between" style="position:relative;">
                        <div class="info ml-20">
                            Digite o nome do membro no campo acima e obetenha as <span style="font-weight: 600;color: #ffcc00;">informações </span> aqui!
                        </div>

                        <div class="avatar">
                            <img src="https://i.imgur.com/kCshzpr.png" alt="avatar habbo" style="position:absolute;bottom:15px;right:30px;" />
                            <img src="https://i.imgur.com/JVngWt4.png" alt="palanque habbo" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ./DESTAQUE SEMANAL E PESQUISA -->

    <!-- RÁDIO, NAVEGAÇÃO RÁPIDA E LINKS -->
    <div class="radio-buttons">
        <div class="radio">
            <div class="locucao">
                <p>BOT AL <span>com</span> AnimaAL</p>
                <status>NO AR</status>
            </div>
            <div class="botoes">
                <button class="btn"><i class="fa fa-play"></i></button>
                <button class="btn"><i class="fa fa-pause"></i></button>
                <div class="volume">
                    <i class="fa fa-volume-up"></i>
                    <div class="range">
                        <input type="range" min="0" max="100" value="1">
                    </div>
                </div>
            </div>
        </div>

        <div class="navegacao-rapida mt-10 pt-10 pb-10 text-end">
            <h4>Navegação Rápida</h4>

            <ul>
                <li>
                    <a href="<?php echo BASE; ?>loja">Loja</a>
                </li>

                <li>
                    <a href="<?php echo BASE; ?>sobre/estatuto">Regimento Institucional</a>
                </li>

                <li>
                    <a href="<?php echo BASE; ?>apostilas/uniformes">Fardamentos/Uniformes</a>
                </li>
                    
                
               
            </ul>
        </div>

        

    </div>
    <!-- ./RÁDIO, NAVEGAÇÃO RÁPIDA E LINKS -->
</div>

