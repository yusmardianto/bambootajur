<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main class="main-content">
    <section class="slideshow">
        <div class="slideshow-inner">
            <div class="slides">
                <div class="slide is-active ">
                    <div class="slide-content">
                        <div class="caption">
                            <div class="title">Book Now</div>
                            <div class="text">
                                <p></p>
                            </div> 
                            <a href="#" class="">
                                <span class="btn-inner"></span>
                            </a>
                        </div>
                    </div>
                    <div class="image-container"> 
                        <img src="<?= base_url();?>assets/images/slide1.jpg" alt="" class="image" />
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-content">
                        <div class="caption">
                            <div class="title">Book Now</div>
                            <div class="text">
                                <p></p>
                            </div> 
                            <a href="#" class="">
                                <span class="btn-inner"></span>
                            </a>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="<?= base_url();?>assets/images/slide2.jpg" alt="" class="image" />
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-content">
                        <div class="caption">
                            <div class="title">Book Now</div>
                            <div class="text">
                                <p></p>
                            </div> 
                            <a href="#" class="">
                                <span class="btn-inner"></span>
                            </a>
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="<?= base_url();?>assets/images/slide3.jpg" alt="" class="image" />
                    </div>
                </div>
            </div>
        </div> 
    </section>
</main>       
<nav id="navbar" class="">
    <div class="nav-wrapper">
        <!-- Navbar Logo -->
        <div class="logo">
            <!-- Logo Placeholder for Inlustration -->
            <a href="index.html">
                <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10"/>
            </a>
        </div>
      
        <!-- Navbar Links -->
        <ul id="menu">
            <li><a href="pages/concept.html">Desain Rumah</a></li>
            <li><a href="pages/homes.html">Tipe Rumah</a></li>
            <li><a href="pages/facilities.html">Fasilitas Perumahan</a></li>
            <li><a href="pages/news.html">Berita dan Promo</a></li>
            <li><a href="pages/disclaimer.html">Disclaimer</a></li>
            <li><a href="pages/contact.html">Kontak</a></li>
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
        <a href="index.html">
            <img src="<?= base_url();?>assets/images/logo.png" class="img-responsive p-10"/>
        </a>
    </div>
    <ul id="menu" class="menu-mobile">
        <li><a href="pages/concept.html">Desain Rumah</a></li>
        <li><a href="pages/homes.html">Tipe Rumah</a></li>
        <li><a href="pages/facilities.html">Fasilitas Perumahan</a></li>
        <li><a href="pages/news.html">Berita dan Promo</a></li>
        <li><a href="pages/disclaimer.html">Disclaimer</a></li>
        <li><a href="pages/contact.html">Kontak</a></li>
    </ul>
</div>

