<?php 
if (empty($_GET["Votre adress"]))
      {echo "Le nom doit être renseigné";} 
elseif (preg_match('/^[A-Z]([_a-zéè~¨-]*\s*)*$/', $_GET["Votre adress"]))
      {echo"format incorect commencer par majuscule SVP";}
else  {echo("OK");}

if (empty($_GET["Votre prenom"]))
{echo "Le prenom doit être renseigné";} 
elseif (preg_match('/^[A-Z]([_a-zéè~¨-]*\s*)*$/', $_GET["Votre prenom"]))
{echo"format incorect commencer par majuscule SVP";}
else  {echo("OK");}

if (empty($_GET["Date de naissance"]))
      {echo "Le nom doit être renseigné";} 
elseif (preg_match('/^[A-Z]([_a-zéè~¨-]*\s*)*$/', $_GET["Date de naissance"]))
      {echo"format incorect commencer par majuscule SVP";}
else  {echo("OK");}

if (empty($_GET[" Votre code postal"]))
{echo "Le code postal doit être renseigné";} 
elseif (preg_match('/^[A-Z]([_a-zéè~¨-]*\s*)*$/', $_GET[" Votre code postal"]))
{echo"format incorect commencer par majuscule SVP";}
else  {echo("OK");}

if (empty($_GET["Votre adress"]))
      {echo "Le nom doit être renseigné";} 
elseif (preg_match('/^\d+(\s[-A-z_éè~¨0-9]+)+\s*$/', $_GET["Votre adress"]))
      {echo"format incorect commencer par majuscule SVP";}
else  {echo("OK");}

if (empty($_GET["Votre Ville"]))
      {echo "La ville doit être renseigné";} 
elseif (preg_match('/^[A-Z]([_a-zéè~¨-]*\s*)*$/', $_GET["Votre Ville"]))
      {echo"format incorect commencer par majuscule SVP";}
else  {echo("OK");}

if (empty($_GET["Votre Email"]))
      {echo "L'email doit être renseigné";} 
elseif (preg_match('/^[-a-z_éè~¨0-9]+(\.[-a-z_éè~¨0-9]*)*@[a-z]+\.[a-z]+$/', $_GET["Votre Email"]))
      {echo"format incorect veuillez entrez un mail valide";}
else  {echo("OK");}


 


 ?>