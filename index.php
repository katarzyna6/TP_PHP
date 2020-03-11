<?php

$article1 [
"Ella, la policière virtuelle.", 
"La police néo-zélandaise expérimente un dispositif d’intelligence artificielle en ligne pour enregistrer les dépôts de plainte. Le programme Ella prend les traits d’une officière de police sur un écran d’ordinateur ou celui d’un smartphone.", 
"police.jpg",
"Les flux constants d’informations qui transitent par les centres des données gigantesques de la toile, sont analysés par des programmes informatiques qualifiés par les chercheurs « d’intelligents ». Ces systèmes analytiques surpuissants  intéressent les autorités judiciaires de tous pays du monde. Certains pour prévenir la criminalité, d’autres pour juger les coupables dans des tribunaux automatisés.
La police de la Nouvelle-Zélande a choisi une autre voie en transformant ses policiers en chargé d’accueil. Son dispositif basé sur un programme d’intelligence artificielle est en phase de test dans plusieurs commissariats.Tout est parti d’un constat des autorités, 25 % des délits seulement sont signalés dans le pays. En cause, les files d’attente interminables dans les postes de police et l’angoisse de certaines victimes renoncent à déposer une plainte par crainte d’être peu écoutées ou mal comprises par leur interlocuteur humain. Mais voici Ella, une intelligence artificielle connectée dont l’apparence sur un écran d’ordinateur, un smartphone ou celui d’une borne dédiée qui a été installée dans les rues, ressemble à une officière de police en uniforme complet.
Son image réalisée à partir de 26 personnes différentes inspire la sympathie, selon ses créateurs. La machine est capable de répondre sans a priori à toutes les questions qu’on lui pose, les victimes de délit ou d’agression se sentent alors plus en confiance et finissent par déposer plus facilement une plainte. Ce n’est pas la première fois que les autorités de polices dans le monde ont recours à ce subterfuge technologique. Certains programmes permettent déjà de déterminer, en temps réel, si la plainte déposée par une personne est recevable, au Royaume-Uni, en Espagne et même à la Cour européenne des droits de l’homme en utilisant une IA pour faire face à l’accumulation des dossiers en instance.
Des technologies basées sur reconnaissance faciale, sont employées pour prévenir les délits dans les villes, aux États-Unis, au Japon, au Royaume-Uni et surtout en Chine. Des systèmes de prédiction à la « Minority Report » qui « engendreraient fatalement un état policier et totalitaire ? » se demandait, par ailleurs, Philip K. Dick en 1956 en rédigeant sa nouvelle portée à l’écran en 2002 par le réalisateur Steven Spielberg.Toutefois, le système de la Nouvelle-Zélande n’a pas l’ambition de traquer ses citoyens en se contentant d’enregistrer simplement votre plainte. Cette expérimentation d’une durée de trois mois sera, en cas de succès, étendue à tout le pays.",
"Jean Dupont, le 5 mars 2020"
];

$article2 [
    "Amazon Go : bientôt chez Carrefour et Auchan ?",
    "Technologie : Amazon veut étendre son influence dans la grande distribution. Le géant américain propose désormais de doter, dans un délai de « quelques semaines », les distributeurs tiers de sa technologie Just Walk Out.
    Amazon veut s'ouvrir aux distributeurs tiers. Le géant américain propose désormais sa technologie Just Walk Out aux distributeurs tiers pour qu'ils l'utilisent dans leurs magasins, a confirmé lundi sa direction, interrogée par ZDNet. Pour rappel, cette technologie, qui équipe les magasins Amazon Go sans caisse, permet aux clients de prendre ce qu'ils veulent dans un magasin et de le quitter, sans avoir besoin de passer à la caisse.",
    "Amazon Go illustration A 620__w630.jpg",
    "Introduite pour la première fois en 2016 aux Etats-Unis dans les magasins Amazon Go, cette technologie repose sur la vision par ordinateur, la fusion de capteurs et l'apprentissage approfondi pour éliminer les files d'attente aux caisses. Sur un nouveau site web destiné aux distributeurs tiers, Amazon affirme que la nouvelle offre est basée sur une technologie éprouvée qui fonctionne avec une grande fiabilité et précision depuis des années dans nos magasins.
    « Désormais, nous permettons aux distributeurs d'utiliser cette technologie dans leurs magasins avec leur sélection, leur merchandising et leurs fournisseurs pour offrir à leurs clients la possibilité de sortir tout simplement [de  leurs supermarchés] en utilisant notre technologie », a fait savoir le géant américain du commerce en ligne. Celui-ci a déjà appliqué sa technologie aux magasins Amazon Go, dans lesquels les clients téléchargent une application pour faire leurs achats.",
    "Julie Sanchez, le 2 mars 2020"
];

$article3 [
    "Nouvelle technologie 5G : Quels dangers pour la santé?",
    "Le lancement de la 5G ou technologie de communication de « 5ème génération » est prévu pour fin 2020 en France. Si la 5G est particulièrement attendue par les consommateurs avides de nouveaux services innovants, son déploiement va considérablement modifier l’exposition des populations, ce qui soulève la question des risques engendrés pour la santé. L’Anses se mobilise donc pour évaluer les risques sanitaires liés à l’exposition à cette nouvelle technologie.",
    "5G-dangers.jpg",
    "Les promesses de la 5G
    A travers la technologie 5G, les opérateurs ambitionnent de proposer à leurs clients de nouveaux services innovants appliqués aux domaines de la santé, des médias ou des transports. Une offre plus large de services sans-fil et le développement d’objets interconnectés sont au programme. La 5G promet en effet d’augmenter et d’accélérer les capacités actuelles de transfert des données mobiles.
    Le lancement de cette technologie 5G en France est prévu pour fin 2020. Il s’appuiera sur l’utilisation de fréquences déjà utilisées par les précédentes générations de téléphonie mobile (2G, 3G, 4G), ainsi que sur deux nouvelles bandes de fréquences :
    La bande 3,5 GHz pour la couverture en téléphonie mobile 5G dans des zones géographiques étendues.
    Puis la bande 26 GHz pour la couverture en téléphonie mobile 5G dans des périmètres restreints et la communication entre objets connectés.
    Dans ce contexte, les ministères chargés de la santé, de l’environnement et de l’économie ont fait appel à l’Agence nationale de sécurité sanitaire de l’alimentation, de l’environnement et du travail (Anses) pour qu’elle conduise une enquête sur l’exposition de la population aux champs électromagnétiques découlant de cette technologie 5G et aux éventuels effets sanitaires associés.",
    "Jean Dupont, le 29 février 2020"
];

$articles = [$article1, $article2, $article3];














$page = (isset($_GET["page"]))? $_GET["page"] : "article0";

require "require.php";
?>