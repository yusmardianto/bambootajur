
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
  <meta name="author" content="Shinmichi International Indonesia">
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
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MHZQ3QG');</script>
<!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHZQ3QG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <?= $content?>
  <?php echo $this->layouts->print_includes('js'); ?>
  </script>
</body>
</html>
