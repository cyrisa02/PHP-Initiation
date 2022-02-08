<?php
    $ron = ['name' => 'Ron Weasley', 'knuts' => 10, 'sickles' => 2, 'galleons' => 5];
    $knuts = $ron['knuts'];
    $knuts += $ron['sickles'] * 29;
    $knuts += $ron['galleons'] * 17 * 29;
    echo $ron['name'].' possède l\'équivalent de '.$knuts.' noises';

    echo "<br>";

    echo "<br>";


    $teams = [
        [
            'name' => 'Golden Guardians', 
            'members' => [
                ['firstName' => 'Kevin', 'lastName' => 'Yarnell'],
                ['firstName' => 'Can', 'lastName' => 'Çelik'],
                ['firstName' => 'Greyson', 'lastName' => 'Gilmer'],
                ['firstName' => 'Victor', 'lastName' => 'Huang'],
                ['firstName' => 'Choi', 'lastName' => 'Jae-hyun'],  
                ['firstName' => 'Yuri', 'lastName' => 'Jew'], 
            ],
            'coach' => 
                ['firstName' => 'Nick', 'lastName' => 'Smith']
            
        ],
        [
            'name' => 'Immortals', 
            'members' => [
                ['firstName' => 'Paul', 'lastName' => 'Boyer'],
                ['firstName' => 'Jake', 'lastName' => 'Puchero'],
                ['firstName' => 'Jérémy', 'lastName' => 'Valdenaire'],
                ['firstName' => 'Johnny', 'lastName' => 'Ru'],
                ['firstName' => 'Nickolas', 'lastName' => 'Surgent'],  
            ],
            'coach' => ['firstName' => 'Thomas', 'lastName' => 'Si-Hassan']
            
        ],
    ];

    echo $teams [0] ['name'];

    echo "<br>";

    echo $teams [1] ['members'] [0] ['firstName'] ;

    echo "<br>";

    echo $teams [0] ['coach'] ['firstName'];

 
echo '<br>';
echo $teams[1]['coach']['lastName'];



$numbers = [19, 21, 2, 15, 8];
sort($numbers);
array_shift($numbers);
echo $numbers[2];
    
