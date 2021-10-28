<?php
include("./Entities/Admin.php");
include("./Entities/Cours.php");

$admin = new Admin("Amine","amine.mezghich@gmail.com","123456");

$admin->displayAllCourses();