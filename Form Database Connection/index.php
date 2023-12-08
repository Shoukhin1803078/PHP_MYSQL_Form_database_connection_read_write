<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document1</title>
    <link rel="stylesheet" href="victim.css">
  

</head>

<body>


    <form action="insert.php" method="POST">
        <div class="container">


     



            <!-- victim form start -->
            <div class="item-2">
                
                    <h2>(Victim/Your Info)</h2>

                    <div class="same">
                        <p>Name :</p>
                        <input type="text" name="vname" class="name" required />
                    </div>
                    
            </div>




            <div class="item-4">
                <input type="submit" class="submit" value="Submit" name="submit">
                <br>
                <h2>Your all data will be hidden </h2>

            </div>
            


            <!-- 
            <div class="read class">
              <button onclick="redirectToTarget()">read</button>

             <script>
               function redirectToTarget() {
                   window.location.href = 'read.php';
                }
             </script>
            </div>
             -->

            
            <!-- Button for read all data from the database table  -->
            <?php
               
                $targetUrl = 'read.php';
                echo '<a href="' . $targetUrl . '" style="display: inline-block; padding: 10px 20px; font-size: 16px; text-align: center; text-decoration: none; cursor: pointer; background-color: #4CAF50; color: white; border: none; border-radius: 5px;">Display all data from database</a>';
    
             ?>





            <div class="item-5">
                <p>Copyright@<a href="#">SHOUKHIN</a> all right reserved.</p>
            </div>

        </div>
    </form>

</body>


</html>
