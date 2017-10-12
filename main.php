php 
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Template</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/sb-admin.css" rel="stylesheet">
    
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body class="fixed-nav" id="page-top">

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#">Start The Project</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id ="sidenavHeight">
          <li class="nav-item" style="" data-toggle="tooltip" data-placement="right" title="Home">
            <a class="nav-link" href="index.php">
              <i class="fa fa-fw fa-home" ></i>
              <span class="nav-link-text" ">
                Home</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile">
            <a class="nav-link " href="profile.php" value="<?php ?>">

              <i class="fa fa-fw fa-user"></i>
              <span class="nav-link-text" >
                <!-- style="color:#ffd700;" -->
                Profile</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Subject">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents">
              <i class="fa fa-fw fa-book" id="iconActive"></i>
              <span class="nav-link-text">
                Subject</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                <a href="#">List of Subject</a>
              </li>
              <li>
                <a href="#">Forum</a>
              </li>
              <li>
                <a href="#">My Subject</a>
              </li>
              <li>
                <a href="#">Find Tutor</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Classroom">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti">
              <i class="fa fa-fw fa-building" id="iconActive"></i>
              <span class="nav-link-text">
                Classroom</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti">
              <li>
                <a href="#">Learning Corner</a>
              </li>
              <li>
                <a href="#">Digital Notebook</a>
              </li>
              <li>
                <a href="#">Quiz Corner</a>
              </li>
            </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Calendar">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-calendar" id="iconActive"></i>
              <span class="nav-link-text">
                Calendar</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Rating Board">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-star" id="iconActive"></i>
              <span class="nav-link-text">
                Rating Board</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left" ng-class="{'active': searchType == 'news'}"></i>
            </a>
          </li>
        </ul>

<!-- settings -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-lg fa-cog"></i>
              <span class="d-lg-none">Settings</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">New Messages:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>David Miller</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                View all messages
              </a>
            </div>
          </li>
<!-- notification -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
              <span class="d-lg-none">Notification
                <span class="badge badge-pill badge-warning">6 New</span>
              </span>
              <span class="new-indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
                <span class="number">6</span>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">New Alerts:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-danger">
                  <strong>
                    <i class="fa fa-long-arrow-down"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up"></i>
                    Status Update</strong>
                </span>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                View all Notification
              </a>
            </div>
          </li>
<!-- Profile -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-lg fa-user-circle-o"></i>
              <span class="d-lg-none">Profile</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">Profile</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>David Miller</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">
                View Profile
              </a>
            </div>
          </li>
<!-- Lagout -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </nav>
     
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="#">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.js"></script>

  </body>

</html>
