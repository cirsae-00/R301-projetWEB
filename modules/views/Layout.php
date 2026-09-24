<?php
namespace Views;
class Layout { // PSR-12: opening brace next line
public function __construct(private string $title, private string $content) {}
public function show(): void { // PSR-12: opening brace next line
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- GOOGLE SEARCH ENGINE OPTIMIZATION -->

    <meta name="description" content="Make new discoveries in our small collection, where we introduce you to several games we love!">
    <meta name="keywords" content="AOUAD Ikram, Ikram, FOUGERON Lena, Lena, DJEBIR Yasmine, Yasmine, KHADISSOVA Lezina, Lezina, BUT informatique, IUT Aix-en provence, projet IUT,    projet web, R1.02, BUT Info, AIX, bachelor universitaire de technologie, Aix-en-provence, projet, AMU, Aix Marseille Universite, jeux, games, otome games, indie games, RPG, Love and Deepspace, Guild Wars 2, Undertale, Clash royale">
    <meta name="author" content="AOUAD Ikram, FOUGERON Lena, DJEBIR Yasmine, KHADISSOVA Lezina">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://gamerella.alwaysdata.net/index.html">

    <!-- END -->

    <!-- OPEN GRAPH META TAGS -->

    <meta property="og:title" content="GAMERELLA - HOME">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://gamerella.alwaysdata.net/">
    <meta property="og:description" content="Make new discoveries in our small collection, where we introduce you to several games we love!">
    <meta property="og:image" content="https://gamerella.alwaysdata.net/images/gamerella-website-illustration.webp">
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="1050">
    <meta property="og:image:height" content="450">
    <meta property="og:image:alt" content="Gamerella website image">
    <meta property="og:locale" content="en">
    <meta property="og:site_name" content="Gamerella">

    <!-- END -->


    <!-- TWITTER META TAGS -->

    <meta name="twitter:title" content="GAMERELLA - HOME">
    <meta name="twitter:description" content="Make new discoveries in our small collection, where we introduce you to several games we love!">
    <meta name="twitter:image" content="https://gamerella.alwaysdata.net/images/gamerella-website-illustration.webp">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="gamerella.alwaysdata.net">
    <meta name="twitter:url" content="https://gamerella.alwaysdata.net/">
    <meta name="twitter:image:alt" content="Gamerella website image">

    <!-- END -->

    <!-- MICRODATA MARKUP ADDED BY GOOGLE STRUCTURED DATA MARKUP HELPER -->

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "CollectionPage",
            "name": "Gamerella",
            "description": "Make new discoveries in our small collection, where we introduce you to several games we love!",
            "url": "https://gamerella.alwaysdata.net/",
            "hasPart": [
                {
                    "@type": "VideoGame",
                    "name": "Love and Deepspace",
                    "description": "Love and Deepspace is a 3D sci-fi otome game where players explore a romantic, interactive narrative as a Deepspace Hunter, forging relationships with multiple characters while engaging in action-RPG combat and immersive storytelling.",
                    "publisher": {
                        "@type": "Organization",
                        "name": "Infold Games"
                    },
                    "datePublished": "2024-01-18",
                    "genre": ["Otome", "Romance", "Gacha", "RPG"],
                    "platform": ["Android", "iOS"],
                    "url": "https://loveanddeepspace.infoldgames.com/en-EN/home"
                },
                {
                    "@type": "VideoGame",
                    "name": "Guild Wars 2",
                    "description": "Guild Wars 2 is a free-to-play massively multiplayer online role-playing game (MMORPG) set in the fantasy world of Tyria, featuring fast-paced action combat, a rich persistent world, dynamic events, and deep character progression.",
                    "publisher": {
                        "@type": "Organization",
                        "name": "NCSoft"
                    },
                    "datePublished": "2012-08-28",
                    "genre": ["MMORPG", "RPG", "Adventure"],
                    "platform": ["Microsoft Windows"],
                    "url": "https://www.guildwars2.com/"
                },
                {
                    "@type": "VideoGame",
                    "name": "Life is Strange",
                    "description": "Life is Strange is an episodic graphic adventure video game where players follow Max Caulfield, a photography student who discovers she can rewind time, making choices that affect the story and relationships around her.",
                    "publisher": {
                        "@type": "Organization",
                        "name": "Square Enix"
                    },
                    "datePublished": "2015-01-30",
                    "genre": ["Adventure", "Interactive Story", "Episodic"],
                    "platform": ["Microsoft Windows", "macOS", "PlayStation 3", "PlayStation 4", "Xbox 360", "Xbox One", "iOS", "Android"],
                    "url": "https://lifeisstrange.square-enix-games.com/en-us/"
                },
                {
                    "@type": "VideoGame",
                    "name": "Clash Royale",
                    "description": "Clash Royale is a real‑time multiplayer strategy game where players collect and upgrade cards featuring characters and spells from the Clash universe, and battle in arenas to destroy opponents' towers and earn trophies.",
                    "publisher": {
                        "@type": "Organization",
                        "name": "Supercell"
                    },
                    "datePublished": "2016-03-02",
                    "genre": ["Strategy", "Action", "Card Game"],
                    "platform": ["Android", "iOS"],
                    "url": "https://clashroyale.com/"
                }
            ],
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Aix-en-Provence",
                "addressRegion": "Provence Alpes Cote d'Azur",
                "postalCode": "13100",
                "addressCountry": "FR"
            }
        }
    </script>

    <!-- END -->

    <title><?=$this->title ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/favicon.webp">
    <link  id="theme" rel="stylesheet" href="light_mod.css">
    <script src="app.min.js" defer></script>

</head>
<body>
<?= $this->content; ?>
</body>
</html>
<?php
}
}