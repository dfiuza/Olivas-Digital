<!doctype html>
<html lang="pt-br">
<head>	
   <?php wp_head(); ?>
   <?php
		$title = get_the_title();
		if($title == ''){
			$title = 'Home';
		}
	?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/assets/css/template.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</head>
    <body>
    <div class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="">
                <?php the_custom_logo(); ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul id="menu-menu-topo" class="navbar-nav ms-auto flex-nowrap">
                    <li id="menu-item-64" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-64 nav-item">
                        <a href="home" class="nav-link">
                    <span>
                        <i class="fa fa-house"></i>
                        Início
                    </span>
                        </a>
                    </li>
                    <li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-125 nav-item">
                        <a href="/o-digital/contato" class="nav-link">
                    <span>
                        <i class="fa fa-comment"></i>
                        Contato
                    </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>