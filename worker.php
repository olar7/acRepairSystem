<?php require_once 'include/header.php'?>
<?php
    require_once 'include/dbconnect.php';

    $query = "SELECT * FROM user,user_details WHERE user.uid = user_details.uid AND user.role='tech'";
    $result = mysqli_query($conn,$query);
?>

<?php if(isset($_SESSION['success'])):?>
  <script>
    alert('Worker is hired');
  </script>
  <?php unset($_SESSION['success'])?>
<?php endif?>
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Worker</h4>
                <h2>Hire the best workers</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <div class="row">
              <?php foreach($result as $data):?>
                <div class="col-md-3 col-sm-4">
                    <div class="blog-post">
                        <div class="blog-thumb">
                            <img src="assets/front/images/workers/<?php echo $data['image']?>" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Name:<?php echo $data['name']?></h4>
                            <p>Hourly Rate: <?php echo $data['hourly_rate']?></p>
                            <a href="single.php?id=<?php echo $data['uid']?>" class="btn btn-primary btn-sm mb-2">View</a>
                            <ul class="post-info">
                                <li><a href="#"><i class="fa fa-facebook"></i></a> &nbsp;</li>
                                <li>&nbsp; <a href="#"><i class="fa fa-twitter"></i></a> &nbsp;</li>
                                <li>&nbsp; <a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
              <?php endforeach?>
          </div>
        </div>
      </div>
    </section>





<?php require_once 'include/footer.php'?>