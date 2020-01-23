@extends('master')

@section('main_content')

 
      <!-- Intro Block
      ============================================-->
      <section class="intro-block intro-page boxed-section page-bg overlay-dark-m">
      
        <!-- Container -->
        <div class="container">     
          <!-- Section Title -->
          <div class="section-title invert-colors no-margin-b">
            <h2>About Us</h2>
            <p class="hidden-xs">Helena is a freelance fashion house specialiasing in print designs and combining fabrics. Our stores can be found all over the world.</p>
          </div>
          <!-- /Section Title -->
        </div>
        <!-- /Container -->
      
      </section>
      <!-- /Intro Block
      ============================================-->
      
      <!-- Page Info Block
      ============================================-->
      <section class="page-info-block boxed-section">
      
        <!-- Container -->
        <div class="container cont-pad-x-15"> 

          <!-- Breadcrumb -->
          <ol class="breadcrumb pull-left">
            <li><a href="#"><i class="ti ti-home"></i></a></li>
            <li><a href="#">Pages</a></li>
            <li><a href="#">other</a></li>
            <li class="active">blog</li>
          </ol>
          <!-- /Breadcrumb --> 

          <!-- hlinks -->
          <ul class="page-links pull-right hlinks hlinks-icons color-icons-borders color-icons-bg-hovered">
            <li><a href="#"><i class="icon fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="icon fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="icon fa fa-rss"></i></a></li>
          </ul>
          <!-- /hlinks -->

        </div>
        <!-- /Container -->
      
      </section>
      <!-- /Page Info  Block
      ============================================-->
      
      <!-- Content Block
      ============================================-->
      <section class="content-block default-bg">
        <!-- Container -->
        <div class="container no-pad-t">

          <!-- Row -->
          <div class="row">

            <!-- Main Col -->
            <div id="main-col" class="col-sm-8 col-md-8 mgb-30-xs">
 
                <h4 class="case-c">message form</h4>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                
                <!-- Comment Form -->
                <div class="contact-form">
                  <form>
                    <!-- Row -->
                    <div class="row">
                      <!-- Col -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="Your Name - Required" class="form-control">
                        </div>
                      </div>
                      <!-- /Col -->
                      <!-- Col -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="Your Email - Required" class="form-control">
                        </div>
                      </div>
                      <!-- /Col -->
                    </div>
                    <!-- /Row -->
                    
                    <div class="form-group">
                     <textarea placeholder="You Message..." class="form-control" rows="8"></textarea>
                    </div>
                   
                   <button class="btn btn-default" type="submit">Submit comment</button>
                  </form>
                </div>
                <!-- /Contact Form -->
                
            </div>
            <!-- /Main Col -->
            
            <!-- Side Col -->
            <div class="col-sm-4 col-md-4">

              <!-- Side Widget -->
              <div class="side-widget">
              
                <h5 class="boxed-title">Our location</h5>
                
                <!-- fader -->
                <div class="fader mgb-20">
                  <img src="lib/Template/images/map.png" alt="">
                  <!-- hidden -->
                  <div class="fader-hidden pcolor-bg white">
                    <!-- stuff to be revealed here ! -->
                    <div class="vcenter align-center">
                      <div class="vcenter-this">
                        <a href="#" data-toggle="modal" data-target="#map-modal"><span class="white">VIEW MAP</span></a>
                      </div>
                    </div>
                    <!-- /stuff to be revealed here ! -->
                  </div>
                  <!-- /hidden-->
                </div>
                <!-- /fader -->
                
                <!-- vlinks -->
                <ul class="vlinks vlinks-iconed vlinks-ruled-dots">
                  <li><i class="icon fa fa-home"></i>Ha-Palmakh St 34 <br/> Giv'atayim, Israel</li>
                  <li class="centered"><i class="icon fa fa-laptop"></i>liranmail@gmail.com</li>
                  <li><i class="icon fa fa-user"></i>+972-523-711-704</li>
                </ul>
                <!-- /vlinks -->
                
              </div>
              <!-- /Side Widget -->
              
            </div>
            <!-- /Side Col -->

          </div>
          <!-- /Row -->
        
        </div>
        <!-- /Container -->
    </section>
    <!-- /Content Block
    ============================================-->
    
    <!-- Map Modal -->
    <div id="map-modal" class="modal fade map-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <!-- Modal Dialog -->
      <div class="modal-dialog">
      
        <div class="modal-content">
        
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Our Map Location</h4>
          </div>
          
          <div class="modal-body">
            <iframe style="width:100%; height: 350px" id="gmap"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3380.8672292588826!2d34.80261421457374!3d32.07283962686325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4ba5241d8313%3A0xaeedf1b22f29eb6f!2sHa-Palmakh%20St%2034%2C%20Giv&#39;atayim!5e0!3m2!1sen!2sil!4v1575047827982!5m2!1sen!2sil"></iframe>

            
            <script type="text/javascript">
              // Delay loading iframe for better performance
              var iframe = document.getElementById('gmap');
              var src = iframe.src;
              iframe.src = '';
              window.onload =  function(){ iframe.src = src; }
            </script>
          </div>
        </div>
        
      </div>
      <!-- /Modal Dialog -->
    </div>
    <!-- /Map Modal -->

@endsection