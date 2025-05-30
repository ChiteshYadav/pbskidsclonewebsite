<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo isset($heading) ? $heading : 'PBS KIDS'; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('css/header.css'); ?>">
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="newsletter-link">
            <span>Newsletter</span>
        </div>
        <div class="top-right">
            <a href="<?php echo base_url(''); ?>">HOME</a>
            <a href="<?php echo base_url('games'); ?>">GAMES</a>
            <a href="<?php echo base_url('videos'); ?>">VIDEOS</a>
            <a href="<?php echo base_url('help'); ?>">HELP</a>
            <!-- Add Gear Icon here if needed -->
        </div>
    </div>
</body>
</html>