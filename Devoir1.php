<?php
   $tab = array(
     "NOM"=>"DIALLO",
     "PRENOM"=>"KHADIDIATOU",
     "TELEPHONE"=>"776107228",
     "EMAIL"=>"kadiallo96@gmail.com",
     "ADRESSE"=>"Madina");
     "Date de naissance"=>"01/01/1996";
     "Identifiant slack"=>"kadiallo96gmail.com";
   
   ?>
<html>
<head>
<meta charset = 'utf_8'>
<style>
 table
{
	border-collapse : collapse;
	border : 2px solid black;
	background-color : gray;
}
td,th
{
	border : 2px solid black;
	height : 20;
	width : 100;
	
    	
}
.point{
     height : 20;
	 width : 15;
	 }

</style>
<title>tableau pour récupération de mes informations</title>

<body>
<div align = 'center'>
<table>
<tr>
<td colspan = "2">
<img src = 'khadidiatou.jpg' height = '300' , width ='320'>
</td>
</tr>
<?php
   foreach($tab as $key=>$valeur ){
       ?>
        <tr>
             <td><?=$key ?></td>
             <td><?=$valeur ?></td>
       </tr>
 <?php
   }
   ?>
</table>
</div>
</body>
</html>
