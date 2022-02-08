<?php
    $login = 'John';
    $messageCount = 0;
    $unreadMessagesCount = 28;
    $readMessageCount = 12;
    $messageCount += $unreadMessagesCount;
    $messageCount += $readMessageCount;
    echo 'Bonjour '.$login." ! Il y a ".$messageCount.' messages dans votre boîte de réception !';