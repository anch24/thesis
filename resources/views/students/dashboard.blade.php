
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    
  </head>

  <body>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
          </div>
          <div class="col-md-2">
              <div class="dropdown create">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Student
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Edit Profile</a></li>
                    <li><a href="#" >
                        Logout
                        </a>
                        
                    </li>
                  </ul>
              </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
              <div class="list-group">
                <a href="#" class="list-group-item active main-color-bg"> 
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                </a>
                <a href="#" class="list-group-item">
                    <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Class
                </a>
                <a href="#" class="list-group-item">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Subjects
                </a>
                <a href="#" class="list-group-item">
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Grades
                </a>
                <a href="#" class="list-group-item">
                    <span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span> Your Instructors
                </a>
                <a href="#" class="list-group-item">
                    <span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span> Your Profile
                </a>
              </div>
              <div class="well">
                <h4>Disk Space</h4>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    60%
                  </div>
                </div>
                <h4>Bandwidth Used</h4>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
                  </div>
                </div>
              </div>
          </div>
          <div class="col-md-9">
              <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title">Website Overview</h3>
                </div>
                <div class="panel-body">
                  <div class="col-md-3">
                    <div class="well dash-box">
                      <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="badge">12</span></h2>
                      <h4>Users</h4>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
