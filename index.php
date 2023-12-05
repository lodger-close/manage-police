<?php
require_once 'config.php';
require_once 'db.php';
require_once 'police.php';
require_once 'case.php';

$db = new Database();
$police = new Police($db->getConnection());
$case = new Case($db->getConnection());

// Use $police and $case objects to interact with the database and perform operations