<input type="checkbox" id="messenger" class="icon-checkbox">
<label for="messenger" class="icon">
    <div>
        <svg class="cat-icon"width="28" height="32" viewBox="0 0 28 32" >
            <path d="M8.10485 2.12513V0.524426C8.10485 0.235195 8.35915 0 8.67147 0H19.3283C19.6408 0 19.895 0.235359 19.895 0.524426V2.12513C19.895 2.41436 19.6407 2.64956 19.3283 2.64956H8.67165C8.35915 2.64972 8.10485 2.41436 8.10485 2.12513ZM28 3.83243V28.6877C28 30.5141 26.3945 32 24.4212 32H3.57879C1.60546 32 0 30.5141 0 28.6877V3.83243C0 2.00606 1.60546 0.520156 3.57879 0.520156H5.44316C5.44316 0.521634 5.44298 0.523112 5.44298 0.524426V2.12513C5.44298 3.77281 6.8914 5.11319 8.67147 5.11319H19.3283C21.1086 5.11319 22.5568 3.77281 22.5568 2.12513V0.524426C22.5568 0.522948 22.5567 0.52147 22.5567 0.520156H24.421C26.3945 0.520156 28 2.00606 28 3.83243ZM9.52203 18.3047C8.89631 17.9478 8.07628 18.1278 7.69067 18.7069L6.43214 20.5963L5.78246 20.1226C5.20537 19.7017 4.36812 19.7938 3.91348 20.3283C3.45865 20.8629 3.55821 21.6373 4.13565 22.0582L5.95832 23.3868C6.1947 23.5591 6.48519 23.6507 6.78173 23.6507C6.8591 23.6507 6.937 23.6445 7.01437 23.6319C7.38792 23.5704 7.71569 23.3643 7.91479 23.0654L9.95662 19.9996C10.3424 19.4205 10.1477 18.6617 9.52203 18.3047ZM9.52203 9.43556C8.89631 9.0785 8.07628 9.25884 7.69067 9.83779L6.43214 11.7272L5.78246 11.2536C5.20537 10.8328 4.36812 10.9247 3.91348 11.4592C3.45865 11.9938 3.55821 12.7682 4.13565 13.1892L5.95832 14.5177C6.1947 14.69 6.48519 14.7817 6.78173 14.7817C6.8591 14.7817 6.937 14.7754 7.01437 14.7628C7.38792 14.7013 7.71569 14.4952 7.91479 14.1963L9.95662 11.1307C10.3424 10.5514 10.1477 9.79262 9.52203 9.43556ZM23.3061 22.4191C23.3061 21.7386 22.7103 21.1873 21.9751 21.1873H13.2797C12.5447 21.1873 11.9488 21.7386 11.9488 22.4191C11.9488 23.0995 12.5447 23.6509 13.2797 23.6509H21.9751C22.7103 23.6509 23.3061 23.0995 23.3061 22.4191ZM23.3061 13.55C23.3061 12.8695 22.7103 12.3182 21.9751 12.3182H13.2797C12.5447 12.3182 11.9488 12.8695 11.9488 13.55C11.9488 14.2305 12.5447 14.7818 13.2797 14.7818H21.9751C22.7103 14.7818 23.3061 14.2305 23.3061 13.55Z" fill="url(#paint0_linear)"/>
            <defs>
                <linearGradient id="paint0_linear" x1="0" y1="0" x2="25.465" y2="33.9571" gradientUnits="userSpaceOnUse">
                <stop stop-color="#13AB50"/>
                <stop offset="1" stop-color="#037A68"/>
                </linearGradient>
            </defs>
        </svg>
        <svg class="close-icon" width="14" height="14">
            <defs>
                <linearGradient id="grad1" x1="35%" y1="0%" x2="80%" y2="90%">
                    <stop offset="0%" style="stop-color:#13ab50;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#037a68;stop-opacity:1" />
                </linearGradient>
            </defs>
            <path fill="url(#grad1)" d="M13.978 12.637l-1.341 1.341L6.989 8.33l-5.648 5.648L0 12.637l5.648-5.648L0 1.341 1.341 0l5.648 5.648L12.637 0l1.341 1.341L8.33 6.989l5.648 5.648z" fill-rule="evenodd"></path>
        </svg>
    </div>
</label>

<div class="msgr-container">
    <div class="messenger">
        <div class="hero"></div>
        <div class="hero2"></div>
        <div class="scrollable">
            <header class="header">
                <p>Hi, we're</p>
                <h1>Green Bamboo Terrace</h1>
            </header>
            <div class="card-nup">
                <p class="nup">NUP Only Rp. 5 Juta</p>
                <p class="data">Silahkan isi data informasi di bawah ini. Kami siap menghubungi Anda.</p>
            </div>
            <form class="form-style">
                <div class="form-group">
                  <input type="text" class="form-control" id="InputName" aria-describedby="namehelp" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control " id="InputPhone" aria-describedby="namehelp" placeholder="No. Telepon">
                </div>
                <div class="w-100 txt-center">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
            <ul class="ul-wa">
                <li class="li-wa"><a href="" class="phone">0811 1403 280</a></li>
                <li>
                    <a href="">
                        <picture>
                            <source srcset="assets/images/icon/whatsapp.webp" type="image/webp">
                            <img src="assets/images/icon/whatsapp.png" class="w-30" />
                        </picture>
                    </a>
                </li>
            </ul>
            
        </div>
        <footer class="footer">&copy; PT. KEBUN BAMBU JAKARTA <br>All Rights Reserved</footer>
    </div>
</div>
<script>
    $(function() {
    var header = $("#navbar");
    
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });
    });
</script>
<script>
    function lockScroll() {
        if ($('body').hasClass('lock-scroll')) {
            $('body').removeClass('lock-scroll');
            }
        else {
            $('body').addClass('lock-scroll');
        }
    }
</script>
<script type="text/javascript">
    function isMobile(){
        return (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|android|ipad|playbook|silk/i.test(navigator.userAgent||navigator.vendor||window.opera)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test((navigator.userAgent||navigator.vendor||window.opera).substr(0,4)))
    }

    function checkboxEvent(){
	    if(document.getElementById('messenger').checked){
    		$('.menuIcon').attr('style','display:none');
    	}else{
    		$('.menuIcon').attr('style','display:false');
    	}
	}
    
    $( document ).ready(function() {
        if(isMobile()){
        	$('#messenger').removeAttr("checked");
        	$('#messenger').attr("onclick",'checkboxEvent()');                	
        }else{ 
        	$('#messenger').attr("checked","true");
    	};
    });
</script>

<!-- 	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p> -->
