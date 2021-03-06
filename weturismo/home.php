<?php

session_start();
require_once("conexao.php");

$nome_usuario = $_POST['usuario'];
$senha = addslashes($_POST['senha']);
$senhacrip = addslashes(md5($senha));

$sql = "SELECT * FROM usuarios WHERE usuario='$nome_usuario' AND senha='$senhacrip'";
$sql = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WE Turismo</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript">
        window.onload = function() {
            document.querySelector(".menuMobile").addEventListener("click", function() {
                if (document.querySelector(".menu nav ul").style.display == 'flex') {
                    document.querySelector(".menu nav ul").style.display = 'none';
                    document.getElementById("secao").style.marginTop = '0px'

                } else {
                    document.querySelector(".menu nav ul").style.display = 'flex';
                    document.getElementById("secao").style.marginTop = '110px'
                }
            });
        };
    </script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.js"></script>
</head>

<body>
    <header class="container-base">
        <div class="cabecalho" id="inicio">
            <a href="index.html">
                <div class="logo">
                    <img src="imagens/logoWE.png" alt="">
                </div>
            </a>
            <div class="menu">
                <nav>
                    <div class="menuMobile">
                        <div class="mm_line"></div>
                        <div class="mm_line"></div>
                        <div class="mm_line"></div>
                    </div>
                    <ul>
                        <li><a href="index.html"> <img src="imagens/icones/home.png" alt=""> INÍCIO </a></li>
                        <li><a href="index.html#proximas-viagens"> <img src="imagens/icones/proximas-viagens.png" alt=""> PRÓXIMAS
                                VIAGENS </a></li>
                        <li><a href="index.html#ultimas-viagens"> <img src="imagens/icones/proximas-viagens.png" alt=""> ÚLTIMAS VIAGENS </a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <?php
    if ($sql->rowCount() > 0) {
        $dados = $sql->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id'] = $dados['id'];
        $_SESSION['usuario'] = $dados['usuario'];
    ?>
        <section  class="container-base">
            <div class="area-proximas-viagens">
                <div class="area-titulo">
                    <div class="title-proximas-viagens">
                        Próximas Viagens
                    </div>
                    <div class="borda-proximas-viagens">
                    </div>
                </div>
                <div class="proximas-viagens" id="proximas-viagens">
                    <div class="viagens">
                        <div class="imagem-viagem">
                            <a href="caribe.php"> <img src="imagens/proximas-viagens/caribe.png" alt=""> </a>
                        </div>
                        <div class="botao-mais">
                            <a href="jericoacoara.html"> Mais Informações... </a>
                        </div>
                    </div>
                    <div class="viagens">
                        <div class="imagem-viagem">
                            <a href="reserva-reveillon.php"> <img src="imagens/proximas-viagens/carolina.png" alt=""> </a>
                        </div>
                        <div class="botao-mais">
                            <a href=""> Mais Informações... </a>
                        </div>
                    </div>
                    <div class="viagens">
                        <div class="imagem-viagem">
                            <a href="reserva-rio.php"> <img src="imagens/proximas-viagens/jeri.png" alt=""> </a>
                        </div>
                        <div class="botao-mais">
                            <a href=""> Mais Informações... </a>
                        </div>
                    </div>
                    <div class="viagens">
                        <div class="imagem-viagem">
                            <a href=""> <img src="imagens/proximas-viagens/jeri-BV.png" alt=""> </a>
                        </div>
                        <div class="botao-mais">
                            <a href=""> Mais Informações... </a>
                        </div>
                    </div>
                    <div class="viagens">
                        <div class="imagem-viagem">
                            <a href=""> <img src="imagens/proximas-viagens/turne-mercosul.png" alt=""> </a>
                        </div>
                        <div class="botao-mais">
                            <a href=""> Mais Informações... </a>
                        </div>
                    </div>
                    <div class="viagens">
                        <div class="imagem-viagem">
                            <a href=""> <img src="imagens/proximas-viagens/valparaiso.png" alt=""> </a>
                        </div>
                        <div class="botao-mais">
                            <a href=""> Mais Informações... </a>
                        </div>
                    </div>
                </div>
        </section>
        <footer class="container-base">
            <div class="rodape">
                <div class="logo-rodape">
                    <img src="imagens/logoWE.png" alt="">
                </div>
                <div class="area-rede-sociais">
                    <div class="rede-sociais">
                        <a href="https://www.instagram.com/weturismo/" target="__blank">
                            <img src="imagens/icones/instagram.png" alt="">
                            <span> weturismo </span>
                        </a>
                    </div>
                    <div class="rede-sociais">
                        <a href="https://www.facebook.com/elizabeth.mendes.7311?fref=search&__tn__=%2Cd%2CP-R&eid=ARAB1fyE_wSBxPsJBij2nluzjvWlJX824de9JnUVN3v1S0vrk_uL4tT7JMUENYjscitAV4n4M1fob973" target="__blank">
                            <img src="imagens/icones/facebook.png" alt="">
                            <span> WETur </span>
                        </a>
                    </div>
                    <div class="rede-sociais">
                        <a href="https://whats.link/weturismo" target="__blank">
                            <img src="imagens/icones/whatsapp.png" alt="">
                            <span> (99) 98161-7395 </span>
                        </a>
                    </div>
                    <div class="endereco">
                        <span>Avenida Cohab, número 34 <br> Cohab I, Bacabal - MA, 65700-000</span>
                    </div>
                </div>
                <div class="area-localizacao">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.972855955401!2d-44.79487618572715!3d-4.225553196928155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9b003a3f8b4b27de!2sWE%20turismo!5e0!3m2!1spt-BR!2sbr!4v1571100840004!5m2!1spt-BR!2sbr" width="224" height="224" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="direitos-autorais">
                <span> &copy; Copyright 2019 - Todos os Direitos Reservados - Desenvolvido por André Santos </span>
            </div>
        </footer>
</body>

</html>

<?php
    } else {
        header('Location: login.php?erro=1');
    }
?>