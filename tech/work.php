<?php require_once 'include/header.php'?>
<?php 
    require_once '../include/dbconnect.php';
    $query = "SELECT hire_worker.hire_id, hire_worker.name, hire_worker.email, hire_worker.need_date, 
              hire_worker.contact,hire_worker.description,hire_worker.approve,user.name,hire_worker.approve as worker_name
              
              FROM hire_worker,user where user.uid = hire_worker.woker_id
              AND user.uid=".$_SESSION['tech_id'];
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
                            <th>Approval</th>
                            <th>Action</th>
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
                                <td>
                                  <?php if($data['approve'] == 0):?>
                                    <button class="btn btn-danger btn-sm">Not Approved</button>
                                  <?php else:?>
                                    <button class="btn btn-success btn-sm">Approved</button>
                                  <?php endif?>
                                </td>
                                <td>
                                  <a href="edit.php?id=<?php echo $data['hire_id']?>">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                </td>
                                
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