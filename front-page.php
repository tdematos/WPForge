<?php get_header(); ?>

  <body>
    <nav class="navigation-bar">
      <div class="site-logo"><a href="<?php echo esc_url(home_url('/')); ?>">WPFORGE</a></div>
      <div class="navigation">
        <ul class="nav-list">
          <li class="nav-item"><a href="#">HOME</a></li>
          <li class="nav-item"><a href="#">PORTFOLIO</a></li>
          <li class="nav-item"><a href="#">BLOG</a></li>
          <li class="nav-item"><a href="#">PRICING</a></li>
          <li class="nav-item"><a href="#">CONTACT</a></li>
        </ul>
      </div>
      <div class="search">
        <button class="search-btn"><i class="fa-solid fa-magnifying-glass search-glass"></i>SEARCH</button>
      </div>
      <div class="connect-container">
      </div>
    </nav>
    <dialog class="hamburger-menu">
        <div class="hb-title-box">
            <h2 class="hb-title">WPFORGE</h2>
            <button class="hb-close-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
            <div class="hb-nav-list">
                <div class="dialog-nav-item"><p class="nav-item"><a href="#">HOME</a></p><i class="fa-solid fa-angle-down"></i></div>
                <div class="dialog-nav-item"><p class="nav-item"><a href="#">BLOG</a></p><i class="fa-solid fa-angle-down"></i></div>
                <div class="dialog-nav-item"><p class="nav-item"><a href="#">PRICING</a></p><i class="fa-solid fa-angle-down"></i></div>
                <div class="dialog-nav-item"><p class="nav-item"><a href="#">CONTACT</a></p><i class="fa-solid fa-angle-down"></i></div>
            </div>
            <hr class="dialog-hr">
        <div class="contact-info-container">
            <p class="hb-contact-email">thiago.dematos.1@gmail.com</p>
        </div>
        <div class="nav-social-icons">
            <div class="hb-icon-box">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-x-twitter"></i>
             </div>
        </div>
</dialog>
<dialog class="search-modal">
    <div class="search-modal-container-1">
        <button class="search-modal-close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="search-modal-container-2">
        <input class="search-input" type="text" class="search-field" placeholder="Search...">
        <i id="search-modal-icon" class="fa-solid fa-magnifying-glass"></i>
    </div>
</dialog>
    <section class="hp-banner">
        <div class="title-container">
            <h2 class="banner-title-1">Wordpress Development</h2>
            <h2 class="banner-title-2">Agency</h2>
            <h3 class="banner-subtitle">Take your website to new heights by hiring WPForge for your next project.</h3>
        </div>
        <div class="banner-btn-container">
            <button class="banner-cta-btn">CONNECT</button>
        </div>
        <div class="agency-slogan">
        <i class="fa-solid fa-globe globe-icon"></i>
            <p>GLOBAL WP AGENCY </p>
        </div>
    </section>
    <section class="page-white-space"></section>
    <section class="banner2">
        <div class="banner2-img-container">
             <img class="banner-2-img" src="<?php echo get_template_directory_uri(); ?>/assets/bannerimg.jpg" alt="image of a laptop and code on the screen">
        </div>
        <div class="banner-2-info">
            <h3 class="banner-2-title">Discover what we have to offer</h3>
            <p class="banner-2-subtitle">With WPForge you can count on us to design the website of your dreams.</p>
            <button class="banner-2-btn">ABOUT US</button>
        </div>
    </section>
 <section class="service-banner">
    <h3 class="service-title-main">Services for Our Clients</h3>
    <div class="service-box first-box service-1">
        <div class="service-title-1">
            <p>01</p>
            <h4 class="service-title">Web Development</h4>
        </div>
        <p class="box-open">-</p>
    </div>
    <div class="service-box service-2">
        <div class="service-title-2">
            <p>02</p>
            <h4 class="service-title">Website Redesign</h4>
        </div>
        <p class="box-open">-</p>
    </div>
    <div class="service-box service-3">
    <div class="service-title-3">
            <p>03</p>
            <h4 class="service-title">SEO Audit</h4>
        </div>
        <p class="box-open">-</p>
    </div>
    <div class="service-box service-4">
    <div class="service-title-4">
            <p>04</p>
            <h4 class="service-title">Custom Web Services</h4>
        </div>
        <p class="box-open">-</p>
    </div>
 </section>
 <section class="page-white-space"></section>
<section class="grid-section">
    <div class="project-grid">
        <div class="project-box pb1">
             <img src="" alt="">
             <p>VIEW PROjECT</p>
             <h4>Project 1</h4>
             <button>VIEW PROjECT</button>
        </div>
        <div class="project-box pb2">
            <img src="" alt="">
            <p>Project 2</p>
            <h4>Project 2</h4>
            <button>VIEW PROjECT</button>
        </div>
        <div class="project-box pb3">
            <img src="" alt="">
            <p>Project 3</p>
            <h4>Project 3</h4>
            <button>VIEW PROjECT</button>
        </div>
        <div class="project-box pb4">
            <img src="" alt="">
             <p>Project 4</p>
            <h4>Project 4</h4>
            <button>VIEW PROjECT</button>
        </div>
    </div>
</section>
<section class="team-container">
    <h2 class="team-section-title">Our Team Behind The Code</h2>
    <div class="team-img-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/thiagohs.jpg" class="team-member-img" alt="Headshot of founder.">
        <img src="" alt="" class="team-member-img">
        <img src="" alt="" class="team-member-img">
        <img src="" alt="" class="team-member-img">
    </div>
</section>
<section class="page-white-space"></section>
<section class="testimonial-container">
    <div class="testimonial-box">
        <h4 class="testimonial-title">Testimonials</h4>
        <div class="quote-icon">"</div>
        <p class="testimonial-quote">Here a testimonial is going to be put from a past client that I worked with.</p>
        <h5 class="testimonial-author">John Smith</h5>
        <p class="author-title">CEO of Walmart</p>
        <div class="testimonial circle"></div>
    </div>
    <div class="testimonial-pic"></div>
</section>
<section class="page-white-space"></section>
<section class="blog-container">
    <h3 class="blog-section-title">Read Our Article and News</h3>
    <div class="article-box">
        <div class="article-card">
            <img src="" alt="" class="blog-img">
            <p class="article-date">March 5, 2025</p>
            <h3 class="article-title">Building a website</h3>
            <button class="article-cta-btn">READ MORE</button>
        </div>
        <div class="article-card">
            <img src="" alt="" class="blog-img">
            <p class="article-date">March 5, 2025</p>
            <h3 class="article-title">Building a website</h3>
            <button class="article-cta-btn">READ MORE</button>
        </div>
        <div class="article-card">
            <img src="" alt="" class="blog-img">
            <p class="article-date">March 5, 2025</p>
            <h3 class="article-title">Building a website</h3>
            <button class="article-cta-btn">READ MORE</button>
        </div>
    </div>
</section>
<section class="page-white-space"></section>

<?php get_footer();
?>