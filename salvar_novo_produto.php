<?php
    include 'Produtos.class.php';
    session_start();

    $produto1 = new Produtos;
    $produto2 = new Produtos;
    $produto3 = new Produtos;
    $produto4 = new Produtos;
    $produto5 = new Produtos;
    $produto6 = new Produtos;
    $produto7 = new Produtos;
    $produto8 = new Produtos;
    
    $produto1 -> Codigo = "1";
    $produto1 -> Imagem = "https://img.ltwebstatic.com/images3_pi/2022/08/26/16614803768e54304eff95bf2cdbcc0481191a8d44.webp";
    $produto1 -> Descricao = "Boné de beisebol Los Angeles - Musgo Claro";
    $produto1 -> ValorUnit = 80;

    $_SESSION['produtos'][] = $produto1;

    $produto2 -> Codigo = "2";
    $produto2 -> Imagem = "https://img.ltwebstatic.com/images3_pi/2022/08/26/1661480826d434a45458d5f45ded3d4b53c33dc12e.webp";
    $produto2 -> Descricao = "Boné de beisebol Los Angeles - Jeens";
    $produto2 -> ValorUnit = 80;
    
    $_SESSION['produtos'][] = $produto2;

    $produto3 -> Codigo = "3";
    $produto3 -> Imagem = "https://img.ltwebstatic.com/images3_pi/2022/08/26/166148114940b8812a5aaba2726fc32cdd911f557c.webp";
    $produto3 -> Descricao = "Boné de beisebol Los Angeles - Verde";
    $produto3 -> ValorUnit = 80;

    $_SESSION['produtos'][] = $produto3;

    $produto4 -> Codigo = "4";
    $produto4 -> Imagem = "https://img.ltwebstatic.com/images3_pi/2022/08/26/166148082013bb4c5faed44fda3e630699521b2e3e_thumbnail_600x.webp";
    $produto4 -> Descricao = "Boné de beisebol Los Angeles - Marrom";
    $produto4 -> ValorUnit = 80;

    $_SESSION['produtos'][] = $produto4;

    $produto5 -> Codigo = "5";
    $produto5 -> Imagem = "https://img.ltwebstatic.com/images3_pi/2022/07/27/1658901768e7edc711b0851e0463a36021de666b70.webp";
    $produto5 -> Descricao = "Boné de beisebol California - Pink";
    $produto5 -> ValorUnit = 70;

    $_SESSION['produtos'][] = $produto5;

    $produto6 -> Codigo = "6";
    $produto6 -> Imagem = "https://img.ltwebstatic.com/images3_pi/2022/07/27/1658901566c75210c3003f10a1517797957d349a02.webp";
    $produto6 -> Descricao = "Boné de beisebol California - Marrom";
    $produto6 -> ValorUnit = 70;

    $_SESSION['produtos'][] = $produto6;

    $produto7 -> Codigo = "7";
    $produto7 -> Imagem = "https://img.ltwebstatic.com/images3_pi/2022/08/23/1661232073d062f83069cf6d38b5a14712806295c5.webp";
    $produto7 -> Descricao = "Boné de beisebol California - Laranja";
    $produto7 -> ValorUnit = 70;

    $_SESSION['produtos'][] = $produto7;

    $produto8 -> Codigo = "8";
    $produto8 -> Imagem = "https://img.ltwebstatic.com/images3_pi/2022/07/27/1658919386f829040ac7c2d862ae4f69c60eb9dd1b_thumbnail_600x.webp";
    $produto8 -> Descricao = "Boné de beisebol California - Verde";
    $produto8 -> ValorUnit = 70;

    $_SESSION['produtos'][] = $produto8;

    header("Location: listar_produtos.php");
?>