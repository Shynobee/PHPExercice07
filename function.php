<?php 

function compare($a, $b) {
    if($a > $b) {
        echo "a est plus grand";
    } else {
        echo "b est plus grand \n";
    }
    return;
}

compare(5, 6);

function salutation($prenom, $nom, $age) {
    if($age <=  1) {
        echo "Bonjour ${prenom} ${nom}, tu as ${age} an \n";
    } else {
        echo "Bonjour ${prenom} ${nom}, tu as ${age} ans \n";
    }
}

salutation('walid', 'khouaji', 28);

$tous = [
    'walid',
    'quentin',
    'magali',
    'bash',
];

$phrase = 'Bonjour a toi ';

function salut($tous) {
    $phrase = 'Bonjour a toi ';
    if(is_string($tous)) {
        echo $tous;
    } elseif(is_array($tous)) {
        foreach($tous as &$value) {
            echo $phrase . "\n" . $value . ",\n";
        }
    } else {
        echo "Bonjour a toi l'étranger";
    }
}
//echo $phrase . $tous;


salut($tous);

/*for($i = 0; $i <= count($tous); $i++) {
    echo $phrase . $tous;
}*/
?>