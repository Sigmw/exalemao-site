<?php if (count($registro) > 0) : 
    $executivo = $registro['executivo'];
    
$HabboAPI = "https://www.habbo.com.br/api/public/users?name=".$registro['nickname'];
$ch = curl_init();
$options = array(
    CURLOPT_URL => $HabboAPI,
    CURLOPT_HEADER => false,
    CURLOPT_POST => 0,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_RETURNTRANSFER => true,
);
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
curl_setopt_array($ch, $options);
$saida = curl_exec($ch);
/* Decoda o JSON e exibe o status */
$online = json_decode($saida)->online;
$ultimoAcesso = json_decode($saida)->memberSince;
$missao = json_decode($saida)->motto;
$figurestring = json_decode($saida)->figureString;
curl_close($ch);

$online = array(
  'online' => $online,
  'lastAccessTime' => $ultimoAcesso
);
         
     if($online['online'] == true) {
                        echo '<img src="https://exalhb.com/assets/images/online.gif"> ';
                      }
                      else {
                        echo '<img src="https://exalhb.com/assets/images/offline.gif">';
                      }
                      
?>
    <div class="mb-10 pesquise">
        <?php echo $registro['nickname']; ?>
        <span class="status <?php echo strtolower($registro['status']); ?>">
            • <?php echo $registro['status']; ?>
        </span><?php if ($registro['vip'] == 1) : ?>
                               &nbsp;&nbsp; <img src="https://i.imgur.com/1DBSVgG.png" alt="vip" style="" />
                            <?php endif; ?>
    </div>

    <div class="d-flex space-between" style="position:relative;">
        <div class="info ml-20">
            <strong>Patente: </strong> <?php
          
                
                echo $ptt = $executivo == 1 ? $registro['patente_executivo'] : $registro['patente'];
           
            ?><br />
            <strong>Última promoção: </strong> <?php echo date('d/m/Y', strtotime($registro['ultima_promocao'])); ?><br />
            <strong>Promovido por: </strong> <a href="profile/<?php echo $registro['promovido_por']; ?>" target="_blank" style="text-decoration: underline; color: white;"><?php echo $registro['promovido_por']; ?> <img style="position: absolute; margin-top: -2%;" src="https://www.habbo.com.br/habbo-imaging/avatarimage?user=<?php echo $registro['promovido_por']; ?>&action=std&headonly=1&head_direction=4&gesture=sml&size=s" /> </a><br />
            <strong>Missão:</strong> <?php 
            if($registro['status'] == "Demitido") {
                echo "<span style='color: #EE2223;'>[USUÁRIO DEMITIDO]</span>";
            }
            else {
                echo $missao;
            }
             ?> <br>

            <a href="<?php echo BASE; ?>profile/<?php echo $registro['nickname']; ?>" target="_blank" class="btn perfil">Perfil</a>
            
        </div>

<style>
    .dropshadow {
        -webkit-filter: drop-shadow(0 1px 0 white) drop-shadow(0 -1px 0 white) drop-shadow(1px 0 0 white) drop-shadow(-1px 0 0 #333);
    }
    .dropshadow-vip {
        -webkit-filter: drop-shadow(0 1px 0 yellow) drop-shadow(0 -1px 0 red) drop-shadow(1px 0 0 yellow) drop-shadow(-1px 0 0 #333);
    }
</style>

        <div class="avatar">
            <img src="https://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $figurestring ?>&action=std&direction=4&head_direction=4&gesture=sml&size=l" alt="avatar habbo" class="dropshadow<?php echo $registro['vip'] == 1 ? "-vip" : ""; ?>" style="z-index: 1;position: absolute;
    bottom: 5px;
    right: -15%;"  />
            <img src="https://i.imgur.com/JVngWt4.png" alt="palanque habbo" />
        </div>
    </div>
    <style>
        div#busca-registro .pesquise {
            display: flex;
            align-items: center;
            padding-left: 10px;
            padding-right: 10px;
            width: 210px;
            position: relative;
        }

        div#busca-registro .pesquise .status {
            font-size: 9px;
            position: absolute;
            right: 10px;
            color: #fff;
            font-weight: 900;
        }

        div#busca-registro .pesquise .status.ativo {
            color: rgb(1, 216, 0);
        }

        div#busca-registro .pesquise .status.demitido {
            color: #EE2223;
        }

        .info a.perfil {
            border: 2px solid #fff;
            width: 200px;
            font-weight: bold;
            margin-top: 10px;
            color: #fff;
            text-decoration: none;
        }

        .info a.perfil:hover {
            background: #fff;
            color: #1b1b1b;
        }
    </style>
<?php else : ?>
    <div class="mb-10 pesquise" style="width:fit-content;padding-right:10px;padding-left:10px;">
        Este usuário não está registrado!
    </div>
<?php endif; ?>