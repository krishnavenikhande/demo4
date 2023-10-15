<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Free responsive business website template</title>
      <link rel="stylesheet" href="{{asset('css/components.css')}}">
      <link rel="stylesheet" href="{{asset('css/icons.css')}}">
      <link rel="stylesheet" href="{{asset('css/responsee.css')}}">
      <link rel="stylesheet" href="{{asset('owl-carousel/owl.carousel.css')}}">
      <link rel="stylesheet" href="{{asset('owl-carousel/owl.theme.css')}}">
      <!-- CUSTOM STYLE -->      
      <link rel="stylesheet" href="{{asset('css/template-style.css')}}">
      <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext" rel="stylesheet">  
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>   
   </head>

   <!--
    You can change the color scheme of the page. Just change the class of the <body> tag. 
    You can use this class: "primary-color-white", "primary-color-red", "primary-color-orange", "primary-color-blue", "primary-color-aqua", "primary-color-dark" 
    -->
    
    <!--
    Each element is able to have its own background or text color. Just change the class of the element.  
    You can use this class: 
    "background-white", "background-red", "background-orange", "background-blue", "background-aqua", "background-primary" 
    "text-white", "text-red", "text-orange", "text-blue", "text-aqua", "text-primary"
    -->

   <body class="size-1520 primary-color-lightorange background" >
      <!-- HEADER -->
      <header class="grid">
        <!-- Top Navigation -->
        <nav class="s-12 grid background-none background-primary-hightlight">
           <!-- logo -->
           <a href="/" class="m-12 l-3 padding-2x logo">
              <img src="{{asset('img/logo1.png')}}" style='height:60px;'>
           </a>
           <div class="top-nav s-12 l-9" > 
              <ul class="top-ul right chevron" >
                <li class="active-item"><a href="/">Home</a></li>
                <li class="active-item"><a href="/about">About Us</a></li>
                <li class="active-item"><a href="/gallery">Gallery</a></li>
                <li class="active-item"><a href="/services">Services</a></li>
                <li class="active-item"><a href="/contact">Contact</a></li>
              </ul>
           </div>
        </nav>
      </header>
      
      <!-- MAIN -->
      <main role="main">
        <!-- TOP SECTION -->
        <section class="grid">
          <!-- Main Carousel -->
          <div class="s-12 margin-bottom carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-hide-arrows background-dark">
          	<div class="item background-image" style="background-image:url(img/a3.png)">
              <p class="text-padding text-strong text-white text-s-size-25 text-size-25 text-uppercase background-primary">Innovation TO Improve Bussiness</p>
            </div>
          	<!--<div class="item background-image" style="background-image:url(img/carousel-02.jpg)">
              <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">Inspired by Technologies</p>
              <p class="text-padding text-size-20 text-dark text-uppercase background-white">Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam.</p>
            </div>
            <div class="item background-image" style="background-image:url(img/carousel-03.jpg)">
              <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary">CSS and HTML is our Playground</p>
              <p class="text-padding text-size-20 text-dark text-uppercase background-white">Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam.</p>
            </div>-->
          </div>  
        </section><br>
         <!-- SECTION 3 --> 
         <section class="grid margin">
          <!-- Image-->
          <img class="s-12 m-6 margin-bottom" src="img/im2.png">
        
          <div class="s-12 m-6 padding-2x margin-bottom background-lightpink">
            <h4 class="text-strong text-size-30 text-line-height-1">
