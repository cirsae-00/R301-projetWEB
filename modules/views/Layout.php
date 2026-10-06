<?php
namespace views;
readonly class Layout { // PSR-12: opening brace next line
public function __construct(private string $title, private string $content) {}
public function show(): void { // PSR-12: opening brace next line
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- GOOGLE SEARCH ENGINE OPTIMIZATION -->

    <meta name="description" content="Jouez au Wordle Informatique!">
    <meta name="keywords" content="FOUGERON Lena, Lena, LEFEBVRE Jimmy , Jimmy , MARTIN Diego, Diego, BUT informatique, IUT Aix-en provence, projet IUT, projet PHP, R3.01, BUT Info, AIX, bachelor universitaire de technologie, Aix-en-provence, projet, AMU, Aix Marseille Universite, jeux, games">
    <meta name="author" content="FOUGERON Lena, LEFEBVRE Jimmy, MARTIN Diego">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://r301-fa.alwaysdata.net/index.html">

    <!-- END -->

    <!-- OPEN GRAPH META TAGS -->

    <meta property="og:title" content="INFODLE - HOME">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://r301-fa.alwaysdata.net/">
    <meta property="og:description" content="Jouez au Wordle Informatique!">
    <meta property="og:locale" content="en">
    <meta property="og:site_name" content="Infodle">

    <!-- END -->

    <!-- MICRODATA MARKUP ADDED BY GOOGLE STRUCTURED DATA MARKUP HELPER -->

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Game",
            "name": "Infodle",
            "description": "Jouez au Wordle Informatique!",
            "url": "https://r301-fa.alwaysdata.net/",
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
    <?php $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); ?>
    <link id="theme" rel="stylesheet" href="<?= $base ?>/_assets/css/light_mod.css">
    <link rel="icon" type="image/x-icon" href="<?= $base ?>/favicon.ico?v=2">


</head>
<body>
<h1>INFODLE</h1>
<?= $this->content; ?>
</body>
</html>
<?php
}
}
