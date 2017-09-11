<?php
 $title = "&mdash; My Work/Portfolio";
 include('inc/header.php');
 ?>
 
 <div class="banner-small contact">
 	<h2>Contact / Collab</h2>
 </div>
 
 <div class="container space">
 	<div class="row">
    	<div class="col-md-4">
        	<div id="map"></div>
            <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 39.759036, lng: -84.191439},
          zoom: 13
        });
      }
    </script>
        <p class="form-break">
        	If you are interested in any of my <strong>specialized services</strong>, would like to receive a <strong>project quote</strong> or have any <strong>other questions</strong>, 
            please fill out my contact form. I am ready to assist with all you design needs! 
        </p>
        </div>
        <div class="col-md-8">
        
        	<form action="php/mail.php" method="POST">
            	<div class="form-group">
                	<input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                	<input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required>
                    <small class="text-muted">I will never share your email with anyone. Pinky swear.</small>
                </div>
                <div class="form-group">
                	<input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                	<input type="text" name="company" class="form-control" id="company" placeholder="Company (optional)">
                </div>
                
                <div class="form-group">
                    <div class="radio">
                      <label>
                        <input type="radio" name="radio" id="optionsRadios1" value="Project" checked>
                        Project&nbsp;&nbsp;
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="radio" id="optionsRadios2" value="Collab">
                        Collaboration&nbsp;&nbsp;
                      </label>
                    </div>
                    <div class="radio">
                      <label> 
                        <input type="radio" name="radio" id="optionsRadios3" value="Other">
                        Other&nbsp;&nbsp;
                      </label>
                     </div>
                 </div>
                 
                 <div class="form-group">
                	<textarea class="form-control" name="message" id="message" rows="4" placeholder="What do you need?" required></textarea>
                </div>
                <button class="btn btn-primary" name="submit" style="float: right;" type="submit">Send Away!</button>
            </form>
            
        </div>
    </div>
 </div>
 
 <?php
 include('inc/footer.php');
 ?>