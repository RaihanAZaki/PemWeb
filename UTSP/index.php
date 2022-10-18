
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Raihan - Portofolio" />
    <title>Portofolio Rehan</title>
  <!--favicon-img--> 
   <link rel="icon" type="image/png" href="images/logo.png">
   <!--favicon-img-->
   <!--main css file should not be removed -->
    <link rel="stylesheet" href="css/index.css">
    <!--main css file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
</head>
<body>

<?php 
include_once "data.php";
include_once "upload.php";
?>

    <!--contains all the div-->
    <div id="all">
    <!--mouse  follower-->
        <div class="cursor"></div>
    <!--mouse  follower-->
    <!--loader-->
        <div id="loader">
            <span class="color">PORTOFOLIO</span>
        </div>
    <!--loader-end-->
    <!--link-screen-->
        <div id="breaker">
        </div>
        <div id="breaker-two">
        </div>
    <!--link-screen-->
        <!--Main-Section-->
        <!--Navigator-fullscreen-->
        <div id="navigation-content">
            <div class="logo">
                <img src="images/logo.png" alt="logo">
            </div>
            <div class="navigation-close">
                <span class="close-first"></span>
                <span class="close-second"></span>
            </div>
            <div class="navigation-links">
                <a href="#" data-text="HOME" id="home-link" >HOME</a>
                <a href="#" data-text="ABOUT" id="about-link" >ABOUT</a>
                <a href="#" data-text="CERTIFICATE" id="blog-link" >CERTIFICATE</a>
                <a href="#" data-text="PORTFOLIO" id="portfolio-link" >PORTFOLIO</a>
                <a href="#" data-text="CONTACT" id="contact-link" >CONTACT</a>
            </div>
        </div>
        <!--Navigator-Fullscreen END-->
          <!--Home Page-->
        <!--Menubar-->
        <div id="navigation-bar">
            <img src="images/logo-putih.png" alt="logo">
            <div class="menubar">
                <span class="first-span"></span>
                <span class="second-span"></span>
                <span class="third-span"></span>
            </div>
        </div>
        <!--Menubar End-->
          <!--Header-->
        <div id="header">
            <div id="particles"></div>
              <!--Social Media Links-->
            <div class="social-media-links">
               <a href="#"><img src="images/instagram logo.png" class="social-media" alt="instagram-logo"></a><!--Your instagram homepage link inser in place of "#"-->
                <a href="#"><img src="images/facebook logo.png" class="social-media" alt="facebook-logo"></a>
                <a href="#"><img src="images/linkedin logo.png" class="social-media" alt="linkedin-logo"></a>
                <a href="#"><img src="images/twitter logo.png" class="social-media" alt="twitter-logo"></a>

            </div>
            <!--Social Media Links end-->
            <div class="header-content">
                <div class="header-content-box">
                <div class="firstline"><span class="color"><?php echo $diri['nama_depan']?> </span> <?php echo $diri['nama_belakang']?></div>
                <div class="secondline">
                Saya seorang
            <span class="txt-rotate color" data-period="1200"data-rotate='[ " Mahasiswa.", " Informatika.", " Semester 5." ]'></span>
            <span class="slash">|</span>
        </div>
                    <div class="contact">
                <a href="Mailto:#"><img src="images/mail.png" alt="email-pic" class="contactpic"></a><!--Your email Id write in place of "#"-->
                <a href="Tel:#"><img src="images/call.png" alt="phone-pic" class="contactpic"></a><!--Your telephone number Id write in place of "#"-->
                    </div>    
            </div>
            </div>
            <!--header image-->
            <div class="header-image">
            <img src="images/<?php echo $fotdi['foto_tiga']?>" alt="logo">
            </div>
            <!--header image end-->
        </div>
           <!--Header End-->
        <!--HomePage End-->
        <!--Main-Section End-->
        <!--about-->
        <div id="about">
            <div class="color-changer">
            <div class="color-panel">
                <img src="images/gear.png" alt="">
            </div>
            <div class="color-selector">
                <div class="heading">Custom Colors</div>
                <div class="colors">
                    <ul >
                    <li>
                        <a href="#0" class="color-red " title="color-red"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-purple" title="color-purple"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-malt" title="color-malt"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-green" title="color-green"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-blue" title="color-blue"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-orange" title="color-orange"></a>
                    </li>
                    </ul>
                </div>
            </div>
            </div>
            <!--about content-->
            <div id="about-content">
                <div class="about-header">
                    About <span class="color">Me</span>
                    <span class ="header-caption">Get to Know <span class="color"> me.</span></span>
                </div>
                <div class="about-main">
            <div class="about-first-paragraph wow">
            <!--about description-->
               <span class="about-first-line">
                    Halo saya
                    <span class="color"><?php echo $diri['nama_lengkap']?></span>
                     tinggal di <?php echo $diri['negara']?> </span>
                     <br>
               <span class="about-second-line"> Hallo, nama panggilan saya <?php echo $diri['nama_panggilan']?>. Saya memiliki pengalaman magang selama 2 bulan di PT. Larona Prima Solusi sebagai Junior Programmer. Saat ini saya sedang menjalani masa studi saya di <?php echo $kuliah['nama_kuliah']?> dan mengambil progam studi <?php echo $kuliah['program_studi']?> tahun angkatan <?php echo $kuliah['angkatan']?>.</span>
               <div class="cv">
                <a href="#"><button>Download <span class="colors">CV</span></button></a>
            </div>
            </div>
            <!--about picture-->
            <div class="about-img">
                <img src="images/<?php echo $fotdi['foto_dua']?>" alt="Your Image">
            </div>
            </div>
    
            </div>
            <!--services start-->
            <div id="services">
                <div class="color-changer">
                    <div class="color-panel">
                        <img src="images/gear.png" alt="">
                    </div>
                    <div class="color-selector">
                        <div class="heading">Custom Colors</div>
                        <div class="colors">
                            <ul >
                            <li>
                                <a href="#0" class="color-red " title="color-red"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-purple" title="color-purple"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-malt" title="color-malt"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-green" title="color-green"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-blue" title="color-blue"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-orange" title="color-orange"></a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    </div>
            <!--services header-->
                    <div class="services-heading wow">
                        <span class="color">My</span> Services
                    </div>
            <!--services header end-->
            <!--services content-->
                    <div class="services-content">
                           <div class="service-one service wow">
                               <div class="service-img">
                               <img src="images/coding.png" alt="service-one">
                               </div>
                               <div class="service-description">
                                <h2>Web Designing</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                               </div>
                           </div>
                           <div class="service-two service wow">
                               <div class="service-img">
                               <img src="images/instagram.png" alt="service-two">
                               </div>
                               <div class="service-description">
                                <h2>Social Media</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                               </div>
                           </div>
                           <div class="service-three service wow">
                            <div class="service-img">
                               <img src="images/bulb.png" alt="service-three">
                            </div>
                            <div class="service-description">
                                <h2>Creative Design</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                            </div>
                        </div>
                    </div>
            </div>
            <!--services content end-->
            <!--services end-->
            <div id="skills">
                <div class="skills-header">
                     My <span class="color"> Skills</span>
                </div>
                <div class="skills-content " style="text-align: center;">
                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        HTML/CSS
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="html-progress wow">85%</div>
                    </div>
                    </div>
                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                      Javascript
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="js-progress wow">50%</div>
                    </div>
                    </div>
                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        Design
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="design-progress wow">83%</div>
                    </div>
                    </div>
                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        PHP
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="php-progress wow">60%</div>
                    </div>
                    </div>
                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        JQuery
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="jquery-progress wow">20%</div>
                    </div>
                    </div>
                    <div class="skill-html skill">
                        <div class="skill-text">
                    <div class="html">
                        Database
                    </div>
                        </div>
                    <div class="html-prog wow prog">
                 <div class="database-progress wow">95%</div>
                    </div>
                    </div>
                </div>
            </div>
    <!--copyright-section You Can Remove After Downloading-->
            <div class="footer">
             <div class="footer-text">
                 <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"><?php echo $diri['nama_lengkap']?>
             </div>
            </div>
    <!--copyright-section-->
        </div>
        <!--about end-->
        <!--portfolio-->
        <div id="portfolio">
            <div class="color-changer">
                <div class="color-panel">
                    <img src="images/gear.png" alt="">
                </div>
                <div class="color-selector">
                    <div class="heading">Custom Colors</div>
                    <div class="colors">
                        <ul >
                        <li>
                            <a href="#0" class="color-red " title="color-red"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-purple" title="color-purple"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-malt" title="color-malt"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-green" title="color-green"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-blue" title="color-blue"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-orange" title="color-orange"></a>
                        </li>
                        </ul>
                    </div>
                </div>
                </div>
            <div class="portfolio-header"> <span class="color"> My </span> Portfolio
            <span class ="header-caption"> Some Of My <span class="color"> Works</span></span></div>
             <div id="portfolio-content">
                 <div class="portfolio portfolio-first">
                     <div class="portfolio-image">
                        <img src="images/<?php echo $portofo['gambar_satu']?>" alt="portfolio-first">
                     </div>
                     <div class="portfolio-text">
                         <h2>TuDing (Tukar Coding)</h2>
                         <p>Sebuah aplikasi yang memberikan wadah untuk para pejuang coding untuk saling berinteraksi, bertukar pikiran, dan bekerja sama dalam menciptakan sesuatu yang baru.</p>
                         <div class="button"><a href="#"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                     </div>
                 </div>
                 <div class="portfolio portfolio-second">
                    <div class="portfolio-image">
                        <img src="images/<?php echo $portofo['gambar_dua']?>" alt="portfolio-second">
                    </div>
                    <div class="portfolio-text">
                        <h2>MeLek (Menu Elektronik)</h2>
                        <p>Sebuah aplikasi untuk mempermudah tempat makan atau restoran dalam melayani pelanggan dengan penggunaan menu elektronik, sehingga mengurangi pemakaian kertas yang berlebihan dalam proses pemesanan.</p>
                        <div class="button"><a href="#"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                    </div>
                </div>
             
                <div class="portfolio portfolio-third">
                    <div class="portfolio-image">
                        <img src="images/<?php echo $portofo['gambar_tiga']?>" alt="portfolio-third">
                    </div>
                    <div class="portfolio-text">
                        <h2>Home Portofolio</h2>
                        <p>Sebuah uji coba dalam membuat sebuah website home portofolio, dengan menerapkan bahasa pemrograman HTML, CSS, JavaScript.</p>
                        <div class="button"><a href="#"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                    </div>
                </div>
                <div class="portfolio portfolio-fourth">
                    <div class=" portfolio-image">
                        <img src="images/<?php echo $portofo['gambar_empat']?>" alt="portfolio-fourth">
                    </div>
                    <div class="portfolio-text">
                        <h2>Website Informatika</h2>
                        <p>Sebuah hasil dari tugas mata kuliah Pemrograman Website, meluncurkan sebuah desain baru untuk website Informatika UPJ. Dalam pembuatan website tersebut menerapkan bahasa pemrograman HTML, CSS, JavaScript.</p>
                        <div class="button"><a href="#"><button><span class="index"> View Project<i class="gg-arrow-right"></i></span></button></a></div>
                    </div>
                </div>
                 </div>
                    <!--copyright-section You Can Remove After Downloading-->
            <div class="footer">
                <div class="footer-text">
                    <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"><?php echo $diri['nama_lengkap']?>
                </div>
               </div>
       <!--copyright-section-->
             </div>
        <!--portfolio end-->
        <!--blog-->
        <div id="blog">
            <div class="color-changer">
                <div class="color-panel">
                    <img src="images/gear.png" alt="">
                </div>
                <div class="color-selector">
                    <div class="heading">Custom Colors</div>
                    <div class="colors">
                        <ul >
                        <li>
                            <a href="#0" class="color-red " title="color-red"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-purple" title="color-purple"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-malt" title="color-malt"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-green" title="color-green"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-blue" title="color-blue"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-orange" title="color-orange"></a>
                        </li>
                        </ul>
                    </div>
                </div>
                </div>
        <div class="blog-header"> Certificate</span>
            <span class ="header-caption"> My Latest <span class="color"> Certificate.</span></span></div>
            <div class="blog-content">
                 <div class="blogs">
                     <a href="#">
                     <div class="img">
                        <img src="images/<?php echo $sertif['sertif_satu']?>" alt="blog-one">
                        <div class="blog-date">26 Agustus,22</div>
                     </div>
                     <div class="blog-text">
                         <h3>IT Support Google</h3>
                         <p>Sebuah pelatihan yang diadakan oleh Universitas Pembangunan Jaya bekerja sama dengan program pemerintahan yaitu MBKM dalam memberikan wadah kepada mahasiswa/i untuk mendapatkan wawasan baru seputar dunia Teknologi.</p>
                     </div></a>
                 </div>      
                 <div class="blogs">
                    <a href="#">
                    <div class="img">
                        <img src="images/<?php echo $sertif['sertif_dua']?>" alt="blog-two">
                        <div class="blog-date">20 Agustus,22</div>
                    </div>
                    <div class="blog-text">
                        <h3>Mikrotik</h3>
                        <p>Sebuah course yang diberikan oleh Universitas Pembangunan Jaya kepada Mahasiswa/I untuk memperdalam ilmu jaringan dan teknologi</p>
                    </div></a>
                </div>      
                <div class="blogs">
                    <a href="#">
                    <div class="img">
                        <img src="images/<?php echo $sertif['sertif_tiga']?>" alt="blog-three">
                        <div class="blog-date">19 Oktober,19</div>
                    </div>
                    <div class="blog-text">
                        <h3>Algorithm and Programming</h3>
                        <p>Sebuah pelatihan singkat yang diadakan oleh Universitas Bunda Mulia untuk memperkenalkan kepada Siswa/I dari berbagai sekolah seperti apa dunia IT.</p>
                    </div></a>
                </div>
                <div class="blogs">
                    <a href="#">
                    <div class="img">
                        <img src="images/<?php echo $sertif['sertif_empat']?>" alt="blog-four">
                        <div class="blog-date">15 Januari,21</div>
                    </div>
                    <div class="blog-text">
                        <h3>ForkaNite</h3>
                        <p>Kegiatan malam keakraban (Makrab) atau ForkaNite yang setiap tahunnya diadakan oleh Program Studi Informatika dalam memberikan wadah kepada Mahasiswa/I dari berbagai angakatan maupun dosen supaya lebih akrab dan mengenal satu sama lain.</p>
                    </div></a>
                </div>  
                <div class="blogs">
                    <a href="#">
                    <div class="img">
                        <img src="images/<?php echo $sertif['sertif_lima']?>" alt="blog-five">
                        <div class="blog-date">12 Agustus,21</div>
                    </div>
                    <div class="blog-text">
                        <h3>Humas Prodi Gathering</h3>
                        <p>Sebuah acara tahunan Himaforka dalam menyambut Mahasiswa/I baru Informatika supaya dapat mengetahui terlebih dahulu apa itu Prodi Informatika dan apa itu Himaforka..</p>
                    </div></a>
                </div>  
                <div class="blogs">
                    <a href="#">
                    <div class="img">
                        <img src="images/<?php echo $sertif['sertif_enam']?>" alt="blog-six">
                        <div class="blog-date">26 Oktober,20</div>
                    </div>
                    <div class="blog-text">
                        <h3>Prima 2020</h3>
                        <p>Acara wajib Universitas Pembangunan Jaya dalam menyambut Mahasiswa/I baru untuk memberikan arahan mengenai kuliah, organisasi, dunia kerja.</p>
                    </div></a>
                </div>        
            </div>
               <!--copyright-section You Can Remove After Downloading-->
               <div class="footer">
                <div class="footer-text">
                    <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"><?php echo $diri['nama_lengkap']?>
                </div>
               </div>
       <!--copyright-section-->
        </div>
        <!--blog end-->
        <!--contact-->
     <div id="contact">
        <div class="color-changer">
            <div class="color-panel">
                <img src="images/gear.png" alt="">
            </div>
            <div class="color-selector">
                <div class="heading">Custom Colors</div>
                <div class="colors">
                    <ul >
                    <li>
                        <a href="#0" class="color-red " title="color-red"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-purple" title="color-purple"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-malt" title="color-malt"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-green" title="color-green"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-blue" title="color-blue"></a>
                    </li>
                    <li>
                        <a href="#0" class="color-orange" title="color-orange"></a>
                    </li>
                    </ul>
                </div>
            </div>
            </div>
         <div class="contact-header">Contact <span class="color"> Me</span>
        <div class="contact-header-caption"> <span class="color"> Get</span> In Touch.</div></div>
        <div class="contact-content">
            <!--Contact form-->
             <div class="contact-form">
                 <div class="form-header">
                     Message Me
                 </div>
                 <form action="upload.php" method="POST">
                    <div class="input-line">
                        <input type="text" placeholder="Name" class="input-name" name="nama_lengkap">
                        <input type="email" placeholder="Email"  class="input-name" name="email">
                    </div>
                    <input type="text" placeholder="subject" class="input-subject" name="subject">
                    <textarea class="input-textarea" placeholder="message" name="pesan"></textarea>
                    <a href="#" id="home-link"><button type="Submit" class ="submit" name="Submit">Submit</button></a>
                 </form>
               
             </div>
            <!--Contact form-->
            <!--Contact information-->
             <div class="contact-info">
                <div class="contact-info-header">
                    Contact Info
                </div>
                <div class="contact-info-content">
                <div class="contect-info-content-line">
                    <img src="./images/icon-name.png" class="icon" alt="name-icon">
                    <div class="contact-info-icon-text">
                        <h6>Name</h6>
                        <p><?php echo $diri['nama_lengkap']?></p>
                  </div>
                </div>
                <div class="contect-info-content-line">
                  <img src="./images/icon-location.png" class="icon" alt="location-icon">
                  <div class="contact-info-icon-text">
                      <h6>Location</h6>
                      <p><?php echo $diri['kota']?></p>
                </div>
              </div>
              <div class="contect-info-content-line">
                  <img src="./images/icon-phone.png" class="icon" alt="phone-icon">
                  <div class="contact-info-icon-text">
                      <h6>Call</h6>
                      <p><?php echo $diri['no_telp']?></p>
                </div>
              </div>
              
              <div class="contect-info-content-line">
                  <img src="./images/icon-email.png" class="icon" alt="email-icon">
                  <div class="contact-info-icon-text">
                      <h6>Email</h6>
                      <p><?php echo $akun['email']?></p>
                </div>
              </div>
                </div>
            <!--Contact information end-->
           </div>
        </div>
                    <!--copyright-section You Can Remove After Downloading-->
                    <div class="footer">
                        <div class="footer-text">
                            <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> <?php echo $diri['nama_lengkap']?>
                        </div>
                       </div>
               <!--copyright-section-->
     </div>
        <!--contact end-->
    </div>
    <!--all the divisions-->
    <script src="js/jquery.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/index.js"></script>
    <!--particles script-->
<script>
    particlesJS("particles", {"particles":{"number":{"value":60,"density":{"enable":true,"value_area":800}},"color":{"value":"#fff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":true,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":7,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":500,"color":"#ffffff","opacity":0.4,"width":2},"move":{"enable":true,"speed":3,"direction":"bottom","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"bubble"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":0.5}},"bubble":{"distance":400,"size":4,"duration":0.3,"opacity":1,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
</script>

</body>
</html>