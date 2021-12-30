<?php 

require("models/staffModel.php");
require("librairies/render.php");

$id = (int)$_GET['id'];

$member  = findOneStaff($id) ;

render("members",[ 
    "member" => $member
   ]);


?>