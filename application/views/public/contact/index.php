
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12 col-lg-12">
          
            <h2 class="site-heading text-black mb-5">Say  <strong>Hello</strong></h2>
          
            <form action="#" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address">
                </div>
              </div>

              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send" class="btn btn-primary rounded-0 btn-lg">
                </div>
              </div>

  
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container site-section block-13 testimonial-wrap">

		<h1>My First Google Map</h1>
		<div id="googleMap" style="width:100%;height:400px;"></div>

		<script>
			function myMap() {
			var mapProp= {
  		center:new google.maps.LatLng(51.508742,-0.120850),
  		zoom:5,
			};
			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
			}
		</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEmuMNx2b8LtNB35glEWkOJZtGt9qrspk&callback=myMap">
		</script>

      <div class="row">
        <div class="col-12 text-center">
          <span class="sub-title">Happy Clients</span>
          <h2 class="font-weight-bold text-black mb-5">Testimonials</h2>
        </div>
      </div>
      
      <div class="nonloop-block-13 owl-carousel">
        
        <div class="testimony">
          <img src="images/person_1.jpg" alt="Image" class="img-fluid">
          <h3>Cloe Marena</h3>
          <span class="sub-title">Owner of Building Co.</span>
          <p>&ldquo;<em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium non eligendi totam natus ullam cumque! Assumenda optio, ad in! Nesciunt natus veritatis hic iste quas. Sunt iste autem vel repudiandae.</em>&rdquo;</p>
        </div>
      
        <div class="testimony">
          <img src="images/person_2.jpg" alt="Image" class="img-fluid">
          <h3>Nathalie Channie</h3>
          <span class="sub-title">Owner of Building Co.</span>
          <p>&ldquo;<em>Eveniet, laboriosam impedit facilis. Voluptatem, repudiandae eligendi maiores sunt itaque, dolores voluptas labore perferendis, illum tenetur suscipit vero officia. Quaerat facilis cum ex a labore iusto, beatae fuga nam rem, quos vel aliquam nobis.</em>&rdquo;</p>
        </div>

        <div class="testimony">
          <img src="images/person_3.jpg" alt="Image" class="img-fluid">
          <h3>Will Turner</h3>
          <span class="sub-title">Owner of Building Co.</span>
          <p>&ldquo;<em>Laboriosam nisi natus quos soluta blanditiis iste in distinctio fugiat perferendis, architecto eveniet provident, consequatur dolore ab nihil voluptatibus laborum magnam cum assumenda nobis, nam quam quae! Unde porro laboriosam nam qui! Eligendi, qui!</em>&rdquo;</p>
        </div>

        <div class="testimony">
          <img src="images/person_4.jpg" alt="Image" class="img-fluid">
          <h3>Nicolas Stainer</h3>
          <span class="sub-title">Owner of Building Co.</span>
          <p>&ldquo;<em>Voluptatibus sed vero corporis reiciendis, ducimus iste aliquam doloribus voluptas nam quo assumenda perferendis excepturi accusantium, ipsam minus tempora earum exercitationem laborum. Delectus voluptate quaerat repellat obcaecati. Qui nemo ad similique facere modi dolores.</em>&rdquo;</p>
        </div>
      </div>
    </div>
