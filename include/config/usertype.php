<?php 

if(strcmp($_SESSION['user_type'],"Recept")==0){
	header("location: ../Recept.php");}
elseif(strcmp($_SESSION['user_type'],"Doctor")==0){
	header("location: ../OPD.php");}
elseif(strcmp($_SESSION['user_type'],"Pharmacist")==0){
	header("location: Pharmacy.php");}
elseif(strcmp($_SESSION['user_type'],"LabAssistant")==0){
	header("location: Laboratory.php");}
elseif(strcmp($_SESSION['user_type'],"XRayRoomClerk")==0){
	header("location: XRayRoom.php");}
elseif(strcmp($_SESSION['user_type'],"SClerk")==0){
	header("location: SputumRoom.php");}
elseif(strcmp($_SESSION['user_type'],"BRoomClerk")==0){
	header("location: Bleeding.php");}
elseif(strcmp($_SESSION['user_type'],"Admin")==0){
	header("location: Admin.php");}
else{
header("location: profile.php"); // Redirecting To Other Page
}

?>