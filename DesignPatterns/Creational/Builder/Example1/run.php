<?php

require __DIR__.'/HtmlPage.php';

$builder = new ProductsHtmlPageBuilder();
$htmlPage = $builder->setPageTitle('demo products page')
    ->addCategories('Men', '/men-category')
    ->addCategories('Women', '/women-category')
    ->addProduct('/img/example1.png', 'sample product 1', 10, 5)
    ->addProduct('/img/example2.png', 'sample product 2', 10, 5)
    ->addProduct('/img/example3.png', 'sample product 3', 10, 5)
    ->addProduct('/img/example4.png', 'sample product 4', 10, 5)
    ->addProduct('/img/example5.png', 'sample product 5', 10, 5)
    ->addProduct('/img/example6.png', 'sample product 6', 10, 5)
    ->addProduct('/img/example7.png', 'sample product 7', 10, 5)
    ->addProduct('/img/example8.png', 'sample product 8', 10, 5)
    ->build();


echo "
<html>
    <head>
        <title>{$htmlPage->getTitle()}</title>
    </head>
    <body>
        {$htmlPage->getBody()}
    </body>
</html>
";

