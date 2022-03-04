<?php
namespace Models;

use \Core\Model;
use \Models\Registros;

class Relatorios extends Model {

    // ! Relatórios tipos
    // 1 = Atendimento
    // 2 = DE
    // 3 = Auto-Lotação
    // 4 = Treinamento
    // 5 = Ajudantes
    // 6 = Sugestões
    // 7 = Auto-Lotação FIM
    // 8 = Professores
    
    // ! Ranking valor
    // 1 = TREINOS
    // 2 = DEs
    // 3 = ATEND
    // 4 = EXEC
    // 6 = Ajudantes
    // 7 = Professores
    
    public function getTotalDe($id_registro, $tipo)
    {
        $sql = $this->db->prepare("SELECT COUNT(*) as c FROM relatorios WHERE id_registro = :id_registro AND tipo = :tipo");
        $sql->bindValue(':id_registro', $id_registro);
        $sql->bindValue(':tipo', $tipo);
        $sql->execute();        
        $sql = $sql->fetch();
        return $sql['c'];
    }

    public function getRelatorio($id)
    {
        $array = [];
        
        $sql = $this->db->prepare("SELECT * FROM relatorios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        
        return $array;
    }

    public function getRelatorios()
    {
        $array = [];
        $sql = $this->db->query("SELECT * FROM relatorios ORDER BY data DESC");

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        
        return $array;
    }

    public function getMeusRelatorios($id_registro)
    {
        $array = [];
        $sql = $this->db->prepare("SELECT * FROM relatorios WHERE id_registro = :id_registro ORDER BY data DESC");
        $sql->bindValue(':id_registro', $id_registro);
        $sql->execute();       

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        
        return $array;
    }

    public function getTotalDeMes($id_registro, $tipo, $tipo_mes)
    {
        $mes = ($tipo_mes == 1)?date('m'):date('m', strtotime('-1 month'));
        $sql = $this->db->prepare("SELECT COUNT(*) as c FROM relatorios WHERE id_registro = :id_registro AND tipo = :tipo AND data LIKE :data");
        $sql->bindValue(':id_registro', $id_registro);
        $sql->bindValue(':tipo', $tipo);
        $sql->bindValue(':data', '%-'.$mes.'-%');
        $sql->execute();        
        $sql = $sql->fetch();
        return $sql['c'];
    }

    public function updateRelatorio($status, $id, $ofc_nickname)
    {
        $sql = $this->db->prepare("UPDATE relatorios SET status = :status WHERE id = :id");
        $sql->bindValue(':status', $status);
        $sql->bindValue(':id', $id);
        $sql->execute();

        $statuses = [
            1 => 'aceitou',
            2 => 'negou'
        ];

        $l = new \Models\Logs();
        $msg = "No dia " . date('d/m/Y') . " às [" . date('H:i') . "] o(a) " . $ofc_nickname . " atualizou o status de um relatório para ".$statuses[$status].".";
        $l->addLog('rel_edit', $msg);
    }

    public function addRelatorio($tipo, $data, $id_registro, $responsavel_id, $relatorio, $id_criador, $ofc_nickname)
    {
        $sql = $this->db->prepare("INSERT INTO relatorios (tipo, data, id_registro, id_criador, responsavel_id, relatorio) VALUES (:tipo, :data, :id_registro, :id_criador, :responsavel_id, :relatorio)");
        $sql->bindValue(':tipo', $tipo);
        $sql->bindValue(':data', $data);
        $sql->bindValue(':id_registro', $id_registro);
        $sql->bindValue(':id_criador', $id_criador);
        $sql->bindValue(':responsavel_id', $responsavel_id);
        $sql->bindValue(':relatorio', $relatorio);
        $sql->execute();

        $l = new \Models\Logs();
        $msg = "No dia " . date('d/m/Y') . " às [" . date('H:i') . "] o(a) " . $ofc_nickname . " adicionou um relatório.";
        $l->addLog('rel_add', $msg);
        
        switch($tipo) {
    case 1:
        $tipo_name = "Atendimento";
        break;
    case 2:
        $tipo_name = "Ronda";
        break;
    case 3:
        $tipo_name = "Lotação";
        break;
    case 4:
        $tipo_name =  "Treinamento";
        break;
    case 5:
        $tipo_name = "Ajudantes";
        break;
    case 6:
        $tipo_name = "Sugestões";
        break;
    case 7:
        $tipo_name = "Auto-Lotação FIM";
        break;
    case 8:
        $tipo_name = "Professores";
        break;
    default:
        $tipo_name = "Erro";
        break;
}

        
        
        
        
        	$webhookurl = "https://discord.com/api/webhooks/930556345013391401/LJwSubhUPhwA-BnIyZCs4MXFKpkr1S9Rttu1oZ87IykAAwWjVlbIrToHR9Gt_jfTxQkG";


$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    // Message
    "content" => "Um novo relatório foi enviado!",
    
    // Username
    "username" => "Relatório Logs - SFI",

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            "title" => "Novo log (".$tipo_name.")",

            // Embed Type
            "type" => "rich",

            // Embed Description
            "",

            // URL of title link
            "url" => "https://sfihabbo.com/painel/registros/logs",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "ff0000" ),

            // Footer
            "footer" => [
                "text" => "Enviado por: ".$ofc_nickname,
                "icon_url" => "https://www.habbo.com.br/habbo-imaging/badge/b04064t48164s11104t54114t27111892ed000acb4393c77ffd989ddb3128a.gif"
            ],

            // Image to send
            "image" => [
                "url" => "https://www.habbo.com.br/habbo-imaging/avatarimage?user=".$ofc_nickname."&action=std&direction=4"
            ],

            // Thumbnail
            //"thumbnail" => [
            //    "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=400"
            //],

            // Author
            "author" => [
                "name" => "https://sfihabbo.com",
                "url" => "https://sfihabbo.com"
            ],

            // Additional Fields array
            "fields" => [
                // Field 1
                [
                    "name" => "Relatório:",
                    "value" => $msg,
                    "inline" => false
                ]
                // Etc..
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
// echo $response;
curl_close( $ch );
    }

    public function deleteRelatorios($id_registro)
    {
        $sql = $this->db->prepare("DELETE FROM relatorios WHERE id_registro = :id_registro");
        $sql->bindValue(':id_registro', $id_registro);
        $sql->execute();
    }
	
}