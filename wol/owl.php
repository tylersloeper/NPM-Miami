<!DOCTYPE html>
<html lang="en">
  <head>


    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="https://localhost:8081/npm/wp-content/themes/npm/js/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://localhost:8081/npm/wp-content/themes/npm/js/owlcarousel/assets/owl.theme.default.min.css">

   

    <!-- javascript -->
    <script src="https://localhost:8081/npm/wp-content/themes/npm/js/vendors/jquery.min.js"></script>
    <script src="https://localhost:8081/npm/wp-content/themes/npm/js/owlcarousel/owl.carousel.js"></script>
  </head>
  <body>
  
  
  <!--  Demos -->
    <section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <h4>1</h4>
            </div>
            <div class="item">
              <h4>2</h4>
            </div>
            <div class="item">
              <h4>3</h4>
            </div>
            <div class="item">
              <h4>4</h4>
            </div>
            <div class="item">
              <h4>5</h4>
            </div>
            <div class="item">
              <h4>6</h4>
            </div>
            <div class="item">
              <h4>7</h4>
            </div>
            <div class="item">
              <h4>8</h4>
            </div>
            <div class="item">
              <h4>9</h4>
            </div>
            <div class="item">
              <h4>10</h4>
            </div>
            <div class="item">
              <h4>11</h4>
            </div>
            <div class="item">
              <h4>12</h4>
            </div>
          </div>
          
          
          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 5
                  }
                }
              })
            });
          </script>
        </div>
      </div>
    </section>
     
  </body>
</html>