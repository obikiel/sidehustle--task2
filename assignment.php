<!DOCTYPE html>
<html>
<head>
    <title>Recharge card generator</title>
    <style>
        .box{ 
            box-shadow:1px 1px 3px;
            width:fit-content;
            margin-left: 450px;
            }
        .box2{
            display:flex-item;
            border:1px solid black;
            width:fit-content;
    
        }
       
    </style>
</head>
<body>
    <div>
    <h1 align="center" class="box"> <bold>print your recharge card </bold></h1>
    </div>
    <?php
    function generator()
    {
    if (isset($_POST['submit']))
    {
        for($i=0;$i<200;$i++)
        {
            $code = mt_rand(111111111111,999999999999);
            echo $code;
            echo "<br>";
            };     
        }
    }
 
?>  
    <div class="box3">
    <form action="/assignment.php" method="post">
        <input type="submit" name="submit" value="generator">
    </form>
    </div>
    <div class="box2"><?php echo generator(); ?></div>



</body>
</html>

