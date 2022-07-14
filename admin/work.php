<?php require_once 'include/header.php'?>
<?php 
    require_once '../include/dbconnect.php';
    $query = "SELECT hire_worker.name, hire_worker.email, hire_worker.need_date, hire_worker.contact,hire_worker.description,user.name as worker_name FROM hire_worker,user where user.uid = hire_worker.woker_id;";
    $result = mysqli_query($conn,$query);
?>
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              All Work
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Work</li>
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
              <h4 class="card-title">All Work</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Work Description</th>
                            <th>Worker Name</th>
                            <th>Worker Hired Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($result as $i => $data):?>
                            <tr>
                                <td><?php echo ++$i?></td>
                                <td><?php echo $data['name']?></td>
                                <td><?php echo $data['contact']?></td>
                                <td><?php echo $data['email']?></td>
                                <td><?php echo $data['description']?></td>
                                <td><?php echo $data['worker_name']?></td>
                                <td><?php echo $data['need_date']?></td>
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