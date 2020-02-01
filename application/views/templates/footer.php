<!--JavaScript at end of body for optimized loading-->
	  <footer>
	  	<div class="container-fluid center purple light-1">
	  		<span>Copyright &copy; Aganstas <?= date('Y');?></span>
	  	</div>
	  	
	  </footer>

	  
      <script type="text/javascript" src="<?= base_url('assets');?>/js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        document.addEventListener('DOMContentLoaded', function() {
          var scroll = document.querySelectorAll('.scrollspy');
          var instances = M.ScrollSpy.init(scroll, {
            scrollOffset: 50
          });
        });

         document.addEventListener('DOMContentLoaded', function() {
          var view = document.querySelectorAll('.modal');
          var instances = M.Modal.init(view);
        });


       </script>
      
    </body>
  </html>