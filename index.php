<?php require_once 'include/header.php'?>
<?php
  require_once 'include/dbconnect.php';
  $query = "SELECT * FROM user,user_details WHERE user.uid = user_details.uid AND user.role='tech'";
    $result = mysqli_query($conn,$query);
?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
          <?php foreach($result as $data):?>
            <div class="item">
              <img src="assets/front/images/workers/<?php echo $data['image']?>" alt="">
              <div class="item-content">
                
                <div class="main-content">
                  <div class="meta-category">
                    <span style="color:black">$<?php echo $data['hourly_rate']?></span>
                  </div>

                  <a href="#"><h4><?php echo $data['name']?></h4></a>
                </div>
              
              </div>
            </div>
          <?php endforeach?>

        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Get the right Technicians</span>
                  <h4>Get on best prices</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a href="contact.html">Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <h2 class="text-center">Blog</h2>
          <br>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/front/images/blog-1-720x480.jpg" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details.html"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4></a>
                  
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>

                  <ul class="post-info">
                    <li><a href="#">John Doe</a></li>
                    <li><a href="#">10.07.2020 10:20</a></li>
                    <li><a href="#"><i class="fa fa-comments" title="Comments"></i> 12</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/front/images/blog-2-720x480.jpg" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details.html"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4></a>
                  
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>

                  <ul class="post-info">
                    <li><a href="#">John Doe</a></li>
                    <li><a href="#">10.07.2020 10:20</a></li>
                    <li><a href="#"><i class="fa fa-comments" title="Comments"></i> 12</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/front/images/blog-3-720x480.jpg" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details.html"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4></a>
                  
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>

                  <ul class="post-info">
                    <li><a href="#">John Doe</a></li>
                    <li><a href="#">10.07.2020 10:20</a></li>
                    <li><a href="#"><i class="fa fa-comments" title="Comments"></i> 12</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="blog-posts">
      <div class="container">
        <div class="sidebar-item comments">
            <h2 class="text-center">Testimonials</h2>
          <br>
          <br>
          <div class="content">
            <ul>
              <li>
                <div class="author-thumb">
                  <img src="assets/front/images/comment-author-01.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>John Doe<span>10.07.2020</span></h4>
                  <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                  <img src="assets/front/images/comment-author-02.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Jane Smith<span>10.07.2020</span></h4>
                  <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                </div>
              </li>
              <li>
                <div class="author-thumb">
                  <img src="assets/front/images/comment-author-03.jpg" alt="">
                </div>
                <div class="right-content">
                  <h4>Kate Blue<span>10.07.2020</span></h4>
                  <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                </div>
              </li>
            </ul>
          </div>

          <br>
          <br>
        
          <div class="row justify-content-md-center">
            <div class="col-md-3">
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php require_once 'include/footer.php'?>


    