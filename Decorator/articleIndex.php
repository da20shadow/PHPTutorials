<?php
include "Article.php";
include "HtmlDecorator.php";
include "PdfDecorator.php";
include "DecoratorFactory.php";

$article = new Article();
echo $article->getTitle();

echo "<br>";

//Formatting the article data "html" or "pdf"
$decorator = DecoratorFactory::select("pdf",$article); //just adding "pdf" or "html"

echo "Formatted Title Output:";
echo $decorator->getFormattedTitleOutput();

echo "Formatted Article content Output:";
echo $decorator->getFormattedContentOutput();