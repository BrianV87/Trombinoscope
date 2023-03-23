<?php


    // Tableau contenant les informations sur les étudiants
    $wilders = [
      [
        "nom" => "Brian VENTURA",
        "petitTitre" => "Chieur de compètttt",
        "email" => "brian.ventura@gmail.com",
        "description" => "Brian, c'est un mec sportif un peu vantard, mais maladroit et attachant. Il apporte toujours les mêmes chips aux fêtes, mais on lui pardonne car il nous fait rire. On l'aime bien pour sa personnalité un peu loufoque !",
        "image" => "BrianV.jpg",
      ],
      [
        "nom" => "Johann GONIN",
        "petitTitre" => "L'ennemi de la SNCF !",
        "email" => "johann.g@gmail.com",
        "description" => "Johann, c'est le prénom qui évoque la musique, la créativité et la passion. On imagine un artiste talentueux et passionné, peut-être un musicien ou un compositeur. Mais qui sait, peut-être que Johann est également doué pour d'autres formes d'art et qu'il a bien des talents cachés !",
        "image" => "JohannG.jpg",
      ],
      [
        "nom" => "Joss LENOIR",
        "petitTitre" => "Le surfer fêtard !",
        "email" => "Email : joss.lenoir@gmail.com",
        "description" => "Joss, c'est un prénom court et mystérieux qui évoque un peu le monde de la magie et de l'aventure. On imagine une personne courageuse et déterminée, peut-être même un aventurier solitaire. Mais peut-être que derrière ce prénom se cache simplement une personne ordinaire qui aime la simplicité et la discrétion ?",
        "image" => "JossL.jpg",
      ],
      [
        "nom" => "Baptiste CHASSET",
        "petitTitre" => "Le non fibré...",
        "email" => "Email : baptiste.chasset@gmail.com",
        "description" => "Baptiste, c'est un prénom qui évoque la spiritualité, la pureté et la renaissance. On imagine une personne sage et bienveillante, peut-être même un prêtre ou un moine. Mais Baptiste peut également être un homme simple et terre-à-terre.",
        "image" => "BaptisteC.jpg",
      ],
      [
        "nom" => "Julien LISS",
        "petitTitre" => "Le ch'ti !",
        "email" => "Email : julienliss@gmail.com",
        "description" => "Julien évoque la jeunesse, la spontanéité et la légèreté. On peut imaginer un jeune homme insouciant et plein de vie, ou bien un homme mûr qui a su conserver sa vitalité.",
        "image" => "JulienL.jpg",
      ],
      [
        "nom" => "Virginie LEBLEU",
        "petitTitre" => "L'amoureuse du PHP !",
        "email" => "Email : virginielebleu@gmail.com",
        "description" => "Virginie évoque la pureté, la douceur et l'innocence. On peut imaginer une personne sensible et bienveillante, peut-être même un peu rêveuse. Mais Virginie peut également être une femme forte et déterminée, qui porte ce prénom avec fierté et élégance.",
        "image" => "VirginieL.jpg",
      ],
      [
        "nom" => "Laurent MONTMAYEUR",
        "petitTitre" => "Le méchant viking",
        "email" => "Email : laurentviking@gmail.com",
        "description" => "Laurent évoque la force, la loyauté et la persévérance. On peut imaginer un homme sûr de lui et déterminé, peut-être même un peu têtu. Mais Laurent peut également être un homme calme et réfléchi, qui prend le temps de réfléchir avant d'agir et qui est toujours là pour ses proches.",
        "image" => "Laurent.jpg",
      ],
      [
        "nom" => "Nina SCHADEL",
        "petitTitre" => "La râleuse pro",
        "email" => "Email : NinaSchadel@gmail.com",
        "description" => "Nina, c'est une femme élégante et raffinée, mais qui peut également être un peu tête en l'air parfois ! Elle aime les salades bio et les smoothies verts, mais ne dit jamais non à une bonne pizza bien grasse ! Et si jamais vous cherchez une personne pour parler pendant des heures de votre dernier voyage à l'autre bout du monde, Nina est la personne qu'il vous faut !",
        "image" => "NinaS.jpg",
      ],
      [
        "nom" => "Titouan LAHELY",
        "petitTitre" => "La bête, l'homme aux bras d'acier",
        "email" => "Email : titouanlahely@gmail.com",
        "description" => "Titouan, c'est un prénom qui évoque un jeune homme fougueux et aventurier, prêt à conquérir le monde ! Ou bien un petit chaton malicieux qui adore jouer avec des boules de laine ! Mais en tout cas, on peut être sûr que Titouan ne laisse jamais personne indifférent !",
        "image" => "Titouan.jpg",
      ],
      [
        "nom" => "Valentin PHILIPPEAU",
        "petitTitre" => "L'homme discret",
        "email" => "Email : valentinphilippeau@gmail.com",
        "description" => "Valentin, c'est un prénom qui évoque l'amour, les roses et les chocolats en forme de cœur ! Mais attention, derrière son apparence de séducteur, Valentin peut également être un geek passionné de jeux vidéo et de bandes dessinées ! Et si jamais vous cherchez une personne pour vous aider à battre le boss final de votre jeu préféré, Valentin est le compagnon de jeu idéal !",
        "image" => "Valentin.jpg",
      ],
      [
        "nom" => "Victoria GAMBIER",
        "petitTitre" => "La voyageuse",
        "email" => "Email : victoriagambier@gmail.com",
        "description" => "Victoria, c'est une femme qui porte son nom avec fierté et élégance, mais qui peut également se montrer redoutable si on la provoque ! Elle a une garde-robe digne d'une reine, mais peut également dévorer une pizza entière sans sourciller ! Et si jamais vous cherchez une personne pour vous aider à organiser un événement prestigieux, Victoria est la personne qu'il vous faut !",
        "image" => "VictoriaG.jpg",
      ],
      [
        "nom" => "Alexandre PAUQUIN",
        "petitTitre" => "Qu'est-ce qu'il fait là ? Il sait déjà tout !",
        "email" => "Email : alexandre.pauquin@gmail.com",
        "description" => "Alexandre, c'est un prénom qui évoque la grandeur et la puissance, mais qui peut également cacher une certaine maladresse ! Il aime se vanter de ses exploits sportifs, mais peut également tomber dans les escaliers en public ! Et si jamais vous cherchez une personne pour animer une soirée avec des blagues vaseuses, Alexandre est le roi de l'humour potache !",
        "image" => "AlexandreP.jpg",
      ],
      [
        "nom" => "Alexis MICHELAS",
        "petitTitre" => "Le futur papa !",
        "email" => "Email : alexis.michelas@gmail.com",
        "description" => "Alexis ! Le nom qui peut faire penser à un conquérant ambitieux ou à un petit chaton mignon qui adore jouer avec des boules de laine !",
        "image" => "AlexisM.jpg",
      ],
      [
        "nom" => "Arthur GAYCHET",
        "petitTitre" => "Le benjamin !",
        "email" => "Email : arthur.gaychet@gmail.com",
        "description" => "Arthur, c'est un prénom qui évoque les légendes et les chevaliers, mais qui peut également être porté par un fan de comics et de super-héros ! Il est peut-être un peu maladroit, mais il compense par sa créativité et son imagination débordante ! Et si jamais vous cherchez une personne pour vous accompagner dans une quête épique, Arthur est le compagnon idéal pour une aventure hors du commun !",
        "image" => "Arthur.png",
      ],
      [
        "nom" => "Vincent RAVANEL",
        "petitTitre" => "L'homme aux lunettes !",
        "email" => "Email : vincentravanel@gmail.com",
        "description" => "Vincent, c'est un prénom qui évoque la finesse et la subtilité, mais qui peut également cacher une passion pour la cuisine bien grasse ! Il peut être un peu sarcastique parfois, mais c'est juste pour cacher sa gentillesse légendaire ! Et si jamais vous cherchez une personne pour vous accompagner dans une soirée karaoké, Vincent est le chanteur le plus excentrique et le plus drôle que vous pourriez trouver !",
        "image" => "VincentR.jpg",
      ],


    ];
  ?>