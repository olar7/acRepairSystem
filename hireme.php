<?php require_once 'include/header.php'?>
<?php
    require_once 'include/dbconnect.php';

    $id = $_SESSION['uid'];

    $query = "SELECT user.uid,user.name,user.email,hire_worker.description, hire_worker.need_date, hire_worker.approve
    FROM hire_worker,user WHERE hire_worker.woker_id = user.uid AND hire_worker.hire = '$id';
    ";
    $result = mysqli_query($conn,$query);
?>
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Worker</h4>
                <h2>Repair Worker Details</h2>
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
            <div class="col-md-12 col-sm-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Description</th>
                            <th>Needed Date</th>
                            <th>Approval</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $i => $data):?>
                            <tr>
                                <td><?php echo ++$i;?></td>
                                <td><?php echo $data['name'];?></td>
                                <td><?php echo $data['email'];?></td>
                                <td><?php echo $data['description']?></td>
                                <td><?php echo $data['need_date'];?></td>
                                <td>
                                  <?php if($data['approve'] == 0):?>
                                    <button class="btn btn-danger btn-sm">Not Approved</button>
                                  <?php else:?>
                                    <button class="btn btn-success btn-sm">Approved</button>
                                  <?php endif?>
                                </td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>              
          </div>
        </div>
      </div>
    </section>





<?php require_once 'include/footer.php'?>