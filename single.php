<?php require_once 'include/header.php'?>
<?php 
    require_once 'include/dbconnect.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM user,user_details WHERE user.uid = user_details.uid
        AND user.uid = '$id'";

        $result3 = mysqli_query($conn,$query);
        $data3 = mysqli_fetch_assoc($result3);
    }

?>
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Worker Details</h4>
                <h2>Worker Description</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="down-content">
                      <a href="blog-details.html"><h4><?php echo $data3['name'] ?></h4></a>
                      <p><?php echo $data3['description']?></p>
                      <p>Expereince: <?php echo $data3['experience']?></p>
                      <p>Hourly Rate: <?php echo $data3['hourly_rate']?></p>
                      <p>
                        <?php if(isset($_SESSION['uid'])):?>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Hire Me
                          </button>
                        <?php else:?>
                          <a href="login.php" class="btn btn-primary">Login</a>
                        <?php endif?>
                      
                      </p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item comments">
                    <div class="sidebar-heading">
                      <h2>1 comments</h2>
                    </div>
                    <div class="content">
                      <ul>
                          <li>
                              <div class="author-thumb">
                                  <img src="assets/front/images/comment-author-01.jpg" alt="" >
                              </div>
                              <div class="right-content">
                                  <h4>John Doe<span>2022-05-12</span></h4>
                                  <p>This is a very good worker</p>
                              </div>
                          </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item submit-comment">
                    <div class="sidebar-heading">
                      <h2>Your comment</h2>
                    </div>
                    <div class="content">
                      <form id="comment" action="#" method="post">
                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your name" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" id="email" placeholder="Your email" required="">
                            </fieldset>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <fieldset>
                              <input name="subject" type="text" id="subject" placeholder="Subject">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <input type="submit" id="form-submit" class="main-button" name="comment" value="Comment">
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="content">
                        <img src="assets/front/images/workers/<?php echo $data3['image']?>" height="300">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="hire.php">
                    <label>Your name:</label>
                    <input type="text" name="name" class="form-control">
                    <label>Hire date:</label>
                    <input type="date" name="hire_date" class="form-control">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control">
                    <label>Contact</label>
                    <input type="text" name="contact" class="form-control">
                    <label>Description</label>
                    <textarea class="form-control" name="desc"></textarea>
                    <input type="hidden" name="worker_id" value="<?php echo $data3['uid']?>">
                    <button type="button" class="btn btn-secondary mt-3" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary mt-3">Save changes</button>
                </form>
            </div>
            </div>
        </div>
    </div>


<?php require_once 'include/footer.php'?>