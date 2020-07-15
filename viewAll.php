<html>
    <head>
        <title>All_Users</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style="background-image:url('bg.png');background-size: cover;">
    <?php
        include_once 'DBConnector.php';
        include_once 'user.php';

        $conn = new DBConnector; //DB connection is made
        $first_name=0;
        $last_name=0;
        $city=0;
        //i've added username and password so that i can meet the no. of variables needed in the construct
        $username=0;
        $password=0;
        $user = new User($first_name,$last_name,$city,$username,$password);
        $res = $user -> readAll();

        echo '
        <div class="row">
            <div class="col s12 m9">
                <div class="card" style="margin-left:40%!important;margin-top:0%!important;">
                    <div class="card-content">
                        <a class="waves-effect waves-light btn-small" href="Homepage.php"><i class="material-icons left">navigate_before</i></a>
                        <h6 align="center"><b>Current Users</b></h6>
                            <table align="center"style="width:100%!important;"> 
                        <tr> 
                          <td> <font face="Arial"><b>UserID</b></font> </td> 
                          <td> <font face="Arial"><b>First Name</b></font> </td> 
                          <td> <font face="Arial"><b>Last Name</b></font> </td> 
                          <td> <font face="Arial"><b>City</b></font> </td> 
                        </tr>
                    </div>                    
                </div>
            </div>
        </div>';

        while ($row = $res->fetch_assoc()) {
            $user_id = $row["user_id"];
            $first_name = $row["first_name"];
            $last_name = $row["last_name"];
            $user_city = $row["user_city"];
            
             echo '<tr> 
                      <td>'.$user_id.'</td> 
                      <td>'.$first_name.'</td> 
                      <td>'.$last_name.'</td> 
                      <td>'.$user_city.'</td> 
                  </tr>';
            
        }
?>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>