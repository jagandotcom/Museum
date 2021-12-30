<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <script src="app.js" ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Museum in your hand</title>
    <style>
        .parent1{
            position:relative;
            color: #262626;
            height:300px;
            margin-top:200px;
        }
        .ticket{
            position:absolute;
            top:105px;
            left:10px;
            z-index:99;
        }
        .above{
            top:0px;
        }
        .parent2{
            height:300px;
            position:absolute;

        }
        .adult{
            margin-left:-50px;
        }
        .child{
            margin-left:150px;
        }
        .below{
            margin-top:30px;
            margin-left:-160px;
            font-size:14px;
            white-space: nowrap;
        }
        .date{
            margin-left:5px;
        }
        .phno{        
            margin-left:20px;
        }
        .time{
            margin-left:20px;
        }
        
        
    </style>
    <script>
      
    </script>
</head>
    <body style="background-color:#212529" >
    <div class="container parent1">
    <img src="./image/finalticket.png">
    <div class="parent2 " >
    <?php 
        $user1 = $_POST['user1'];
        $con = new mysqli("localhost","root","","museum");
        $sql = "SELECT * FROM visitors WHERE name1='$user1'";
        $result =  $con->query($sql);

        while ($row=$result->fetch_assoc()){
            echo " <div class='ticket'>";
            echo "<div class='above  '> <h1 class='d-inline adult'>$row[adult]</h1><h1  class='d-inline child '>$row[child]</h1></div> ";
            echo " <br>";
            echo " <div class='below' > <b class='d-inline name'>$row[name1]</b> <b class='d-inline date'> $row[date1]</b> <b class='d-inline phno'> $row[phnumber1]</b> <b class='d-inline time'>9:00a.m</b></div>  ";
            echo " </div>";
            
           exit();
        }

        $con->close();
        ?>
        </div>
        </div>
        
        
        <p>ticket booking successful </p>
    
    </body>
</html>