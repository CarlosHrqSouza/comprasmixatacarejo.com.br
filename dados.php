<?php
$empresa = "CompraMix Atacarejo";
$descricao = "";
$keywords = "";

$endereco = "Nome da Rua, nº 00";
$bairro = "Bairro";
$cidade = "Cidade/UF";
$cep = "CEP. 00000-000";
$email = "contato@dominio.com.br";
$telefone = "(00) 0000-0000";
$whatsapp = "(00) 9.0000-0000";

function whatsapp($texto = null, $num = null)
{
    global $whatsapp;
    $whats = $num ?: $whatsapp;
    $whats = str_replace(array('(', ')', ' ', '-', '.'), "", $whats);
    $link = 'https://wa.me/55';

    if (!empty($texto)):
        return $link . $whats . '?text=' . $texto;
    else:
        return $link . $whats;
    endif;
}
function phone_link($phone)
{
    $url = 'tel:';
    $phone = preg_replace("/[^0-9]/", '', $phone);
    $retorno = $url . $phone;
    return $retorno;
}

// LINKS DAS REDES SOCIAIS
$facebook = "https://www.facebook.com/";
$instagram = "https://www.instagram.com/";
$linkedin = "https://www.linkedin.com/";

// ANO DESENVOLVIMENTO DO SITE
function ano_copy($ano = 2025)
{
    if ($ano < date('Y')):
        return $ano . ' - ' . date('Y');
    else:
        return $ano;
    endif;
}
