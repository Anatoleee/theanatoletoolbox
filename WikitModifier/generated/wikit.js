
/* Made By : Anatole Capelle (github.com/Anatoleee) W/ PhC */
<script type="text/javascript" src="https://webchat.wikit.ai/webchat-embed.js"></script>
<script type="text/javascript">
    wrapWebchat({
        color: '#243469', // La couleur d'arrière plan du bouton de chat et du bandeau en haut de la fenêtre.
        webchatParams: { // Ces paramètres permettront d'identifier l'utilisateur.
            userId: '__WIKIT_userId__', // <-- À DÉFINIR DYNAMIQUEMENT PAR L'APPLICATION APPELANTE
            userIdType: 'login', // <-- À POSITIONNER : login OU email
            userFirstName: '__WIKIT_userFirstName__', // <-- À DÉFINIR DYNAMIQUEMENT PAR L'APPLICATION APPELANTE (OU LAISSER VIDE)
            userLastName: '__WIKIT_userLastName__', // <-- À DÉFINIR DYNAMIQUEMENT PAR L'APPLICATION APPELANTE (OU LAISSER VIDE)
            webChatToken: 'Mzk3ZDcwOTUtZGIyNi00ZGU5LTkwYzQtZThhYWM1MzUxMDM2LTE2NTEyMzU4MjQzMTI=',
            originId: '', // Indique l'endroit où est intégré le webchat (Information qui peut être retrouvée dans l'entraînement),
            customParams: {}, // Des paramètres personnalisés à ajouter dans l'url du chatbot
        },
       height: '', // La hauteur de la fenÃªtre.
           width: '', // La largeur de la fenÃªtre.
           chatButtonIcon: { // ParamÃ©trage du bouton de chat.
           url: 'plugins/CD58ITypes/images/webchat-wikit-logo.png', // Ajouter une image en arriÃ¨re plan du bouton de chat.
           altText: null, // Text alternatif pour l'image (accessibilitÃ©).
           height: '', // Hauteur du bouton de chat.
           width:'', // Largeur du bouton de chat.
           borderRadius: '5', // Rayon de la bordure du bouton de chat.
       },
           chatButtonTooltip: { // Afficher une bulle de texte Ã  cÃ´tÃ© du bouton de chat.
           text: null, // Le texte du message
           backgroundColor: '#000000', // La couleur d'arriÃ¨re plan.
           textColor: '#000000', // La couleur du texte.
           visibility: 'hidden', // La visibilitÃ© de la bulle au passage de la souris ('hidden') ou tout le temps ('visible').
       },
           chatButtonAnimation: { // Animation du bouton de chat
           delay: null, // DÃ©lais en millisecondes aprÃ¨s lequel le bouton s'anime
           enabled: false, // Active l'animation
           openTooltip: false // Ouvre l'info-bulle aprÃ¨s l'animation
       },
           headerButtons: { // Le texte d'accessibilitÃ© des boutons au haut de la fenÃªtre du webchat.
           color: '#fff',
           closeIconDescription: '',
           launchIconDescription: '',
           maximizeIconDescription: '',
           minimizeIconDescription: '',
       },
           opening: { // L'Ã©tat (ouvert / fermÃ©) du webchat en arrivant sur la page. Noter qu'une ouverture automatique n`'est pas possible sur mobile.
           mode: '__opening_mode__', // 3 modes possibles, ouvert ('open'), fermÃ© ('close') ou ouvert aprÃ¨s un dÃ©lais ('delay').
           delay: null, // Le dÃ©lais en millisecondes pour l'ouverture du webchat.
           memorize: true, // MÃ©moriser l'Ã©tat d'ouverture du webchat.
       },
           position: { // La position du bouton de chat et du webchat dans le navigateur.
           right: '2rem',
           bottom: '10rem',
       },
    });
</script>