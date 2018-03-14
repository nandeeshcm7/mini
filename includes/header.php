<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

    <head>         
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pagetitle; ?></title>
        
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="css/semantic.min.css" rel="stylesheet">
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
        <link href="css/mystyle.css"  rel='stylesheet' type='text/css'> 

    </head>   
    <body style="background-color: #ffffff;">
        <div class="templatemo-top-menu">
            <div class="container">
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="home.php" class="navbar-brand"><img src="image/icit2.jpg" alt="ICIT" title=" ICIT HOME" /></a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar" class="external-link">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;"  role="menu" aria-labelledby="dropdownMenu" aria-expanded="false">
                                <li><a href="home.php" class="external-link">Home</a></li>
								<li><a href="SearchAttendReport.php" class="external-link">Monthly Report</a></li>
                                 <li><a href="teacher.php" class="external-link">Employee_Entry</a></li>
                                <li><a href="Overall.php" class="external-link">Overall Report</a></li>
								<li><a href="Salary.php" class="external-link">Salary AT the End OF Month</a></li>
                                  <li><a href="AdminAttendence.php" class="external-link">Update_Attendance</a></li> 

                                <li><a href="start.html" class="external-link" >Log Out</a></li>
                             </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>