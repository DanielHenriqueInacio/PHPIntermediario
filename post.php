<?php

$ar = $_FILES['ar'];


move_uploaded_file($ar['tmp_name'], "uploads/" . $ar['name']);