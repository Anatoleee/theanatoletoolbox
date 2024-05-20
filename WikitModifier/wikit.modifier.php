<?php
// Made By : Anatole Capelle (github.com/Anatoleee) W/ PhC //
print '
<!DOCTYPE html >
<html lang = "fr" >
<head >
    <meta charset = "UTF-8" >
    <link href = "./css/modifier.css" rel = "stylesheet" >
    <title > Modifieur</title >
    <link rel = "preconnect" href = "https://fonts.googleapis.com" >
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin >
    <link href = "https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel = "stylesheet" >
    <!-- Made By : Anatole Capelle(github . com / Anatoleee) W / PhC -->
</head >
<body >

<form method = "post" action = "./wikit.modifier.js.php" >

    <div class="conteneur" >
        <div class="encadré_couleur" >
            <div class="couleur" >
                <p > Couleurs :</p >
                <p > ------------------</p >
                <div class="background_color_container" >
                    <p > Couleur du fond :</p >
                    <div class="background_color_color" >
                        <input type = "color" name = "#_background-color_#" id = "#_background-color_#" >
                    </div >
                </div >
            </div >
            <br ><br ><br ><br >

            <div class="text_color_container" >
                <p > Couleur du texte :</p >
                <div class="text_color_color" >
                    <input type = "color" name = "#_text-couleur_#" id = "#_text-couleur_#" >
                </div >
            </div >
        </div >

        <div class="encadré_taille" >
            <div class="size" >
                <p > Tailles :</p >
                <p > ------------------------------------------</p >
                <div class="window_size" >
                    <p > Taille de la fênetre(H x L) en %:</p >

                    <div class="container_description_size" >
                            <textarea class="description_text_size" name = "#_hauteur-fenetre-px_#" id = "#_hauteur-fenetre-px_#" ></textarea >
                            <p > x</p >
                            <textarea class="description_text_size"  name = "#_largeur-fenetre-px_#" id = "#_largeur-fenetre-px_#" ></textarea >
                    </div >

                        <div class="button_size" >
                            <div class="button_size_text" >
                                <p > Taille du bouton de chat(H x L) en Px:</p >
                            </div >

                            <div class="container_description_size" >
                            <textarea class="description_text_size" name = "#_hauteur-boutton-chat_#" id = "#_hauteur-boutton-chat_#" ></textarea >
                            <p > x</p >
                            <textarea class="description_text_size"  name = "#_largeur-boutton-chat_#" id = "#_largeur-boutton-chat_#" ></textarea >
                        </div >
                        </div >

                        <div class="border_size" >
                            <p > Rayon de la bordure du bouton :</p >
                            <div class="slider" >
                                <label for="#_rayon-boutton-chat_#" ></label >
                                <input type = "range" id = "#_rayon-boutton-chat_#" name = "#_rayon-boutton-chat_#" min = "0" max = "10" value = "5" >
                                <output for="chiffre" id = "output" > 5</output >
                                <script >
                                    const slider = document . getElementById(\'#_rayon-boutton-chat_#\');
                                    const output = document.getElementById(\'output\');

                                    slider.addEventListener(\'input\', function() {
                                        output.textContent = slider.value;
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="encadré_description">
            <p div class="description_text_block">Description :</p>
            <p div class="description_text_-----">-----------------------------------------------</p>
            <div class="container_description">

                <div class="description_1">
                    <p>Description boutton ouverture nouvelle fenetre:</p>
                    <textarea class="description_text" name="#_description-boutton-ferme_#" id="#_description-boutton-ferme_#"></textarea>
                </div>

                <br><br><br><br>

                <div class="description_2">
                    <p>Description du boutton de fermeture :</p>
                    <textarea class="description_text"  name="#_description-boutton-ouvertureNouvelleOnglet_#" id="#_description-boutton-ouvertureNouvelleOnglet_#"></textarea>
                </div>

                <br><br><br><br>

                <div class="description_3">
                    <p>Description du boutton pleine écran :</p>
                    <textarea  class="description_text" name="#_description-boutton-grandEcran_#" id="#_description-boutton-grandEcran_#"></textarea>
                </div>

                <br><br><br><br>

                <div class="description_4">
                    <p>Description du boutton petit écran :</p>
                    <textarea  class="description_text" name="#_description-boutton-petitEcran_#" id="#_description-boutton-petitEcran_#"></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="envoyer">
        <button class="envoyer_button" onclick="form.submit()">Générer</button>
    </div>
</form>
</body>
</html>
'
?>