<?php require_once 'include/header.php'?>
<?php 
    require_once '../include/dbconnect.php';
    $query = "SELECT * from user_details,user where user_details.uid = user.uid";
    $result = mysqli_query($conn,$query);
?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              All Worker
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Worker</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                <?php if(isset($_SESSION['success'])):?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success']; unset($_SESSION['success'])?>
                    </div>
                <?php endif?>
              <h4 class="card-title">All Workers</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Worker Name</th>
                            <th>Worker Email</th>
                            <th>Worker Experience</th>
                            <th>Worker Hourly Rate</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($result as $i => $data):?>
                            <tr>
                                <td><?php echo ++$i?></td>
                                <td><?php echo $data['name']?></td>
                                <td><?php echo $data['email']?></td>
                                <td><?php echo $data['experience']?> Years</td>
                                <td><?php echo $data['hourly_rate']?></td>
                            </tr>
                        <?php endforeach?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
<?php require_once 'include/footer.php'?>