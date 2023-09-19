<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="localizacao_traumas.css">
   
</head>
<body>
    
    <div class="cabecalho">
        <div class="titulo">
            Localização 
        </div>
        <div class="subtitulo">
            dos Traumas
        </div>
    </div>
    
    <div class="mapa">
    <div class="container">
            <img src="img/body.png" alt="" width= 100%>
            <div class="cabeca"   id="01" onclick="criar(1,'cabeca')"></div>
            <div class="pescoco"  id="02" onclick="criar(1,'pescoco')"></div>
            <div class="ombroD"   id="03" onclick="mudar(3)"></div>
            <div class="ombroE"   id="04" onclick="mudar(4)"></div>
            <div class="bracoE"   id="05" onclick="mudar(5)"></div>
            <div class="bracoD"   id="06" onclick="mudar(6)"></div>
            <div class="peito"    id="07" onclick="mudar(7)"></div>
            <div class="barriga"  id="08" onclick="mudar(8)"></div>
            <div class="bingulin" id="09" onclick="mudar(9)"></div>
            <div class="pernaD"   id="10" onclick="mudar(10)"></div>
            <div class="pernaE"   id="11" onclick="mudar(11)"></div>
        </div>
    </div>
    

   
        <div class="popUP" id="1">
            <div class="m">
                <div class="fechar" onclick="fechar(1)">X</div>
                <img src="img/Cabeca.png" width="120px" height="150px" id="im" alt=""></img>
                Cabeça
            </div>
            <div class="m">
                <div class="tri">
                    <div class="btn">
                        FRA/LUX/ENT
                    </div>
                    <div class="btn">
                        ESVICERAÇÃO
                    </div>
                    <div class="btn">
                        QUEIMADURA
                    </div>
                </div>
                <div class="tri">
                    <div class="btn">
                        FERIMENTOS 
                    </div>
                    <div class="btn">
                        F.A.B/F.A.F
                    </div>
                    <div class="btn">
                        QUEIMADURA
                    </div>
                </div>
                <div class="tri">
                    <div class="btn">
                        HEMORRAGIA
                    </div>
                    <div class="btn">
                        AMPUTAÇÃO
                    </div>
                    <div class="btn">
                        QUEIMADURA
                    </div>
                </div>
            </div>            
        </div>

        
   
</body>
    <script src="localizacao_traumas.js"> </script>
</html>