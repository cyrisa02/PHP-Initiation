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
                     $description = $article['descritpion'];

                    require 'front/article.php';

                 }
                
                ?>
            </div>
            
        </body>


    </html>