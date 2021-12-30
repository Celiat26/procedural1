<?php 


require("models/staffModel.php");

require("librairies/render.php");
$members = findAllStaff();
render("contact", [
    'members' => $members
]);





?>