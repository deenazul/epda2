<!doctype html>
<html lang="en">
<head>
<title>Main Page of Asset Owner</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://irdina.projectmuu.com/epda2/php/sidebar/css/style.css">
</head>
<body>	
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(http://irdina.projectmuu.com/epda2/php/sidebar/images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
             
              <li>
	              <a href="homeowner.php">Manage Credentials</a>
	          </li>
              <li>
	              <a href="doc.php">Manage Estate Administration</a>
	          </li>
              <li>
	              <a href="viewver.php">View Verified Document</a>
	          </li>
              <li>
	              <a href="logout.php">Log Out</a>
	          </li>
	        </ul>
	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
          <!-- //navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
          </div>
        </nav>
        <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 700px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}    
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
</style>


</head>
<body>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>List of Documents </h2></div>
                    <div class="col-sm-4">
                    <button type="button" onclick="window.location.href='adddocform.php'">Upload File</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th>ID</th>
                        <th>Title of Document</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php  
                include_once('dbconnect.php');
             $id = $_GET['id'];
                $title= $_GET['title'];
                $status= $_GET['status'];
                $doc=$_FILES['doc'];
                $sql = "SELECT * FROM tbl_doc ";
                $result = $conn-> query($sql);
                $target_dir = "../uploads/";
    $target_file = $target_dir . $id . "." . $doc . ".pdf";
?> <?php
while($row = $result-> fetch_assoc())
{ ?>
<tr style="align-content:left">
<td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["title"]; ?></td>
    <td><a href="../uploads/<?php echo $row["title"]?>" class="btn btn-danger">View</a>
    <a download="../uploads/<?php echo $row["title"]?>" href="../uploads/<?php echo $row["title"]?>" class="btn btn-danger"> Download</a> </td>
</tr>
<?php
}
?>
                </tbody>
            </table>
        </div>
    </div>
</div>     
</body>
</html>
					</div>
				</div>
			</div>
		</div>
	</section>
      </div>
		</div>

    <script src="http://irdina.projectmuu.com/epda2/php/sidebar/js/jquery.min.js"></script>
    <script src="http://irdina.projectmuu.com/epda2/php/sidebar/js/popper.js"></script>
    <script src="http://irdina.projectmuu.com/epda2/php/sidebar/js/bootstrap.min.js"></script>
    <script src="http://irdina.projectmuu.com/epda2/php/sidebar/js/main.js"></script>
  </body>
</html>

