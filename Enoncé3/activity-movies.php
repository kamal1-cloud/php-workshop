<?php
$realisateurs = [
    'Martin Scorsese'=> ['The Wolf of Wall Street','Casino','Taxi Driver','The Waltz of the Puppets','After Hours'],
    'Quentin Tarantino'=> ['Once Upon a Time… in Hollywood ','Les Huit Salopards ','Django Unchained ','Inglourious Basterds ','Boulevard de la mort'],
    'Bong Joon-ho'=> ['Parasite','Okja','Snowpiercer, le Transperceneige','Tokyo!','The Host'],
    'Sam Mendes'=> ['1917','SPECTRE','Skyfall','Away We Go','Les Noces rebelles'],
    'Alfonso Cuarón'=> ['Roma','	Gravity','	Un garçon et ses chaussures','The little Princess','	Great hopes']
    
    ];

function showDetails (int $r=5, int $t=5){

    global $realisateurs;                  // pour rendre un variable qui est declaré hors la fonction, accessible ( Portée globale)

    $nbrR = array_rand($realisateurs, $r); //pour determiner le nombre des realisateurs à afficher (note :array_rand() expects parameter 1 to be array)
    $nbrT = array_rand($nbrR, $t);        // pour determiner le nombre de titre à afficher (note: Second argument has to be between 1 and the number of elements in the array)
    
        foreach($nbrR as $cle => $i){
        echo "<b>les films de $i :</b> <br><br>";
    
        foreach ($nbrT as $y){
            echo $realisateurs[$i][$y] .'<br>';
    
        }
    
        echo '<br>';
        }

}showDetails(3,2)





?>