We're Building Modern & <br>Good Quality Software, Website, Mobile app & more...</h4>

            <ul>
              <li>Responsive Website Design</li> 
              <li>SEO Integrated</li>
              <li>Boost Brand Recognition</li>
              <li>Flexible Design</li>
            </ul>
          </div>
        </section><br>
        
        
        <!-- SECTION 1 --> 
        <section class="grid margin text-center">
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-red">
            <i class="icon-sli-layers text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Web Development</h3>
            <p class="s-12 l-6 center">Creating an effective web design is too easy and we will provide a fabulous design.</p>

          </a>
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-blue">
            <i class="icon-sli-layers text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Custom Applications</h3>
            <p class="s-12 l-6 center">We develop and furnish customized softwares as per needs, features and requirements.</p>

          </a>
        
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-orange">
            <i class="icon-sli-layers text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Graphic Design</h3>
            <p class="s-12 l-6 center">We ensure that all your graphic designing needs are met to satisfaction.</p>
        </a>
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-aqua">
            <i class="icon-sli-layers text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">SEO</h3>
            <p class="s-12 l-6 center">We have done extensive research in Search Engine Optimation (SEO) techniques.</p>
        </a>
        </section>
        
        <!-- SECTION 2 -->
        <section class="grid section margin background-lightpink">
          <h2 class="s-12 l-6 center text-thin text-size-30 text-maroon text-uppercase margin-bottom-30">Our <b>Work</b></h2>
          <p class="s-12 l-6 center">Our Software company is a business of one or more experts that provides professional Work
</p>
        </section>
        
       
        <!-- SECTION 4 -->
        <!--<h2 class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-40 center text-center">Top <b>References</b></h2>
        <section class="grid margin">
          <a class="s-12 m-6 margin-bottom" href="gallery.html">
            <img class="full-img" src="img/portfolio/thumb-01.jpg" alt=""/>
          </a>	
          <a class="s-12 m-6 margin-bottom" href="gallery.html">
            <img class="full-img" src="img/portfolio/thumb-02.jpg" alt=""/>
          </a>	
          <a class="s-12 m-6 margin-bottom" href="gallery.html">
            <img class="full-img" src="img/portfolio/thumb-03.jpg" alt=""/>
          </a>	
          <a class="s-12 m-6 margin-bottom" href="gallery.html">
            <img class="full-img" src="img/portfolio/thumb-04.jpg" alt=""/>
          </a>	
        </section>->
        
        <!-- SECTION 5 -->
        <section class="grid margin text-center">
          <div class="m-12 l-4 padding-2x background-dark margin-bottom text-right">
            <h3 class="text-strong text-size-25 text-uppercase margin-bottom-10">Let's keep in touch</h3>
            <p>Vertex Technosys is a software based company in Solapur, Maharashtra, India, providing web 
                design, graphic design, web development, software development, mobile development,  
                & web promotions.</p>
          </div>
          <a href="" class="s-12 m-6 l-2 padding vertical-center margin-bottom facebook hover-zoom">
             <img src="{{asset('img/w1.jpg')}}" class="icon-sli-social-facebook text-size-60 text-white center">
          </a>
          <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom twitter hover-zoom">
            <img src="{{asset('img/w2.jpg')}}" class="icon-sli-social-twitter text-size-60 text-white center">
          </a>
          <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom youtube hover-zoom">
            <img src="{{asset('img/w3.jpg')}}" class="icon-sli-social-youtube text-size-60 text-white center">
          </a>
          <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom linkedin hover-zoom">
            <img src="{{asset('img/w4.jpg')}}" class="icon-sli-social-linkedin text-size-60 text-white center">
          </a>
        </section>
                
      </main>
      
       
      <!-- FOOTER -->
      <footer class="grid">
        <!-- Footer - top -->
        <!-- Image-->
        <div class="s-12 l-3 m-row-3 margin-bottom background-image" style="background-image:url(img/img-04.jpg)"></div>
        
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Who We Are?</h2>
           <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
        </div>
        
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Where We Are?</h2>
           <img class="full-img" src="img/map.svg" alt=""/>
        </div>
        
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Contact Us</h2>
           <p><b class="text-primary margin-right-10">P</b> 0800 4521 800 50</p>
           <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
           <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a></p>
        </div>
        
        <!-- Footer - bottom -->
        <div class="s-12 text-center margin-bottom">
          <p class="text-size-12">Copyright 2019, Vision Design - graphic zoo</p>
          <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p>
          <p><a class="text-size-12 text-primary-hover" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a></p>
        </div>
      </footer>                                                                    
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script>

   </body>
</html>