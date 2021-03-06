<?php
namespace Models;

use \Core\Model;

class Uteis extends Model {

    public function trocarItens($msg)
    {
        $valores = array(
            '@\<div (.*?)\>(.*?)\<\/div\>@' => '$2',
            '@\<header (.*?)\>(.*?)\<\/header\>@' => '$2',
            '@\<main (.*?)\>(.*?)\<\/main\>@' => '$2',
            '@\<footer (.*?)\>(.*?)\<\/footer\>@' => '$2',
            '@\<section (.*?)\>(.*?)\<\/section\>@' => '$2',
            '@\<article (.*?)\>(.*?)\<\/article\>@' => '$2',
            '@\<aside (.*?)\>(.*?)\<\/aside\>@' => '$2',
            '@\<nav (.*?)\>(.*?)\<\/nav\>@' => '$2',
            '@\<h1 (.*?)\>(.*?)\<\/h1\>@' => '$2',
            '@\<h2 (.*?)\>(.*?)\<\/h2\>@' => '$2',
            '@\<h3 (.*?)\>(.*?)\<\/h3\>@' => '$2',
            '@\<h4 (.*?)\>(.*?)\<\/h4\>@' => '$2',
            '@\<h5 (.*?)\>(.*?)\<\/h5\>@' => '$2',
            '@\<h6 (.*?)\>(.*?)\<\/h6\>@' => '$2',
            '@\<p (.*?)\>(.*?)\<\/p\>@' => '$2',
            '@\<span (.*?)\>(.*?)\<\/span\>@' => '$2',
            '@\<pre (.*?)\>(.*?)\<\/pre\>@' => '$2',
            '@\<b (.*?)\>(.*?)\<\/b\>@' => '$2',
            '@\<i (.*?)\>(.*?)\<\/i\>@' => '$2',
            '@\<a (.*?)\>(.*?)\<\/a\>@' => '$2',
            '@\<ol (.*?)\>(.*?)\<\/ol\>@' => '$2',
            '@\<ul (.*?)\>(.*?)\<\/ul\>@' => '$2',
            '@\<li (.*?)\>(.*?)\<\/li\>@' => '$2',
            '@\<script (.*?)\>(.*?)\<\/script\>@' => '',
            '@\<meta (.*?)\/\>@' => ''
        );

        $msg = preg_replace(array_keys($valores), array_values($valores), $msg);
        $ms = str_replace('<', '&#60;', $msg);
        $msg = str_replace('>', '&#62;', $ms);
        $msg = str_replace('"', '&quot;', $msg);
        $msg = str_replace("'", "&#039;", $msg);
        $msg = str_replace("&#60;br&#62;", "<br/>", $msg);
        $msg = str_replace("&#60;br/&#62;", "<br/>", $msg);

        return $msg;
    }

    public static function replaceBBcodes($msg)
    {
        $valores = array(
            '@\[b\](.*?)\[/b\]@' => '<b>$1</b>',
            '@\[i\](.*?)\[/i\]@' => '<i>$1</i>',
            '@\[u\](.*?)\[/u\]@' => '<span style="text-decoration:underline;">$1</span>',
            '@\[citar\]([^"><]*?)\[/citar\]@' => '<div class="citacao">$1</div>',
            '@\[nickname\]([^"><]*?)\[/nickname\]@' => '<div class="de">$1</div>',
            '@\[user\]([^"><]*?)\[/user\]@' => '<div class="de">$1</div>',
            '@\[msg\]([^"><]*?)\[/msg\]@' => '<div class="citacao-msg">$1</div>',
            '@\[size=([^"><]*?)\](.*?)\[/size\]@' => '<span style="font-size:$1px;">$2</span>',
            '@\[color=([^"><]*?)\](.*?)\[/color\]@' => '<span style="color:$1;">$2</span>',
            '@\[url=((?:ftp|https?)://[^"><]*?)\](.*?)\[/url\]@' => '<a href="$1">$2</a>',
            '@\\[img\](https?://[^"><]*?\.(?:jpg|jpeg|gif|png|bmp))\[/img\]@' => '<img src="$1" alt="Imagem" />'
        );
        
        $msg = preg_replace(array_keys($valores), array_values($valores), $msg);

        return $msg;
    }
    
