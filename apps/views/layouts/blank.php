<?php
$this->load->library('Layouts');
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control: max-age=2592000" content="public">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="author" content="">
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/ico16.png" type="image/gif" sizes="16x16">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ico16.png" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/ico16.png" />
  <link rel="canonical" href="<?= $canonical ? $canonical : "https://www.bambootajur.com" ?>">
  <meta property="og:title" content="<?php echo $title; ?>">
  <meta property="og:type" content="website" />
  <meta property="og:description" content="<?php echo $description; ?>" />
  <meta property="og:url" content="<?php echo $url ? $url : "https://www.bambootajur.com"; ?>" />
  <meta property="og:site_name" content="Bamboo Tajur" />
  <meta property="og:image" content="<?= base_url(); ?>assets/images/ogp-image.jpg" />
  <meta property="og:locale:alternate" content="id_ID" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=no name=viewport">
  <meta name="facebook-domain-verification" content="6wavtvcosv0t3yfkkyt9ybrkmp7vts" />
  <!-- Stylesheet -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />

  <link rel="preconnect" href="https://www.googleadservices.com" />
  <link rel="preconnect" href="https://www.facebook.com" />
  <link rel="preconnect" href="https://connect.facebook.net" />
  <link rel="preconnect" href="https://www.google.com" />
  <link rel="preconnect" href="https://www.google.co.id" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link rel="preload" as="font" href="<?= base_url(); ?>assets/fonts/Roboto-Medium.ttf" crossorigin type="font/ttf" />
  <link rel="preload" as="font" href="<?= base_url(); ?>assets/fonts/Roboto-Light.ttf" crossorigin type="font/ttf" />
  <link rel="preload" as="font" href="<?= base_url(); ?>assets/fonts/Roboto-Bold.ttf" crossorigin type="font/ttf" />
  <link rel="preload" as="font" href="<?= base_url(); ?>assets/fonts/Roboto-Black.ttf" crossorigin type="font/ttf" />
  <link rel="preload" as="font" href="<?= base_url(); ?>assets/fonts/Roboto-Regular.ttf" crossorigin type="font/ttf" />
  <link rel="preload" as="font" href="<?= base_url(); ?>assets/fonts/OpenSans-Regular.ttf" crossorigin type="font/ttf" />

  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Roboto&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" type="text/css" async="">

  <!-- <link rel="preload" href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i&display=swap" as="style"> -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i&display=swap"> -->

  <?php echo $this->layouts->print_includes('css'); ?>
  <!-- End Stylesheet-->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <?php
  if (http_response_code() != 404 && $_SERVER['HTTP_HOST'] == "www.bambootajur.com") {
  ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PXV9GQ8');</script>
<!-- End Google Tag Manager -->
<?php
  }
  ?>
</head>
<body>
  <?php
  if (http_response_code() != 404 && $_SERVER['HTTP_HOST'] == "www.bambootajur.com") {
  ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PXV9GQ8"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
  <?php
  }
  ?>
  <?= $content ?>
  <script src="<?= base_url(); ?>assets/js/modernizr-webp.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
  <?php echo $this->layouts->print_includes('js'); ?>

</body>

</html>