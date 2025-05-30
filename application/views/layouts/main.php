<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBS Kids Clone</title>
    <link rel="stylesheet" href="<?php echo base_url('css/header.css'); ?>">
</head>
<body>
    <?php $this->load->view('components/header'); ?>
    <?php $this->load->view($content); ?>
</body>
</html> 