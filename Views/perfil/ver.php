<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $viewData['pageName'] ?> | Exército Alemão Habbo</title>
    <meta name="description" content="<?php echo $viewData['pageName'] ?> | Exército Alemão Habbo">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="og:site_name" content="Diário Brasileiro - Anonimo">
    <meta property="og:title" content="<?php echo $viewData['pageName'] ?> | Exército Alemão Habbo">
    <meta property="og:description" content="<?php echo $viewData['description']; ?>">
    <meta property="og:url" content="<?php echo BASE; ?>">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:image" content="https://www.habbo.com.br/habbo-imaging/badge/b27104s36134s42134t27014s3901142fb76d8bcff5c4cfc77fb6d87d74d6c.gif">
    <!-- <meta property="og:image:width" content="620"> 
	<meta property="og:image:height" content="316">  -->
    <meta name="twitter:site" content="@exalemaohb" />
    <meta name="twitter:title" content="<?php echo $viewData['pageName'] ?> | Exército Alemão Habbo" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@exalemaohb" />
    <meta name="twitter:creator" content="@exalemaohb" />
    <meta name="theme-color" content="#1E1E1F">

    <link rel="apple-touch-icon" href="https://www.habbo.com.br/habbo-imaging/badge/b27104s36134s42134t27014s3901142fb76d8bcff5c4cfc77fb6d87d74d6c.gif">
    <link rel="shortcut icon" href="https://www.habbo.com.br/habbo-imaging/badge/b27104s36134s42134t27014s3901142fb76d8bcff5c4cfc77fb6d87d74d6c.gif">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.6/css/all.css'>
    <link rel="stylesheet" href="<?php echo BASE ?>assets/css/main.min.css">
    <link rel="stylesheet" href="<?php echo BASE ?>assets/css/perfil.min.css">
    <link rel="stylesheet" href="<?php echo BASE ?>assets/css/responsive.min.css">

    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script> -->
    <!-- <script src="<?php echo BASE; ?>assets/js/jquery.mask.js"></script> -->

    <script>
        const BASE = '<?php echo BASE; ?>';
        const c = el => document.querySelector(el);
        const cs = el => document.querySelectorAll(el);
    </script>
</head>

