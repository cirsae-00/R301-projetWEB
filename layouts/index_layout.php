<?php
namespace Blog\View;
class Layout { // PSR-12: opening brace next line
public function __construct(private string $title, private string $content) {}
public function show(): void { // PSR-12: opening brace next line
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title><?= $this->title; ?></title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
<?= $this->content; ?>
</body>
</html>
<?php
}
}