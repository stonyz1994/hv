<!-- ////<?php
//header("Location: https://pay.hotmart.com/V95938018A?off=aapsnmsz");
//exit();
// ?>
-->

<?php
// Captura todos os parâmetros da URL atual
$queryString = $_SERVER['QUERY_STRING'];

// Define a URL base para onde será redirecionado
$baseUrl = "https://pay.pagamentos-seguro.xyz/zj6aGn07b8W3wlK?";

// Se houver parâmetros na URL atual, adicione-os à URL de destino
if (!empty($queryString)) {
    $redirectUrl = $baseUrl . '&' . $queryString;
} else {
    // Se não houver parâmetros, use apenas a URL base
    $redirectUrl = $baseUrl;
}

// Redireciona para a URL com ou sem os parâmetros
header("Location: " . $redirectUrl);
exit();
?>
