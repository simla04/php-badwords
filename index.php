<!-- <?php
// stampa la stringa in pagina
echo 'ciao'
    ?> -->

<?php
$paragrafo = 'Mr e Mrs Dursley, di Privet Drive numero 4, erano orgogliosi di poter affermare che erano
perfettamente normali, e grazie tante. Erano le ultime persone al mondo da cui aspettarsi che
avessero a che fare con cose strane o misteriose, perché sciocchezze del genere proprio non le
approvavano. Mr Dursley era direttore di una ditta di nome Grunnings, che fabbricava trapani. Era
un uomo corpulento, nerboruto, quasi senza collo e con un grosso paio di baffi. Mrs Dursley era
magra, bionda e con un collo quasi due volte più lungo del normale, il che le tornava assai utile,
dato che passava gran parte del tempo ad allungarlo oltre la siepe del giardino per spiare i vicini. I
Dursley avevano un figlioletto di nome Dudley e secondo loro non esisteva al mondo un bambino
più bello. Possedevano tutto quel che si poteva desiderare, ma avevano anche un segreto, e il
loro più grande timore era che qualcuno potesse scoprirlo. Non credevano che avrebbero potuto
sopportare che qualcuno venisse a sapere dei Potter. Mrs Potter era la sorella di Mrs Dursley, ma
non si vedevano da anni. Anzi, Mrs Dursley faceva addirittura finta di non avere sorelle, perché
Mrs Potter e quel buono a nulla del marito non avrebbero potuto essere più diversi da loro di così.
I Dursley rabbrividivano al solo pensiero di quel che avrebbero detto i vicini se i Potter si fossero
fatti vedere nei paraggi. Sapevano che i Potter avevano anche loro un figlio piccolo, ma non lo
avevano mai visto. E il ragazzino era un altra buona ragione per tenere i Potter a distanza: non
volevano che Dudley frequentasse un bambino di quel genere. Quando i coniugi Dursley si
svegliarono, la mattina di quel martedì grigio e coperto in cui inizia la nostra storia, nel cielo
nuvoloso nulla faceva presagire le cose strane e misteriose che di lì a poco sarebbero accadute in
tutto il paese. Mr Dursley scelse canticchiando la cravatta da giorno più anonima del suo
guardaroba, e Mrs Dursley continuò a chiacchierare ininterrottamente mentre con grande sforzo
costringeva sul seggiolone Dudley che urlava a squarciagola. Nessuno notò il grosso gufo bruno
che passò con un frullo d ali davanti alla finestra. '
    ?>

<!DOCTYPE html>
<html lang='en'>

    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Bad Word </title>

        <!-- FontAwesome 6.2 -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
            integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
            crossorigin='anonymous' referrerpolicy='no-referrer' />

        <!-- Bootstrap 5.2 css -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
            integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
        <link rel='stylesheet' href='assets/style.css'>
    </head>

    <body>

        <div class="container p-3
        ">
            <div class="row">
                <div class="col">
                    <p class="text-info">
                        <?php echo $paragrafo ?>
                    </p>
                    <p class="text-info bg-dark">
                        il testo è lungo:
                        <?php echo strlen($paragrafo) ?>
                        caratteri
                    </p>
                </div>
                

            </div>

        </div>
        <?php

        if (empty($_GET['censura'])) {
            echo 'non hai una parola da censurare ancora';
        } else {
            $paragrafoModificato = str_replace($_GET['censura'], '***', $paragrafo);
            echo 'La lunghezza del paragrafo censurato è: '.strlen('paragrafoModificato');
            echo $paragrafoModificato;

            
        }

        ?>
        <!-- Bootstrap 5 script -->
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'
            integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'>
            </script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js'
            integrity='sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk' crossorigin='anonymous'>
            </script>
    </body>

</html>