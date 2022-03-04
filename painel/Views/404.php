<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página não encontrada - Serviço Federal de Inteligência</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">
   <link rel="apple-touch-icon" href="https://www.habbo.com.br/habbo-imaging/badge/b04064t48164s11104t54114t27111892ed000acb4393c77ffd989ddb3128a.gif">
    <link rel="shortcut icon" href="https://www.habbo.com.br/habbo-imaging/badge/b04064t48164s11104t54114t27111892ed000acb4393c77ffd989ddb3128a.gif">

    <style>
        @font-face {
            font-family: 'Eurostile';
            font-style: normal;
            font-weight: normal;
            src: local('Eurostile'), url('http://sihb.site/assets/css/eurostile.woff') format('woff');
        }


        @font-face {
            font-family: 'EuroStyle Normal';
            font-style: normal;
            font-weight: normal;
            src: local('EuroStyle Normal'), url('http://sihb.site/assets/css/EuroStyle Normal.woff') format('woff');
        }

        :root {
            --black: #000000;
            --black-darken-1: #222222;
            --black-darken-2: #1F1E1F;
            --yellow: #FBE195;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: red;
            background: -moz-linear-gradient(90deg, var(--black) 0%, var(--black-darken-2) 80%);
            background: -webkit-linear-gradient(90deg, var(--black) 0%, var(--black-darken-2) 80%);
            background: linear-gradient(90deg, darkblue 0%, black 80%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=var(--black), endColorstr=var(--black-darken-2), GradientType=1);
            height: 100vh;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0px;
            font-family: 'Poppins', sans-serif;
        }

        #flex {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 10px;
            flex: 1;
        }

        h1 {
            color: var(--yellow);
            font-weight: bold;
            font-size: 35px;
        }

        h3 {
            font-weight: normal;
            font-size: 25px;
        }

        p {
            padding: 10px;
            background: var(--black-darken-1);
            background: -moz-linear-gradient(90deg, var(--black-darken-1) 0%, var(--black) 80%);
            background: -webkit-linear-gradient(90deg, var(--black-darken-1) 0%, var(--black) 80%);
            background: linear-gradient(90deg, #8ba4ef 0%, cyan 80%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=var(--black-darken-1), endColorstr=var(--black), GradientType=1);
            border-radius: 20px;
        }

        #segundos {
            color: var(--yellow);
            font-weight: 700;
        }

        img {
            width: 100%;
            max-width: fit-content;
        }
    </style>
</head>

<body>
    <div id="flex">
        <img src="https://i.imgur.com/Wqp76sD.png" alt="Erro">

        <div>
            <h1>OPS, ERROR!</h1>
            <h3>A PÁGINA NÃO FOI ENCONTRADA</h3>
            <p>Você será redirecionado para a página principal em <span id="segundos">5</span> segundos</p>
        </div>
    </div>

 

    <script>
        const BASE = '../';
        function startTimer(duration, display) {
            var timer = duration,
                minutes, seconds;
            setInterval(function() {
                if (timer >= 0) {

                    display.textContent = timer;

                    if (--timer < 0) {
                        window.location = `${BASE}`
                    }
                }
            }, 1000);
        }
        window.onload = function() {
            var fiveMinutes = 5,
                display = document.querySelector('#segundos');
            startTimer(fiveMinutes, display);
        }; 
    </script>
</body>

</html>