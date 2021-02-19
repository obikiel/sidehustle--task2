<!DOCTYPE html>
<html>
<head>
    <title>Recharge card generator</title>
    <style>
        .container{
            display:flex;
            flex-direction:column;
            align-items: center;
        }
        .box2{
            display:flex-item;
            border:1px solid black;
            width:fit-content;
    
        }
        .generator{
            margin-top:10px;
            border:1px solid black;
            width:150px;
            text-align: center;
            box-shadow:1px 2px 4px 1px;
        }
       .button{
           box-shadow: 1px 1px;
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
    <div class="container">
    <form action="" method="post">
        <input class="button" type="submit" name="submit" value="generator">
    </form>
    <div class="generator"><?php echo generator(); ?></div>
    </div>



</body>
</html>