<body>

    

    <section class="perfil <?php echo($usuario['vip'] == 1)?'vip':''; ?> pb-20">
        <div class="container">
            <div class="d-flex align-center usuario-info" style="position:relative;">
                <div class="user">
                   <div class="avatar"><img src="https://habbo.com.br/habbo-imaging/avatarimage?user=<?php echo $usuario['nickname'] ?>&action=std&direction=2&head_direction=2&gesture=sml&size=m" alt="Habbo user"></div>

                     <?php 
                    if($usuario['avatar'] == "https://i.imgur.com/38HBHH9.png") {
                        $imgAvatar = "https://www.habbo.com.br/habbo-imaging/avatarimage?user=".$usuario['nickname']."&action=std&direction=3&head_direction=3&gesture=sml&size=l";
                        $styleAvatar = "margin-left: 15px;";
                        $styleDiv = "background: url(https://i.imgur.com/Kbr1UAP.png);
                        background-repeat: no-repeat;
                        background-size: 100% 100%;";
                    }
                    else {
                        $imgAvatar = $usuario['avatar'];
                        $styleAvatar = "";
                        $styleDiv = "";
                    }
                    ?>
                    
                  <div class="foto" style="<?php echo $styleDiv ?>" >
                 
                        <img src="<?php echo $imgAvatar ?>" style="<?php echo $styleAvatar ?>" alt="Foto de perfil user" />


                        <?php if ($acesso->isLogged() && $acesso->getInfo('id_registro') == $usuario['id']): ?>

                            <button onclick="c('#trocar-foto #foto').click()">
                                <i class="fa fa-camera"></i>
                            </button>

                            <form action="<?php echo BASE; ?>form/trocarFotoPerfil" id="trocar-foto" style="display:none;" method="POST" enctype="multipart/form-data" >
                                <input type="file" name="foto" id="foto" accept="image/png, image/jpeg, image/jpg" onchange="this.form.submit()">
                            </form>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="infos">
                    <p class="registro-numero">Registro N° <?php echo $usuario['id']; ?></p>
                    <h1 class="nickname"><?php echo $usuario['nickname']; ?></h1>
                    <?php if (!empty($usuario['nome'])): ?>
                        <p class="nome"><?php echo $usuario['nome']; ?></p>                    
                    <?php endif; ?>
                </div>

                <?php if ($acesso->isLogged() && $acesso->getInfo('id_registro') != $usuario['id']): ?>
                    
                    <a href="<?php echo BASE; ?>form/favoritarPerfil/<?php echo($favoritei)?'2':'1'; ?>/<?php echo $usuario['id']; ?>" class="favoritar">
                        <i class="<?php echo($favoritei)?'fas fa-star':'far fa-star'; ?>"></i>
                        <?php echo($favoritei)?'Remover dos favoritos':'Adicionar aos favoritos'; ?>
                        
                    </a>

                <?php endif; ?>                
            </div>

            <div class="sobre">
                <div class="info-emblemas-honrarias">
                    <div class="info">
                        <h1>INFORMAÇÕES</h1>
                        <?php if (!empty($usuario['nome'])): ?>
                            <p class="nome">Nome: <span><?php echo strtoupper($usuario['nome']); ?></span></p>
                        <?php endif; ?>                       
                        <?php
							$idade = 0;
							if($usuario['nascimento'] != '0000-00-00' && $usuario['nascimento'] != '') {
								// Declara a data! :P
								$data = date('Y-m-d');
							
								$d1 = strtotime($usuario['nascimento']); 
						        $d2 = strtotime($data);
						        // verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
						        $dataFinal = intval(($d2 - $d1) / 31536000);
						        // caso a data 2 seja menor que a data 1
						        $dataFinal = ($dataFinal < 0)?intval($dataFinal * -1):$dataFinal;
						        $idade = $dataFinal;
							}							
                        ?> 
                        <?php if ($idade != 0): ?>
                            <p class="idade">Idade: <span><?php echo $idade; ?> anos</span></p>
                        <?php endif; ?> 
                        

                        <p class="data-inscricao">Data de inscrição: <span><?php echo date('d/m/Y', strtotime($usuario['data_alistamento'])); ?></span></p>

                        <p class="cargo-atual">Cargo atual: <span><?php echo $usuario['patente']; ?></span></p>
                    </div>

                    <div class="emblemaas">
                        <h1>MEUS EMBLEMAS</h1>
                        
                        <div class="emblemaas">
                            <div class="emblemas">
                                <?php foreach ($loja->getEmblemas($usuario['id'], 8) as $emblema): ?>
                               
                                    <div href="#" data-toggle="tooltip" class="emblema label label-default" title="<?php echo $emblema['msg']; ?>" data-tooltip="<?php echo $emblema['msg']; ?>" data-toggle="tooltip" data-position="top">
                                        <img src="<?php echo $emblema['img']; ?>"></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div class="honrarias">
                        <h1>HONRARIAS</h1>

                        <p>Este membro não possui honrarias</p>
                    </div>
                </div>

                <div class="estatisticas">
                    <div id="info">
                        Ultima promoção: <span class="ultima-promocao"><?php echo date('d/m/Y', strtotime($usuario['ultima_promocao'])); ?></span> 
                        Promovido por: <span class="promovido-por"><?php echo $usuario['promovido_por']; ?></span> 
                        Inscrição Helper: <span class="red">Não</span>
                        Status: <span class="<?php echo($usuario['status_id'] == 1)?'green':'red'; ?>"><?php echo $usuario['status']; ?></span>
                    </div>

                    <div id="esta">
                        <h2>RESUMO DAS ESTATISTICAS</h2>

                        <div class="d-flex justify-center mt-10">
                            
                            <div class="chart-total tooltipped" data-toggle="tooltip" data-position="bottom" data-tooltip="TREINOS" style="max-width: 150px;" data-percentage="<?php echo $treinos; ?>">
                                <canvas height="150" width="150"></canvas>
                                <div class="chart-total-legend">
                                    <span class="legend-val" value="<?php echo $treinos; ?>" style="font-size: 40px;"><?php echo $treinos; ?></span>
                                </div>
                            </div>

                            <div class="chart-total tooltipped" data-toggle="tooltip" data-position="bottom" data-tooltip="DEs" style="max-width: 150px;" data-percentage="<?php echo $des; ?>">
                                <canvas height="150" width="150"></canvas>
                                <div class="chart-total-legend">
                                    <span class="legend-val" value="<?php echo $des; ?>" style="font-size: 40px;"><?php echo $des; ?></span>
                                </div>
                            </div>

                            <div class="chart-total tooltipped" data-toggle="tooltip" data-position="bottom" data-tooltip="ATENDIMENTOS" style="max-width: 150px;" data-percentage="<?php echo $atendimentos; ?>">
                                <canvas height="150" width="150"></canvas>
                                <div class="chart-total-legend">
                                    <span class="legend-val" value="<?php echo $atendimentos; ?>" style="font-size: 40px;"><?php echo $atendimentos; ?></span>
                                </div>
                            </div>

                            <?php if ($usuario['patente_id'] <= 6): ?>
                                <div class="chart-total tooltipped" data-toggle="tooltip" data-position="bottom" data-tooltip="EXECUTIVOS" style="max-width: 150px;" data-percentage="<?php echo $executivos; ?>">
                                    <canvas height="150" width="150"></canvas>
                                    <div class="chart-total-legend">
                                        <span class="legend-val" value="<?php echo $executivos; ?>" style="font-size: 40px;"><?php echo $executivos; ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>


                        </div>

                        <div class="mensagens mt-20">
                            <div class="mensagens-head">
                                <h3>Mensagens</h3>
                            </div>

                            <div class="mensagens-body">
                                <?php foreach ($mensagens as $mensagem): ?>
                                    <div class="comentario">
                                        <div class="avatar">
                                            <img src="https://www.habbo.com.br/habbo-imaging/avatarimage?user=<?php echo $mensagem['mensagem_nickname']; ?>&action=std&direction=2&head_direction=2&gesture=sml&size=m" alt="" />
                                            <a href="<?php echo BASE; ?>profile/<?php echo $mensagem['mensagem_nickname']; ?>" target="_blank">Perfil</a>
                                        </div>
                                        <div class="comentario-info">
                                            <p><?php echo $mensagem['msg']; ?></p>

                                            <div class="info">
                                                <div>
                                                    <a href="<?php echo BASE; ?>profile/<?php echo $mensagem['mensagem_nickname']; ?>" target="_blank">
                                                        <i class="fa fa-user"></i>
                                                        <?php echo $mensagem['mensagem_nickname']; ?>
                                                    </a>

                                                    <a href="javascript:;">
                                                        <i class="fa fa-calendar"></i>
                                                        <?php echo date('d/m/Y \à\s H:i', strtotime($mensagem['data'])); ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="mensagens-footer">
                                <p>Total: <?php echo $mensagensTotal; ?> mensagens</p>
                                <div class="botoes">
                                    <button><i class="fa fa-arrow-left"></i></button>
                                    <button><i class="fa fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="favoritos-grafico" >
                <div class="favoritos" style="background: #000; box-shadow: 1px 2px 5px #333;">
                    <h1 style="color: #FAE094; background: #000;">
                        <i class="far fa-star"></i>
                        Meus favoritos
                    </h1>

                    <div id="favoritos">
                        <?php foreach ($favoritos as $favorito): ?>
                            <div class="favorito">
                                <img src="http://www.habbo.com.br/habbo-imaging/avatarimage?&user=<?php echo $favorito['favorito_nickname']; ?>&action=std&direction=2&head_direction=2&img_format=png&gesture=std&headonly=1&size=b" alt="Head avatar">
                                <p>
                                    <span class="nickname"><?php echo strtoupper($favorito['favorito_nickname']); ?></span><br/>
                                    <span class="adicionado">Adicionado em <?php echo date('d/m/Y', strtotime($favorito['data'])); ?></span>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="grafico" style="background: #000; box-shadow: 1px 2px 5px #333;">
                    <h1 style="background: #000; color: #FAE094; ">
                        Meu Gráfico

                        <!-- <form action="" onchange="this.submit()" >
                            <label for="">Ordenar por</label>
                            <div class="custom-select" style="width:125px;height:37px;">
                                <select name="ordem">
                                    <option value="">Mais recentes</option>
                                    <option value="desc">Mais recentes</option>
                                    <option value="asc">Mais antigas</option>
                                </select>
                            </div>
                        </form> -->
                    </h1>
                    <style>
                        .mes {
                            color: #fff;
                        }
                    </style>

                    <div class="d-flex align-center">
                        <div class="grafic">
                            <div class="este-mes d-flex justify-center">
                                <div class="grafico-geral d-flex align-center ml-10">
                                    <div class="chart-total" style="max-width: 130px;" data-percentage="<?php echo $treinos_mes; ?>">
                                        <canvas height="130" width="130"></canvas>
                                        <div class="chart-total-legend" style="border:5px solid #FAE094;width:75px;height:75px;line-height:75px;border-radius:50px;">
                                            <span class="legend-val" value="<?php echo $treinos_mes; ?>" style="font-size: 20px;font-weight: 900;color: #FAE094;">
                                                <span style="color: #FAE094;"><?php echo($treinos_mes >= 20)?'20':$treinos_mes; ?></span> / 20
                                            </span>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <h5 style="color: #fff;"><?php echo $treinos_mes; ?> Instruções</h5>
                                        <p class="mes">no mês atual</p>
                                    </div>
                                </div>

                                <div class="grafico-geral d-flex align-center ml-10">
                                    <div class="chart-total" style="max-width: 130px;" data-percentage="<?php echo $helpers_mes; ?>">
                                        <canvas height="130" width="130"></canvas>
                                        <div class="chart-total-legend" style="border:5px solid #FAE094;width:75px;height:75px;line-height:75px;border-radius:50px;">
                                            <span class="legend-val" value="<?php echo $helpers_mes; ?>" style="font-size: 20px;font-weight: 900;color: #FAE094;">
                                                <span style="color: #FAE094;"><?php echo($helpers_mes >= 20)?'20':$helpers_mes; ?></span> / 20
                                            </span>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <h5 style="color: #fff;"><?php echo $helpers_mes; ?> Ações</h5>
                                        <p class="mes">no mês atual</p>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="mes-passado <?php echo($usuario['vip'] == 1)?'':'nao-vip'; ?> d-flex justify-center">
                                <div class="grafico-geral d-flex align-center ml-10">
                                    <div class="chart-total" style="max-width: 90px;" data-percentage="<?php echo($usuario['vip'] == 1)?$treinos_mes_passado:'16'; ?>">
                                        <canvas height="90" width="90"></canvas>
                                        <div class="chart-total-legend" style="border:5px solid #FAE094;width: 40px;height: 40px;line-height: 40px;border-radius:50px;">
                                            <span class="legend-val" value="16" style="font-size: 20px;font-weight: 900;color: #FAE094;">
                                                <span style="color: #FAE094;"><?php echo($usuario['vip'] == 1)?(($treinos_mes_passado >= 20)?'20':$treinos_mes_passado):'16'; ?></span> / 20
                                            </span>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <h5 style="color: #fff;"><?php echo($usuario['vip'] == 1)?$treinos_mes_passado:'16'; ?> Instruções</h5>
                                        <p class="mes">no mês passado</p>
                                    </div>
                                </div>

                                <div class="grafico-geral d-flex align-center ml-10">
                                    <div class="chart-total" style="max-width: 90px;" data-percentage="<?php echo($usuario['vip'] == 1)?$helpers_mes_passado:'16'; ?>">
                                        <canvas height="90" width="90"></canvas>
                                        <div class="chart-total-legend" style="border:5px solid #FAE094;width: 40px;height: 40px;line-height: 40px;border-radius:50px;">
                                            <span class="legend-val" value="<?php echo($usuario['vip'] == 1)?$helpers_mes_passado:'16'; ?>" style="font-size: 20px;font-weight: 900;color: #FAE094;">
                                                <span style="color: #FAE094;"><?php echo($usuario['vip'] == 1)?$helpers_mes_passado:'16'; ?></span> / 20
                                            </span>
                                        </div>
                                    </div>

                                    <div class="info">
                                        <h5 style="color: #fff;"><?php echo($usuario['vip'] == 1)?$helpers_mes_passado:'16'; ?> Ações</h5>
                                        <p class="mes">no mês passado</p>
                                    </div>
                                </div>

                                <?php if ($usuario['vip'] != 1): ?>
                                    <div id="nao-vip">
                                        <img src="https://i.imgur.com/KnXrW3T.png" alt="Cadeado" class="mr-10" >
                                        <p>SOMENTE<br/> MEMBROS VIP</p>
                                    </div>
                                <?php endif; ?>
                                
                            </div>
                        </div>

                        <div class="advs d-flex align-center" style="width:250px;flex-direction: column;">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section style="background:#000;">
    </section>

    <footer>

        <div class="container footer-body">
            <div style="width:840px;height:195px;">
                <h3>Exército Alemão Habbo</h3>



                <p style="font-size:13px;font-weight:bold;margin-top:30px;">Copyright (c) <?php echo date('Y') ?>. Todos os direitos reservados.</p>
                <p style="font-size:12px;width: 550px;">
                    Este site da web não possui vínculo com nenhuma organização de inteligência da vira real e não é marca de nenhuma das afiliadas da Sulake Corporation Oy.<br /> Este é um jogo de simulação e nenhum acontecimento deve ser levado em consideração!<br /> Este site foi desenvolvido por
                      <a href="http://habbo.com.br/profile/GeorgeSiilva" class="desenvolvedor">George Silva (GeorgeSiilva)</a>, <a href="http://habbo.com.br/profile/majoryanzinho" class="desenvolvedor" id="yan">Yan Lyra (majoryanzinho)</a> e <a href="https://github.com/the1scient" target="_blank" class="desenvolvedor">Lucas (Glayve)</a>
                </p>

            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
        <?php if (isset($_SESSION['aviso_registro']) && !empty($_SESSION['aviso_registro'])): ?>
            M.toast({html: '<?php echo $_SESSION['aviso_registro'] ?>'})

            <?php unset($_SESSION['aviso_registro']); ?>
        <?php endif; ?>

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()


            $("#esta .chart-total").each(function(idx, element) {
                _render({
                    idx:idx, 
                    element:element, 
                    value:$(element).attr('data-percentage'), 
                    maxValue:100,
                    color:"rgb(250, 224, 148)", 
                    canvasColor:"#1D1C1E",
                    startingPoint:-0.5,
                    fontSizee:33,
                    width:10,
                    dimens:150
                });
            });

            $(".grafic .este-mes .chart-total").each(function(idx, element) {
                _render({
                    idx:idx, 
                    element:element, 
                    value:$(element).attr('data-percentage'),  
                    maxValue:20,
                    color:"rgb(0, 217, 0)", 
                    canvasColor:"transparent",
                    startingPoint:-0.5,
                    fontSizee:20,
                    width:5,
                    dimens:130
                });
            });

            $(".grafic .mes-passado .chart-total").each(function(idx, element) {
                _render({
                    idx:idx, 
                    element:element, 
                    value:$(element).attr('data-percentage'),  
                    maxValue:20,
                    color:"rgb(153, 153, 153)", 
                    canvasColor:"transparent",
                    startingPoint:-0.5,
                    fontSizee:11,
                    width:5,
                    dimens:90
                });
            });
        })
        var x, i, j, selElmnt, a, b, dee;
        /* Look for any elements with the class "custom-select": */
        x = document.getElementsByClassName("custom-select");
        for (i = 0; i < x.length; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            /* For each element, create a new DIV that will act as the selected item: */
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            /* For each element, create a new DIV that will contain the option list: */
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < selElmnt.length; j++) {
                /* For each option in the original select element,
                create a new DIV that will act as an option item: */
                dee = document.createElement("DIV");
                dee.innerHTML = selElmnt.options[j].innerHTML;
                dee.addEventListener("click", function(e) {
                    /* When an item is clicked, update the original select box,
                    and the selected item: */
                    var y, i, k, s, h;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < s.length; i++) {
                        if (s.options[i].innerHTML == this.innerHTML) {
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            for (k = 0; k < y.length; k++) {
                                y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    h.click();
                });
                b.appendChild(dee);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function(e) {
                /* When the select box is clicked, close any other select boxes,
                and open/close the current select box: */
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
            });
        }

        function closeAllSelect(elmnt) {
            /* A function that will close all select boxes in the document,
            except the current select box: */
            var x, y, i, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            for (i = 0; i < y.length; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < x.length; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }

        /* If the user clicks anywhere outside the select box,
        then close all select boxes: */
        document.addEventListener("click", closeAllSelect);

        let _render = function({idx, element, value, maxValue, color, canvasColor, startingPoint, fontSizee, width, dimens}) {

            

            //input
            // let dimens = (dimenss != undefined)?150:dimenss;
            // console.log(dimens)
            let padding = 12;
            let countFontRatio = 0.25; //ratio in relation to the dimens value
            let pointValue = startingPoint;
            let currentPoint = startingPoint;
            let timer;
            let _ctx;

            let $canvas = $(element).find("canvas");
            let canvas = $canvas.get(0);

            pointValue = (value / (maxValue / 20) * 0.1) - 0.5;

            canvas.height = dimens;
            canvas.width = dimens;

            if (!countFontRatio)
                $canvas.parent().find(".legend-val").css("font-size", dimens / value.toString().length);
            else
                $canvas.parent().find(".legend-val").css("font-size", fontSizee);

            _ctx = canvas.getContext("2d");

            let _draw = function() {

                _ctx.clearRect(0, 0, dimens, dimens);
                _ctx.beginPath();
                _ctx.arc(dimens / 2, dimens / 2, (dimens / 2) - padding, startingPoint * Math.PI, 1.5 * Math.PI);
                _ctx.strokeStyle = canvasColor;
                _ctx.lineWidth = 10;
                _ctx.lineCap = "square";
                _ctx.stroke();

                _ctx.beginPath();
                _ctx.arc(dimens / 2, dimens / 2, (dimens / 2) - padding, startingPoint * Math.PI, currentPoint * Math.PI);
                _ctx.strokeStyle = color;
                _ctx.lineWidth = width;
                _ctx.lineCap = "round";
                _ctx.stroke();

                currentPoint += 0.1;

                if (currentPoint > pointValue) {
                    clearInterval(timer)
                }
            };

            timer = setInterval(_draw, 100);
        };

        var treinosChart = new Chart(document.getElementById('treinosChart'), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [
                        <?php echo($usuario['vip'] == 1 && $treinos > 0)?$treinos:'1'; ?>,
                        <?php echo($usuario['vip'] == 1 && $des > 0)?$des:'1'; ?>,
                        <?php echo($usuario['vip'] == 1 && $atendimentos > 0)?$atendimentos:'1'; ?>,
                        <?php echo($usuario['vip'] == 1 && $helpers > 0)?$helpers:'1'; ?>,
                        <?php echo($usuario['vip'] == 1 && $executivos > 0)?$executivos:'1'; ?>
                    ],
                    backgroundColor: [
                        '#9326FF',
                        '#D90000',
                        '#FF8000',
                        '#3053AF',
                        '#008C46'
                    ],
                    borderColor: [
                        '#9326FF',
                        '#D90000',
                        '#FF8000',
                        '#3053AF',
                        '#008C46'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                legend:{
                    display:false
                },
                tooltips:{
                    enabled: false
                }
            }
        });
        treinosChart.canvas.parentNode.style.height = '200px';
        treinosChart.canvas.parentNode.style.width = '200px';
    </script>
    <script src="<?php echo BASE; ?>assets/js/script.js"></script>
    <script src="<?php echo BASE; ?>assets/js/fuckadblock.min.js" integrity="sha256-xjwKUY/NgkPjZZBOtOxRYtK20GaqTwUCf7WYCJ1z69w="></script>
</body>

</html>