    public function temCitacao($msg)
    {

        if (preg_match('@\[citar\]([^"><]*?)\[/citar\]@', $msg) === 1) {
            return true;
        }
        
        return false;
    }

	public function encripta($senha){
		// VEJA QUE PRIMEIRO EU VOU GERAR UM SALT J?? ENCRIPTADO EM MD5
		$salt = md5('painel_praca');
		
		//PRIMEIRA ENCRIPTA????O ENCRIPTANDO COM crypt
		$codifica = crypt($senha,$salt);

		// SEGUNDA ENCRIPTA????O COM sha512 (128 bits)
		$codifica = hash('sha512',$codifica);

		//AGORA RETORNO O VALOR FINAL ENCRIPTADO
		return $codifica;
	}

	public function criar_slug($text) {
 
        $replace = [
            '&lt;' => '', '&gt;' => '', '&#039;' => '', '&amp;' => '',
            '&quot;' => '', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??'=> 'Ae',
            '&Auml;' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'Ae',
            '??' => 'C', '??' => 'C', '??' => 'C', '??' => 'C', '??' => 'C', '??' => 'D', '??' => 'D',
            '??' => 'D', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E',
            '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'G', '??' => 'G',
            '??' => 'G', '??' => 'G', '??' => 'H', '??' => 'H', '??' => 'I', '??' => 'I',
            '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I',
            '??' => 'I', '??' => 'IJ', '??' => 'J', '??' => 'K', '??' => 'K', '??' => 'K',
            '??' => 'K', '??' => 'K', '??' => 'K', '??' => 'N', '??' => 'N', '??' => 'N',
            '??' => 'N', '??' => 'N', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O',
            '??' => 'Oe', '&Ouml;' => 'Oe', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O',
            '??' => 'OE', '??' => 'R', '??' => 'R', '??' => 'R', '??' => 'S', '??' => 'S',
            '??' => 'S', '??' => 'S', '??' => 'S', '??' => 'T', '??' => 'T', '??' => 'T',
            '??' => 'T', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'Ue', '??' => 'U',
            '&Uuml;' => 'Ue', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U',
            '??' => 'W', '??' => 'Y', '??' => 'Y', '??' => 'Y', '??' => 'Z', '??' => 'Z',
            '??' => 'Z', '??' => 'T', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a',
            '??' => 'ae', '&auml;' => 'ae', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a',
            '??' => 'ae', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c',
            '??' => 'd', '??' => 'd', '??' => 'd', '??' => 'e', '??' => 'e', '??' => 'e',
            '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e',
            '??' => 'f', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'h',
            '??' => 'h', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i',
            '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'ij', '??' => 'j',
            '??' => 'k', '??' => 'k', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l',
            '??' => 'l', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n',
            '??' => 'n', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'oe',
            '&ouml;' => 'oe', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'oe',
            '??' => 'r', '??' => 'r', '??' => 'r', '??' => 's', '??' => 'u', '??' => 'u',
            '??' => 'u', '??' => 'ue', '??' => 'u', '&uuml;' => 'ue', '??' => 'u', '??' => 'u',
            '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'w', '??' => 'y', '??' => 'y',
            '??' => 'y', '??' => 'z', '??' => 'z', '??' => 'z', '??' => 't', '??' => 'ss',
            '??' => 'ss', '????' => 'iy', '??' => 'A', '??' => 'B', '??' => 'V', '??' => 'G',
            '??' => 'D', '??' => 'E', '??' => 'YO', '??' => 'ZH', '??' => 'Z', '??' => 'I',
            '??' => 'Y', '??' => 'K', '??' => 'L', '??' => 'M', '??' => 'N', '??' => 'O',
            '??' => 'P', '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'U', '??' => 'F',
            '??' => 'H', '??' => 'C', '??' => 'CH', '??' => 'SH', '??' => 'SCH', '??' => 'b',
            '??' => 'Y', '??' => 'b', '??' => 'E', '??' => 'YU', '??' => 'YA', '??' => 'a',
            '??' => 'b', '??' => 'v', '??' => 'g', '??' => 'd', '??' => 'e', '??' => 'yo',
            '??' => 'zh', '??' => 'z', '??' => 'i', '??' => 'y', '??' => 'k', '??' => 'l',
            '??' => 'm', '??' => 'n', '??' => 'o', '??' => 'p', '??' => 'r', '??' => 's',
            '??' => 't', '??' => 'u', '??' => 'f', '??' => 'h', '??' => 'c', '??' => 'ch',
            '??' => 'sh', '??' => 'sch', '??' => 'b', '??' => 'y', '??' => 'b', '??' => 'e',
            '??' => 'yu', '??' => 'ya'
        ];
     
        $text = strtr($text, $replace);
        $text = preg_replace('~[^\\pL\d.]+~u', '-', $text);
        $text = trim($text, '-');
        $text = preg_replace('~[^-\w.]+~', '', $text);
        $text = strtolower($text);
     
        return $text;
    }

