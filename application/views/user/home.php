 
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="assets/img/slider/1.jpeg"> <!-- random image -->
            <div class="caption left-align">
              <h3 class="teal-text text-lighten-1">Get work faster and better!</h3>
              <h5 class="black-text">helpful for your bussines growth.</h5>
            </div>
          </li>
          <li>
            <img src="assets/img/slider/2.png"> <!-- random image -->
            <div class="caption center-align">
              <h3 class="teal-text text-lighten-1">Building android flatform!</h3>
              <h5 class="black-text ">Make your business there in every grip.</h5>
            </div>
          </li>
          <li>
            <img src="assets/img/slider/3.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3 class="teal-text text-lighten-1">Website Responsive!</h3>
              <h5 class="black-text">Make sure to building website responsive.</h5>
            </div>
          </li>
        </ul>
      </div>

      <!-- our service -->
        <section id="galeri" class="scrollspy">
          <div class="container"> 
            <div class="row">
              <?php foreach($menu as $m) : ?>
              <div class="col m4 s12">
                <div class="card-panel center">
                  <img src="<?= base_url('assets/img/galeri/') . $m['image']; ?>" class="responsive-img materialboxed">
                  <h5><?php echo $m['name']; ?></h5>
                  <p><?= $m['description']; ?></p>
                  <a href="<?= base_url(). 'user/download/' . $m['product_id']; ?>" class="waves-effect waves-light btn-small">Download</a>
                </div>
              </div>
              
               <?php endforeach; ?> 
            </div>
          </div>  
        </section> 

        
