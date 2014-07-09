<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="">
        <title>Abner's alpha version for Automated HTML</title>

        <!-- Bootstrap core CSS -->

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <style>.starter-template{padding:40px 15px;text-align:center;}</style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">Brand</a>
          </div>
          <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                  <li class="active"><a href="./">Schedule</a></li>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Conference Info</a></li>
                  <li><a href="#">Optional Events</a></li>
                  <li><a href="#">Advisory Board</a></li>
                  <li><a href="#">Sponsors</a></li>
            </ul>
          </div>
        </div>
 
        <div class="container">
            <form class="form-horizontal" action="process.php" method="GET">
                <fieldset>
                    <legend>Automated created html for web edits</legend>
                    <div class="row"><span class="col-lg-2">Tag Name</span><span class="col-lg-2">Tag Class</span><span class="col-lg-8">Please enter content here</span></div>
                    <div class="row info" data-id="1">
                        <div class="form-group col-lg-2">

                                <select class="form-control" name="tag">
                                    <option value="p" selected>p</option>
                                    <option value="br">br</option>
                                </select>

                        </div>
                        <div class="form-group col-lg-2">
                                <select class="form-control" name="class">
                                    <option value="" selected></option>
                                    <option value="Day">Day</option>
                                    <option value="BlockTime">BlockTime</option>
                                    <option value="BlockTitle">BlockTitle</option>
                                    <option value="Session">Session</option>
                                    <option value="Person">Person</option>
                                    <option value="Firm">Firm</option>
                                </select>                      
                        </div>                    
                        <div class="form-group col-lg-7">
                            <textarea class="form-control" rows="3" name="content"></textarea>         
                        </div>
                        <div class="form-group col-lg-1">
                                <input type="button" class="btn btn-default update"  value="Update">
                        </div>                      
                    </div>
                </fieldset>
                    <div class="row">
                        <input type="button" class="btn btn-default col-lg-12 col-xs-12 add"  value="Add">
                    </div>
            </form>
            <div class="panel panel-success row">
              <div class="panel-heading">
                <h3 class="panel-title">HTML CONTENT</h3>
              </div>
              <div class="panel-body">
                
              </div>
            </div>
        </div>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        
    </body>
</html>
