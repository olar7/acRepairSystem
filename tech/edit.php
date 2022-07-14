<?php require_once 'include/header.php'?>
<?php 
    require_once '../include/dbconnect.php';
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $query = "SELECT * FROM hire_worker WHERE hire_id = '$id'";
      $result = mysqli_query($conn,$query);
      $data = mysqli_fetch_assoc($result);
    }
    
    
?>
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
            Form elements
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form elements</li>
            </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Approval</h4>
              <form class="forms-sample" method="post" action="include/tech_form.php">
                <div class="form-group">
                  <label for="exampleInputUsername1">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputUsername1" value="<?php echo $data['name']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $data['email']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Contact</label>
                  <input type="number" name="contact" class="form-control" id="exampleInputEmail1" value="<?php echo $data['contact']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Required Data</label>
                  <input type="date" name="hire_date" class="form-control" id="exampleInputEmail1" value="<?php echo $data['need_date']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <textarea class="form-control" name="desc"><?php echo $data['description']?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Approve</label>
                  <select name="approve" class="form-control" id="exampleInputEmail1">
                    <option value="null">-------------</option>
                    <option value="1">Confirm</option>
                    <option value="0">Cancel</option>
                  </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $data['hire_id']?>">
                <input type="submit" class="btn btn-primary mr-2" value="Update" name="update">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
<?php require_once 'include/footer.php'?>