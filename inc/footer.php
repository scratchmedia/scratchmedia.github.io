<footer>
  <div class="footer">
	<div class="row inner">
		<div class="col-md-4 inform">
        	<h3>Scratch Media</h3>
			<p class="bottom cut"><strong>P:</strong> 937.716.4682<br />
			<strong>E:</strong> <a href="mailto:renegade13design@gmail.com">renegade13design@gmail.com</a></p>
			<p><strong>Currently Accepting Projects</strong></p>
        </div>
    	<div class="col-md-4 middle">
    		<h3>Current Position</h3>
			<p class="bottom"><strong>The Ohio Masonic Home, Springfield, OH</strong><br />
			Web &amp; Graphic Design Specialist<br />
            May 2016 - Present</p>
        	<p><a class="btn btn-primary" href="pdf/resume.pdf" target="_blank">Full Resume</a></p>
    	</div>
    	<div class="col-md-4">
        	<div class="icons">
        		<a href="https://www.facebook.com/ScratchMediaOH/" target="_blank"><i class="fa fa-facebook fa-2x crowd"></i></a>
            	<a href="https://twitter.com/renegade13" target="_blank"><i class="fa fa-twitter fa-2x crowd"></i></a>
            	<a href="https://www.instagram.com/immanuel714/" target="_blank"><i class="fa fa-instagram fa-2x crowd"></i></a>
            	<a href="https://www.linkedin.com/in/ashleyreboulet" target="_blank">
                	<i class="fa fa-linkedin fa-2x crowd"></i></a>
				<a href="https://www.xboxgamertag.com/search/immanuel714/" target="_blank">
                	<i class="fa fa-gamepad fa-2x crowd"></i></a>
            </div>
            <img class="img-responsive dark-logo" src="img/logo-dark.png">
        </div>
	</div>
  </div>
  <div class="copyright"> 
    	<small>&copy; <script language="JavaScript" type="text/javascript">document.write((new Date()).getFullYear());</script> 
        Scratch Media | All Rights Reserved.</small>
   </div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/hero.js"></script>

<script type="text/javascript">
$('.gallery').each(function() { // the containers for all your galleries
    $(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
});
</script>
<!--minified bootstrap-->
<script src="js/bootstrap.min.js"></script>

 <!--GRAPH JS--> 
<script type="text/javascript">
window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;

  function grow(){
  var element = '.bar';
  var i = 1;

  $(element).each(function(index,value){
    var percent = $(this).attr('data-percent');
    var timing = percent / 100;
    setTimeout(function(){
  
      $(value).css('max-width',+ percent + '%').css('transition', timing + 's ease all');

    }, i * 50);
    
    i++;
  });
			}

			$(window).load(function(){
				
  requestAnimationFrame(grow);
			});
			
</script>

</body>
</html>