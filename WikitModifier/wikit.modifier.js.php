<html>
        <title>HELPI UI Modifieur</title>
        <link href="./css/generated.css" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    </head>
    <body>
        <textarea readonly class="textarea" id="js_fle" rows="10" cols="30">
            <?php
            // Made By : Anatole Capelle (github.com/Anatoleee) W/ PhC //
            $fp = fopen("./javascript/wikit.js.template", "r");
            $output = ''; // Variable pour stocker les lignes modifiées

            while (($buffer = fgets($fp)) !== false) {
                if (strpos($buffer, "#_") !== false) {
                    foreach ($_REQUEST as $key => $value) {
                        $buffer = str_replace($key, $value, $buffer);
                    }
                }
                $output .= $buffer;
            }

            echo $output;

            fclose($fp);

            $output_file_path ='./generated/wikit.js';

            file_put_contents($output_file_path, $output);

            ?>
        </textarea>
        <div class="button">
            <div class="button_copy_at">
                <button id="copyButton" class="button_copy">Copier le code</button>
            </div>

            <div class="button_download_at">
                <a class="button_download" href="../generated/wikit.js" download="wikit.js">Télécharger</a>
            </div>

            <div class="button_return_at">
                <a class="button_return" href="../Accueil/php/accueil.php">Accueil</a>
            </div>

        </div>

        <script>
            document.getElementById('copyButton').addEventListener('click', function () {
            var textarea = document.getElementById('js_fle');
            textarea.select(); // Sélectionner le texte de la textarea
            document.execCommand('copy'); // Copier le texte sélectionné dans le presse-papiers
            alert('Le texte a été copié dans le presse-papiers.');
        });
        </script>
    </body>
</html>
