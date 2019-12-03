<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 */
get_header(); ?>

<section class="jumbotron text-center cover text-white">
    <div class="container">
      <h1 style="font-weight: 900;font-size: 100px;">RAW</h1>
     <em>We create experiences that connect people to brands</em>
      <p>
	      <a href="#" class="btn btn-secondary my-2" style="background-color: #b1061f;border: none; margin-left: 20px;margin-right: 20px;">Reel Play <i class='fa fa-play'></i> </a>
      </p>
    </div>
  </section>

<div class="container">
  <div class="container"> <!-- Container start -->
  <div class="row">
    <div class="col-md-6" style="margin-top:90px;">
    	<h1 style="font-weight: bold;font-size: 50px;">About Us </h1>
     <em> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.? <a href="#">let's chat</a></em>
    </div>
    <div class=" col-md-6 abt-img" >
      
    </div>
  </div>
  </div>
  <!-- <div class="container " style="padding-top:40px ;"> Container Start
    <div class="row text-center">
      <div class="col-md-2"></div>
        
      <div class="col-md-5 " style="margin-right: 5px;">
        <img src="./image/about.png" class="img-rounded" alt="" width="350" height="auto">
      </div>
        
        <div class="col-md-5 " style="padding-left: 5px;margin-top: 20px;">
        <img src="./image/about.png" class="img-rounded" alt="" width="350" height="auto">
        </div>
      <div class="col-md-2"></div>
  
    </div>
  </div> -->
  <div class="container"> <!-- Container start -->
    <div class="row">
    <div class=" col-md-6 abt-img" > 
    </div>
    <div class="col-md-6" style="margin-top:90px;">
        <h1 style="font-weight: bold;font-size: 50px;">Our Approach </h1>
       <em> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</em>
      </div>
  </div> 
  </div>  <!-- Container End -->

<div class="container" style="padding-top:40px ;">
    <h1 class="worktext" >Our Work</h1>  
  <div class="row">
     
      <div class="col-md-4">
  		<div class="card" style="width: 381px;height: 412;margin: 15px;">
		  <img class="card-img-top" src="./image/video-1.png" alt="Card image cap">
		  <div class="card-body">
		   <p class="whitetext">Project Title<span class="redtext"> Goes Here </span></p>
      </div>
      </div>
    </div>
    <div class="col-md-4">
		<div class="card" style="width: 381px;height: 412;margin: 15px;">
		  <img class="card-img-top" src="./image/video-2.png" alt="Card image cap">
		  <div class="card-body">
		   <p class="whitetext">Project Title<span class="redtext"> Goes Here </span></p>
		  </div>
    </div>
  </div>
  <div class="col-md-4">
		<div class="card" style="width: 381px;height: 412;margin: 15px;">
		  <img class="card-img-top" src="./image/video-3.png" alt="Card image cap">
		  <div class="card-body">
		   <p class="whitetext">Project Title<span class="redtext"> Goes Here </span></p>
		  </div>
    </div>
  </div>
 </div>
</div> <!-- Container End -->

<div class="container " style="padding-top:40px ;"> <!-- Container Start -->
  <div class="row text-center">
    <!-- <div class="col-md-2"></div> -->
      
    <div class="col-md-4 " style="margin-right: 185px;">
      <img src="./image/img-5.png" class="img-rounded" alt="" width="505" height="321px">
    </div>
      
      <div class="col-md-4 " style="padding-left: -140px;margin-top: 74px;">
      <img src="./image/img-6.png" class="img-rounded" alt="" width="505" height="321px">
      </div>
    <!-- <div class="col-md-2"></div> -->

  </div>
</div>

<div class="container" > <!-- Container Start -->

  <div class="row">
    <div class="col-md-3"></div>
    <div class="text-center col-md-6 box" >
        <h1>Let's Work Together</h1>
        <em> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</em>
        <h2>805-625-5269</h2>
        <h2><a href="mailto:info@raworiginal.com">INFO@RAWORIGINAL.COM</a></h2>
    </div>
    <div class="col-md-3"></div>
  </div>   

</div> <!-- Container End -->

</div> <!-- Container End -->

<?php //get_sidebar( 'front' ); ?>
<?php get_footer(); ?>