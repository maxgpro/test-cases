<?php
session_start();


function tester1($a)
{
    if ($a) {
        echo "<pre>";
        print_r($a);
        echo '</pre>';
    } else echo '== UNDEFINED ==';
}


function countViews() {
    if (!file_exists("count.txt")) {
        file_put_contents("count.txt", "");
    }
    $file = file("count.txt");
    $count = implode("", $file);
    $count++;
    $myfile = fopen("count.txt","w");
    fputs($myfile,$count);
    fclose($myfile);
}


function countUniqueViews() {

    if (!isset($_SESSION['view'])) {
        $_SESSION['view'] = 1;

        if (!file_exists("countUnique.txt")) {
            file_put_contents("countUnique.txt", "");
        }
        $file = file("countUnique.txt");
        $count = implode("", $file);
        $count++;
        $myfile = fopen("countUnique.txt","w");
        fputs($myfile,$count);
        fclose($myfile);
    }
}


countViews();
countUniqueViews();
?>

<img style="display:block; background-color:yellow; width:100px; height:100px" src="" alt="banner.php">
