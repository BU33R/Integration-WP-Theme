<!DOCTYPE html>
<html lang="fr">

<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ACS - <?= the_title() ?></title>
</head>

<body>
  <!-- NAV BAR -->
  <nav id="navTop" class="navbar navbar-expand-lg transition-nav">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?=get_home_url()?>">
        <img class="site-img" src="<?=get_site_icon_url()?>">
      </a>
      <button id="btNav" class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu([
'theme_location' => 'header',
'container' => false,
'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
])
?>
      </div>
    </div>
  </nav>