// My language implementation, experimental and not fully implemented yet, just a quick test that it works.
$lc = ""; 
    // Check to see that the global language server variable isset()
    // If it is set, we cut the first two characters from that string
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    // Now we simply evaluate that variable to detect specific languages
if($lc == "fr"){
    header("location: fr.php");
} else if($lc == "de"){
    header("location: de.php");
} else if($lc == "es"){
    header("location: es.php");
}
else{ // don't forget the default case if $lc is empty
    header("location: "); // aka english or other languages i have not added
}