    function getMotto($name)
    {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept-Encoding: gzip, deflate, sdch'));
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $get = array('', '');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Cookie:" . $get[0] . "=" . $get[1]));
        curl_setopt($ch, CURLOPT_URL, "http://www.habbo.com.br/api/public/users?name=" . $name);

        $id = json_decode(curl_exec($ch));

        $info = $id->motto;

        return $info;
    }

    public function diferenca($dt)
    {
        $ano = 31536000;
        $mes = 2592000;
        $dia = 86400;
        $hora = 3600;
        $minuto = 60;

        $time = strtotime($dt);
        $now = date('Y-m-d H:i:s');
        $now = strtotime($now);

        $dif = $now - $time;

        if ($dif < $minuto) {

            // Segundos

            return $dif . 's';
        } else if ($dif < $hora) {

            // Minutos

            $resultado = floor($dif / $minuto);
            return $resultado . 'm';
        } else if ($dif < $dia) {

            // Horas

            $resultado = floor($dif / $hora);

            return $resultado . 'h';
        } else if ($dif < $mes) {

            // Dias

            $resultado = floor($dif / $dia);

            return $resultado . 'd';
        } else if ($dif > $mes && $dif < $ano) {
            // M??s
            $resultado = floor($dif / $mes);

            return $resultado . 'm';
        } else if ($dif >= $ano) {
            // Ano

            $resultado = floor($dif / $ano);

            return $resultado . 'a';
        }
    }

    public function msgConfianca($sexo, $nivel)
    {
        $msg = '';

        if ($nivel <= 25) {
            
            $msg = 'Est?? precisando dar uma recalibrada nessas tarefas, hein? Chega l?? na Sede pra gente te ajudar!';

        } elseif ($nivel >= 26 && $nivel <= 50) {
            
            $msg = 'Procure cumprir mais tarefas durante a semana! Ainda tem jeito de conquistar sua t??o sonhada promo????o!';
            
        } elseif ($nivel >= 51 && $nivel <= 75) {
            
            if ($sexo == 0) {
                $msg = 'Voc?? j?? pensou em ser General do Ex??rcito Alem??o, meu/minha amigo(a)? Desse jeito ningu??m te segura!';
            } elseif ($sexo == 1) {
                $msg = 'Voc?? j?? pensou em ser General do Ex??rcito Alem??o, meu amigo? Desse jeito ningu??m te segura!';
            } elseif ($sexo == 2) {
                $msg = 'Voc?? j?? pensou em ser General do Ex??rcito Alem??o, minha amiga? Desse jeito ningu??m te segura!';
            }
            
        } elseif ($nivel >= 76 && $nivel <= 100) {
            
            $msg = 'Que trabalho impec??vel ?? esse?! Desse jeito at?? o sr. Yuri fica com medo de perder o cargo pra voc??!';
            
        }

        return $msg;
    }

    public function geoLocationData($ip)
    {
        $data = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip)); 
        return "{$data['geoplugin_city']}, {$data['geoplugin_regionCode']}";
    }

    public function hexToRgb($hex)
    {
        list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
        $retorno = "$r, $g, $b";        
        return $retorno;
    }

    public function rgbToHex($rgb)
    {
        $rgb = explode(', ', $rgb);
        $color = sprintf("#%02x%02x%02x", $rgb[0], $rgb[1], $rgb[2]); // #0d00ff
        return $color;
    }
	
}
