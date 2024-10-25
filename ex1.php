<?php
require_once("model/Comercial.php");
require_once("model/Industrial.php");
require_once("model/Residencial.php");
require_once("model/Texto.php");
$texto = new Texto();
function menu()
{
    system("clear");
    global $texto;
    $itens = ["Consumo Residencial","Consumo Comercial","Consumo Industrial","Finalizar"];
    $texto->montar_tabela($itens);
    $esc = readline("Escolha: ");
    switch($esc)
    {
        case 1:
            residencial();
            menu();
        break;
        case 2:
            comercial();
            menu();
        break;
        case 3:
            industrial();
            menu();
        break;
        case 4:
            system("clear");
            die;
        break;
        default:
            menu();
        break;
    }
}
function residencial()
{
    system("clear");
    $consumo = readline("Escreva seu consumo em KW/H: ");
    if(is_numeric($consumo))
    {
        $consumo = floatval($consumo);
        $residencia = new Residencial();
        $residencia->setConsumo($consumo);
        system("clear");
        $total = $residencia->getValorFatura();
        print "Seu consumo foi ".$residencia->getConsumo()." e valor a pagar é R$".number_format($total,2,",",".")."\n";
        readline("");
    }
    else
    {
        print "Valor não numérico\n";
        readline("");
    }
}
function comercial()
{
    system("clear");
    $consumo = readline("Escreva seu consumo em KW/H: ");
    if(is_numeric($consumo))
    {
        $consumo = floatval($consumo);
        $comercio = new Comercial();
        $comercio->setConsumo($consumo);
        system("clear");
        $total = $comercio->getValorFatura();
        print "Seu consumo foi ".$comercio->getConsumo()." e valor a pagar é R$".number_format($total,2,",",".")."\n";
        readline("");
    }
    else
    {
        print "Valor não numérico\n";
        readline("");
    }
}
function industrial()
{
    system("clear");
    $consumo = readline("Escreva seu consumo em KW/H: ");
    if(is_numeric($consumo))
    {
        $consumo = floatval($consumo);
        $industria = new Industrial();
        $industria->setConsumo($consumo);
        system("clear");
        $total = $industria->getValorFatura();
        print "Seu consumo foi ".$industria->getConsumo()." e valor a pagar é R$".number_format($total,2,",",".")."\n";
        readline("");
    }
    else
    {
        print "Valor não numérico\n";
        readline("");
    }
}
menu();
?>