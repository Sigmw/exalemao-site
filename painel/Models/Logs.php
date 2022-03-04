<?php
namespace Models;

use \Core\Model;

class Logs extends Model {

    public function getLogs()
    {       
        $retorno = [];

        $sql = $this->db->query("SELECT * FROM logs ORDER BY id DESC");

        if ($sql->rowCount() > 0) {
            $retorno = $sql->fetchAll();
        }

        return $retorno;
    }

    public function addLog($tipo, $msg)
	{
		$sql = $this->db->prepare("INSERT INTO logs (tipo, texto) VALUES (:tipo, :msg)");
		$sql->bindValue(':tipo', $tipo);
		$sql->bindValue(':msg', $msg);
		$sql->execute();
		
		$webhookurl = "https://canary.discord.com/api/webhooks/859843963048296448/wHtyEIx8TH-zIfFtEI6IlrHB0X4io2BdiuTiSbaQBeQehZsm1LcXFGevijkleFU7ARGN";

//=======================================================================================================
// Compose message. You can use Markdown
// Message Formatting -- https://discordapp.com/developers/docs/reference#message-formatting
//========================================================================================================

$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    // Message
    "content" => "Um novo log foi adicionado ao Banco de Dados.",
    
    // Username
    "username" => "Website Logs - Exército Alemão",

    // Avatar URL.
    // Uncoment to replace image set in webhook
    //"avatar_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=512",

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            "title" => "Novo log -> ".$tipo,

            // Embed Type
            "type" => "rich",

            // Embed Description
            "",

            // URL of title link
            "url" => "https://exalhb.com/painel/registros/logs",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "ff0000" ),

            // Footer
            "footer" => [
                "text" => "https://exalhb.com",
                "icon_url" => "https://www.habbo.com.br/habbo-imaging/badge/b27104s36134s42014t27014s390112dbe982781f28423ae7cf5384358615b.gif"
            ],

            // Image to send
            "image" => [
                "url" => "https://www.habbo.com.br/habbo-imaging/badge/b27104s36134s42014t27014s390112dbe982781f28423ae7cf5384358615b.gif"
            ],

            // Thumbnail
            //"thumbnail" => [
            //    "url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=400"
            //],

            // Author
            "author" => [
                "name" => "https://exalhb.com",
                "url" => "https://exalhb.com"
            ],

            // Additional Fields array
            "fields" => [
                // Field 1
                [
                    "name" => "Log",
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
	
}
