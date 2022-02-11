 <?php
    require 'back/articles.php';
    require 'back/language.php';  
    $language ='fr';
    $articles = loadArticles();    
    loadLanguage ($language);
        ?> 
    
    <html>
        <head>
            <title>Ma boutique en ligne</title>
        </head>
        <body>
            <?php
            $headerTitle = TEXT_WELCOME;
            require 'front/header.php';
            ?>
            <div>
                <h2><?php 
                  
                echo TEXT_ARTICLES; 
                ?></h2>

                <?php  
                 foreach ($articles as $article) {
                     $title = $article['name'];
                     $price = $article['price'];
                     $description = $article['description'];

                    require 'front/article.php';

                 }
                
                ?>
            </div>
            <div>
                <h1>Front</h1>
                <ul>
                    <li>article.php avec ses div, h3, p</li>
                    <li>header</li>
                    <li>index.php avec valeur de test</li>
                </ul>
                <h1>BACK</h1>
                <ul>
                    <li>articles.php</li>
                    <li>language.php en préparation, on fait d'abord les constants: on réalise text_en et text_fr</li>
                    <li>on termine language.php en intégraznt la fonction</li>
                    <li>on termine index.php avec les require, les fonction. On utilise un var_dump pou rle tableau un pue comme un consol.log pour le tableau</li>
                </ul>
                <h1>Integration</h1>
                <ul>
                    <li>on termine index.php, on utilise le var_dump</li>
                </ul>
            </div>
            
        </body>


    </html>