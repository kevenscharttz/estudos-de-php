<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <pre>
        <?php 
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'.$inicio.'%27&@dataFinalCotacao=%27'.$fim.'%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $numero = $_GET["numero"];
            $numero = str_replace (",", ".", $numero);
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            $numeroConvertido = $numero / $cotacao;

            echo "<p>Seus " . numfmt_format_currency($padrao, $numero, "BRL")." equivalem a " .numfmt_format_currency($padrao, $numeroConvertido, "USD"). "</p>";

            echo "<p>Cotação de " .numfmt_format_currency($padrao, $cotacao, "BRL");
            
        ?>
        </pre>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </section>
</body>

</html>