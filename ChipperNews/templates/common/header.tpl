<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Header</title>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}css/styles-header.css">
    <script src="{$BASE_URL}js/bootstrap.min.js"></script>
    <!-- Animals graphic by -->
    <!--a href="http://www.flaticon.com/authors/zlatko-najdenovski">Zlatko Najdenovski</a> from <a href="http://www.flaticon.com/">Flaticon</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a>. Made with <a href="http://logomakr.com" title="Logo Maker">Logo Maker</a>-->
    <!-- Optional Bootstrap theme -->
    <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
</head>

<body>
   <div class="jumbotron">
            <a href="{$BASE_URL}pages/search/frontpage.php">
            <img class="img-responsive" src="{$BASE_URL}images/assets/logo_navigation.png" alt"logo">
		    </a>
           <ul class="nav navbar-nav">
                    <li><a href="#">Programming</a></li>
                    <li><a href="#">Hardware</a></li>
                    <li><a href="#">Software</a></li>
                    <li><a href="#">Industry</a></li>
                    <li><a href="#">Technology</a></li>
                </ul>
    </div>
    <nav class="navbar navbar-default headernav">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              
                <ul class="nav navbar-nav navbar-right">
                    {if $USERNAME}
                    <li><a href="{$BASE_URL}actions/users/logout">Logout</a></li>
                    <li><a href="{$BASE_URL}pages/users/profile">Profile</a></li>
                    <li><a href="{$BASE_URL}pages/articles/newsfeed">Feed</a></li>
                    {else}
                     <li><a data-toggle="modal" data-target="#myModal" href="">Login</a></li>     
                     <li><a href="{$BASE_URL}pages/users/register">Register</a></li>
                    {/if}          
                </ul>          
            </div>
            <div class="navbar-right collapse navbar-collapse">
                
               <form class="navbar-form navbar-right">
                        <div class="form-group has-feedback">

                            <input type="text" style="border-radius:16px;color:#C5C9A4" class="form-control" placeholder="Search">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>

                 </form>
            </div>
            </div>     <!-- /.container-fluid -->
    </nav>
</body>

</html>