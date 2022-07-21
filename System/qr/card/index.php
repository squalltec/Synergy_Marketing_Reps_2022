
    <script src="html2canvas.js"></script>
    <script>
      function doCapture() {
        window.scrollTo(0, 0);

        html2canvas(document.getElementById("about")).then(function (canvas) {
          var ajax = new XMLHttpRequest();
          ajax.open("POST", "save-capture.php", true);
          ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          ajax.send("image=" + canvas.toDataURL("image/jpeg", 0.9));

          ajax.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
              console.log(this.responseText);
            }
          };
        });
      }
    </script>

    <button onclick="doCapture();">Capture</button>

  
    <section id="about">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img">
              <img src="img/about-img.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
            

			<h2>About me</h2>
             
			 
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->

