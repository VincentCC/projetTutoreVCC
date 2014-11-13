<?php 

session_start();// tout au début 
/*
.
. le code de verifConnexion.php
.
*/

if ($enreg = @mysql_fetch_array($result)) {
        // Si une ligne a été trouvée c'est que le couple
        // (identifant, mot de passe) est valide
		$_SESSION["login"] = TRUE; // on pourra mettre 1 pour entourage 2 pour organisateur
		//parametrage header organisateur si on peut 
		die();
	}
else{
		$_SESSION["login"] = FALSE; // 0 -> FALSE
		// parametrage d'un header refus 
		die();
	}
?>	
