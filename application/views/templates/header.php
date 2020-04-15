<html>
    <head>
        <title>CI blog</title>
        <link rel='stylesheet' href="https://bootswatch.com/3/flatly/bootstrap.min.css">
        <link rel='stylesheet' href="<?php echo base_url(); ?>assets/css/style.css">
        <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    </head>
    <body>
        
    	<nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <a href="<?php echo base_url(); ?>" class="navbar-brand">ciBlog</a>
                </div>
                <div id="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
                        <li><a href="<?php echo base_url(); ?>about">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url(); ?>posts/create">Create</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
        