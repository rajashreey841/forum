<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username'] != "") {
} else {
    header("Location:../index.php");
}
$username = $_SESSION['username'];
$userid = $_SESSION['user_Id'];

?>
<html>

<head>
    <title></title>

    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../css/global.css">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php"></a>
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">VIT FORUM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#quest"> Post a Question</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $username; ?></a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container" style="margin:7% auto;">
        <h4>Latest Discussion</h4>
        <hr>
        <?php include "../functions/db.php";

        $sel = mysqli_query($con, "SELECT * from category");
        while ($row = mysqli_fetch_assoc($sel)) {
            extract($row);
            echo '<div class="panel panel-success">
                    <div class="panel-heading">
                    <h3 class="panel-title">' . $category . '</h3>
                    </div> 
                    <div class="panel-body">
                    <table class="table table-stripped">
                    <tr>
                    <th>Topic title</th>
                    <th>Category</th>
                    <th>Action</th>
                    </tr>';
            $sel1 = mysqli_query($con, "SELECT * from tblpost where cat_id='$cat_id' ");
            while ($row1 = mysqli_fetch_assoc($sel1)) {
                extract($row1);
                echo '<tr>';
                echo '<td>' . $title . '</td>';
                echo '<td>' . $category . '</td>';
                echo '<td><a href="content.php?post_id=' . $post_Id . '"><button class="btn btn-success">View</button></td>';
                echo '</tr>';
            }


            echo '</table>
                    </div>
                </div>';
        }
        ?>
        <div class="my-quest" id="quest">
    <div>
      <form method="POST" action="question-function.php">

        <label>Category</label>
        <select name="category" class="form-control">
          <option></option>
          <option value=1>Networking</option>
          <option value=2>Project</option>
          <option value=3>Programming</option>
          <option value=4>Multimedia</option>
          <option value=5>Artificial Intelligence</option>
          <option value=6>Operating Systems</option>
          <option value=7>Externals</option>
          <option value=8>Holidays</option>
          <option value=9>Notice Board</option>
          <option value=10>Fee Payments</option>
          <option value=11>Hackathon</option>
          <option value=12>Sports Day</option>
          <option value=13>Ethnic Day</option>
          <option value=14>Internals</option>
          <option value=15>Lab Exams</option>
          <option value=16>Microcontrollers</option>
          <option value=17>Aerodynamics</option>
          <option value=18>Mechanics of Materials</option>
        </select>
        <label>Topic Title</label>
        <input type="text" class="form-control" name="title" required>
        <label>Content</label>
        <input type="text" class="form-control" name="content" required>
        <br>
        <input type="submit" class="btn btn-success pull-right" value="Post">
        <a class="btn btn-fail pull-right" href="" class="pull-right">Close</a>
      </form><br>
      <hr>
    </div>
  </div>



</body>

</html>