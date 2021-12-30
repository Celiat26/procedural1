<?php
require("models/staffModel.php");

require("librairies/render.php");


function allContact() {

    $members = findAllStaff();
    render("contact", [
        'members' => $members
    ]);
}
?>