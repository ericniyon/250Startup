@extends('layout')

@section('content')

<!--  ************************* Gallery Starts Here ************************** -->
<div id="portfolio" class="gallery">    
    <div class="container">
       <div class="session-title row">
             <h2>Graduates</h2>
             <p>Take a look at some of our latest interns</p>
             <div class="heading-line"></div>
         </div>
       <div class="row">
         

 <div class="gallery-filter d-none d-sm-block">
     <button type="button" class="btn btn-primary filter-button" data-filter="all">All</button>
     <button class="btn btn-default filter-button" data-filter="hdpe">Founders</button>
     <button class="btn btn-default filter-button" data-filter="sprinkle">Associate Finances</button>
     <button class="btn btn-default filter-button" data-filter="spray"> Associate Lawyers</button>
     <button class="btn btn-default filter-button" data-filter="irrigation">IT interns</button>
 </div>
 <br/>



     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
        <a href="/skills">
            <img src="assets/images/gallery/gallery_01.jpg" class="img-responsive">
            <h4>Interns name</h4>
            <h6>Web Developer</h6>
        </a>
     </div>

     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
         <img src="assets/images/gallery/gallery_02.jpg" class="img-responsive">
         <h4>Interns name</h4>
         <h6>Web Developer</h6>
     </div>

     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
         <img src="assets/images/gallery/gallery_03.jpg" class="img-responsive">
         <h4>Interns name</h4>
         <h6>Web Developer</h6>
     </div>

     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
         <img src="assets/images/gallery/gallery_04.jpg" class="img-responsive">
         <h4>Interns name</h4>
         <h6>Web Developer</h6>
     </div>

     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
         <img src="assets/images/gallery/gallery_05.jpg" class="img-responsive">
         <h4>Interns name</h4>
         <h6>Web Developer</h6>
     </div>

   

     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
         <img src="assets/images/gallery/gallery_06.jpg" class="img-responsive">
         <h4>Interns name</h4>
         <h6>Web Developer</h6>
     </div>

     <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
         <img src="assets/images/gallery/gallery_09.jpg" class="img-responsive">
         <h4>Interns name</h4>
         <h6>Web Developer</h6>
     </div>

     <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter irrigation">
         <img src="assets/images/gallery/gallery_08.jpg" class="img-responsive">
         <h4>Interns name</h4>
         <h6>Web Developer</h6>
     </div>
 </div>
</div>


</div>
 <!-- ######## Gallery End ####### -->  

 @endsection