
<?php
$this->load->library('Layouts');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url();?>assets/images/ico16.png" type="image/gif" sizes="16x16">
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/ico16.png" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/ico16.png" />
  <meta name="description" content="<?php echo $description; ?>">
  <meta property="og:title" content="bamboo tajur">
  <meta property="og:type" content="website" />
  <meta property="og:description" content="bamboo tajur" />
  <meta property="og:url" content="<?php echo base_url();?>" />
  <meta property="og:site_name" content="Bamboo Tajur" />
  <meta property="og:locale:alternate" content="id_ID" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Stylesheet -->
  <?php echo $this->layouts->print_includes('css'); ?>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- End Stylesheet-->

  <?php
    if (http_response_code() != 404) {
  ?>
      <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MHZQ3QG');</script>
    <!-- End Google Tag Manager -->
  <?php
    }
   ?>
</head>
<body>
  <?php
    if (http_response_code() != 404) {
  ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHZQ3QG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <?php
    }
   ?>

<nav id="navbar" class="" style="z-index:3;">
    <div class="nav-wrapper">
        <!-- Navbar Logo -->
        <div class="logo">
            <!-- Logo Placeholder for Inlustration -->
            <a href="<?= base_url();?>">
                <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10"/>
            </a>
        </div>

        <!-- Navbar Links -->
        <ul id="menu">
          <?php echo $this->uri->segment(1) != '' ? '<li><a href="'.base_url().'">Home</a></li>' : ''; ?>
          <li><a href="<?= site_url(['the-concept'])?>" <?php echo $this->uri->segment(1) == 'the-concept' ? 'class="active"' : ''; ?> >The Concept</a></li>
          <li><a href="<?= site_url(['the-homes'])?>" class="dropdown-toggle <?php echo $this->uri->segment(1) == 'the-homes' ? 'active' : ''; ?>"  data-toggle="dropdown">The Homes&nbsp;<span><i class="fas fa-caret-down"></i></span></a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#akane-tab" >Tipe Akane</a>
                  <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#momiji-tab">Tipe Momiji</a>
              </div>
          </li>
          <li><a href="<?= site_url(['the-facilities'])?>" <?php echo $this->uri->segment(1) == 'the-facilities' ? 'class="active"' : ''; ?> >The Facilities</a></li>
          <li><a href="<?= site_url(['news'])?>" <?php echo $this->uri->segment(1) == 'news' ? 'class="active"' : ''; ?> >News</a></li>
          <li><a href="<?= site_url(['disclaimer'])?>" <?php echo $this->uri->segment(1) == 'disclaimer' ? 'class="active"' : ''; ?> >Disclaimer</a></li>
          <li><a href="<?= site_url(['contact'])?>" <?php echo $this->uri->segment(1) == 'contact' ? 'class="active"' : ''; ?> >Contact</a></li>
        </ul>
    </div>
</nav>

<!-- Menu Icon -->
<div class="menuIcon">
    <span class="icon-menu icon-bars"></span>
    <span class="icon-menu icon-bars overlay"></span>
</div>

<div class="overlay-menu">
    <div class="logo2">
        <!-- Logo Placeholder for Inlustration -->
        <a href="<?= base_url();?>pages/index">
            <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10"/>
        </a>
    </div>
    <ul id="menu" class="menu-mobile">
        <?php echo $this->uri->segment(1) != '' ? '<li><a href="'.base_url().'">Home</a></li>' : ''; ?>
        <li><a href="<?= site_url(['the-concept'])?>" <?php echo $this->uri->segment(1) == 'the-concept' ? 'class="active"' : ''; ?> >The Concept</a></li>
        <li><a href="<?= site_url(['the-homes'])?>" class="dropdown-toggle <?php echo $this->uri->segment(1) == 'the-homes' ? 'active' : ''; ?>"  data-toggle="dropdown">The Homes&nbsp;<span><i class="fas fa-caret-down"></i></span></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#akane-tab" >Tipe Akane</a>
                    <a class="dropdown-item" href="<?= site_url(['the-homes'])?>#momiji-tab">Tipe Momiji</a>
                </div>
        </li>
        <li><a href="<?= site_url(['the-facilities'])?>" <?php echo $this->uri->segment(1) == 'the-facilities' ? 'class="active"' : ''; ?> >The Facilities</a></li>
        <li><a href="<?= site_url(['news'])?>" <?php echo $this->uri->segment(1) == 'news' ? 'class="active"' : ''; ?> >News</a></li>
        <li><a href="<?= site_url(['disclaimer'])?>" <?php echo $this->uri->segment(1) == 'disclaimer' ? 'class="active"' : ''; ?> >Disclaimer</a></li>
        <li><a href="<?= site_url(['contact'])?>" <?php echo $this->uri->segment(1) == 'contact' ? 'class="active"' : ''; ?> >Contact</a></li>
    </ul>
</div>

  <?= $content?>
  <?php echo $this->layouts->print_includes('js'); ?>
  </script>
  <script src="<?php echo base_url();?>assets/js/script.js"></script>
</body>
</html>
