<?php
$file3 = 'lire.txt';
unlink($file3);
/**
 * 1. Créez une variable contenant une chaîne de caractères contenant du texte lorem ( 1 seule ligne suffit )
 * 2. Ajouter le contenu de cette variable dans un fichier avec la méthode de votre choix.
 * --> Attention à bien fermer votre fichier si vous utilisez fopen()
 */
// TODO Votre code ici.
  $lorem ="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequuntur distinctio doloribus libero magnam. Amet aut ex, expedita facilis fuga iusto laborum maxime nihil nobis nostrum repellendus saepe totam! Deserunt!";
 $file = fopen('lire.txt','a+b');
 if($tmp = fwrite($file,$lorem)){
    fseek($file,0);
    while ($tmp2 = fgets($file)){
        echo $tmp2;
    }
 }
echo "<br>";

fclose($file);
/**
 * 3. Créez un tableau contenant au moins 10 chaînes de caractère au choix.
 * 4. Faites en sorte d'ajouter chaque chaîne de caractère de ce tableau au fichier créé dans la première partie ( point 2 )
 * --> N'oubliez pas de fermer vos fichiers.
 * --> Attention: les chaînes de caractères doivent s'ajouter à la suite du contenu déjà existant, pas d'écrasement.
 */
// TODO Votre code ici
$file2 = fopen('lire.txt','a+b');
$tab=["com1","com2","com3","com4","com5","com6","com7","com8","com9","com10"];
foreach ($tab as $item){
    $tmp = fwrite($file2,$item);
}

fclose($file2);

/**
 * 5. Trouvez une solution pour afficher à l'aide d'un simple echo l'extension du fichier index.php
 */
// TODO Votre code ici
$info = 'index.php';
if (file_exists($info)){
    $info = pathinfo($info);
    echo "<br>".$info['extension']."<br>";
}


/**
 * 6. Testez si le fichier 'toto' existe, sil n'existe pas, afficher un texte distant que ce fichier n'existe pas !
 */
// TODO Votre code ici.
$info = 'toto';
if (!file_exists($info)){
    echo "<br> $info n'existe pas<br>";
}

/**
 * Super bonus.
 * Parcourrez votre fichier, à chaque fois que vous rencontrez le caractère 'a', remplacez le par le caractère '@'
 * Attention, il y a un piège avec les pointeurs, et une manière très simple de procéder... réfléchissez...
 */
// TODO Votre code ici si vous faites le bonus.
$contents = file_get_contents('lire.txt');
$contents = str_replace("a","@",$contents);

$file4 = fopen('lire.txt','wb');
$tmp = fwrite($file4,$contents) ;

fclose($file4);
$contents2 = file_get_contents('lire.txt');
echo "<br>".$contents2;
