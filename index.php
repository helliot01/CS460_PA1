<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>

    <style>
    #button1 , #button2 {
    display:inline-block;
    }
    </style>

    <body>
        

           
        <div class="container">
            <h1 style="text-align:center"> CS460 PA 1.2</h1><br>
            <h3 style="text-align:center"> Movie Madness </h3><br>
            <p style="text-align:center"> Created By Harrison Elliot and Tabitha Oanda </p><br>
        </div>


       <!-- Working on adding different viewing function

        <form action="/action_page.php">
        <p>View All:</p>
          <input type="radio" id="movies" name="fav_language" value="Movies">
          <label for="movies">Movies</label><br>
          <input type="radio" id="series" name="fav_language" value="Series">
          <label for="series">Series</label><br>
          <input type="radio" id="people" name="fav_language" value="People">
          <label for="people">People</label>
        <br>
        <input type="submit" value="View">
        </form>

        -->

        <div class = "container">
            <button id="regClicked">Register Here</button>
            <form id="registrationForm" method="post" action="">
                <div id="regForm" class="input-group mb-3" style="display:none">
                    <input type="text" class="form-control" placeholder="Enter User Email" name="regUID" id="regUID">
                    <input type="text" class="form-control" placeholder="Enter Name" name="regName" id="regName">
                    <input type="text" class="form-control" placeholder="Enter Age" name="regAge" id="regAge">
                    <button class="btn btn-outline-secondary" type="submit" name="reg_submitted" id="button-addon2">Register</button>
                </div>
            </form>

            <br>

            <form method= "post">

                <input type="submit" name="button1" value="All Movies"/>
                <input type="submit" name="button2" value="All Series"/>
                <input type="submit" name="button3" value="All People"/>                
                <input type="submit" name="button5" value="All Actors"/>
                <input type="submit" name="button4" value="All Users"/>
            </form>
        </div>

        <div class = "container">
            <b>Search by minimum rating:</b>
        </div>

        <div class = "container">
    
            <form id="ratingLimitForm" method="post" action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter minimum rating" name="inputRating" id="inputRating">
                    <button class="btn btn-outline-secondary" type="submit" name="submitted" id="button-addon2">Search</button>
                </div>
            </form>
        </div>

        <div class = "container">
            <b>Search a User's Likes:</b>
        </div>

        <div class = "container">
    
            <form id="userLikesForm" method="post" action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter User Email" name="userID" id="userID">
                    <button class="btn btn-outline-secondary" type="submit" name="email_submitted" id="button-addon2">Enter</button>
                </div>
            </form>
        </div>
        <div class = "container">
            <b>Add a New Like:</b>
        </div>
        <div class = "container">
    
            <form id="newLikeForm" method="post" action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter User Email" name="newLikeUID" id="newLikeUID">
                    <input type="text" class="form-control" placeholder="Enter Motion Picture ID" name="newLikeMPID" id="newLikeMPID">
                    <button class="btn btn-outline-secondary" type="submit" name="newLike_submitted" id="button-addon2">Enter</button>
                </div>
            </form>
        </div>

        <script>
            $(function(){
                $('#regClicked').on('click',function(){  
                    $('#regForm').show();
                    });
                });
        </script>

        <div class="container">
            <?php


                if(isset($_POST['button5']))
                {

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Motion Picture ID</th></tr></thead>";
                    
                    class TableRows extends RecursiveIteratorIterator {
                        function __construct($it) {
                            parent::__construct($it, self::LEAVES_ONLY);
                        }

                        function current() {
                            // return "<td style='width: 30px; border: 1px solid black;'>" . parent::current(). "</td>";
                            return "<td style='text-align:center'>" . parent::current(). "</td>";
                        }

                        function beginChildren() {
                            echo "<tr>";
                        }

                        function endChildren() {
                            echo "</tr>" . "\n";
                        }
                }

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "pa1.2";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // SQL
                    $stmt = $conn->prepare("SELECT name, mpid FROM Role INNER JOIN People where role.pid=people.id and role.role_name='Actor'");
                    $stmt->execute();

                    // set the resulting array to associative
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                        echo $v;
                    }
                }

                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
                echo "</table>";
                }


                if(isset($_POST['button4']))
                {

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>User Email</th><th class='col-md-2'>Age</th></tr></thead>";
                    
                    class TableRows extends RecursiveIteratorIterator {
                        function __construct($it) {
                            parent::__construct($it, self::LEAVES_ONLY);
                        }

                        function current() {
                            // return "<td style='width: 30px; border: 1px solid black;'>" . parent::current(). "</td>";
                            return "<td style='text-align:center'>" . parent::current(). "</td>";
                        }

                        function beginChildren() {
                            echo "<tr>";
                        }

                        function endChildren() {
                            echo "</tr>" . "\n";
                        }
                }

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "pa1.2";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // SQL
                    $stmt = $conn->prepare("SELECT name, uemail, age FROM User");
                    $stmt->execute();

                    // set the resulting array to associative
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                        echo $v;
                    }
                }

                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
                echo "</table>";
            }
            

                if(isset($_POST['button3']))
                {

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Nationality</th><th class='col-md-2'>Date of Birth</th><th class='col-md-2'>Gender</th></tr></thead>";
                    
                    class TableRows extends RecursiveIteratorIterator {
                        function __construct($it) {
                            parent::__construct($it, self::LEAVES_ONLY);
                        }

                        function current() {
                            // return "<td style='width: 30px; border: 1px solid black;'>" . parent::current(). "</td>";
                            return "<td style='text-align:center'>" . parent::current(). "</td>";
                        }

                        function beginChildren() {
                            echo "<tr>";
                        }

                        function endChildren() {
                            echo "</tr>" . "\n";
                        }
                }

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "pa1.2";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // SQL
                    $stmt = $conn->prepare("SELECT name, nationality, dob, gender FROM People");
                    $stmt->execute();

                    // set the resulting array to associative
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                        echo $v;
                    }
                }

                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
                echo "</table>";
            }

                if(isset($_POST['button2']))
                {

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Production</th><th class='col-md-2'>Budget</th><th class='col-md-2'>Rating</th><th class='col-md-2'># of Seasons</th><th class='col-md-2'>ID</th></tr></thead>";
                    
                    class TableRows extends RecursiveIteratorIterator {
                        function __construct($it) {
                            parent::__construct($it, self::LEAVES_ONLY);
                        }

                        function current() {
                            // return "<td style='width: 30px; border: 1px solid black;'>" . parent::current(). "</td>";
                            return "<td style='text-align:center'>" . parent::current(). "</td>";
                        }

                        function beginChildren() {
                            echo "<tr>";
                        }

                        function endChildren() {
                            echo "</tr>" . "\n";
                        }
                }

                    //Adding Functionality To Like Movies / Series
                    class LikeRows extends RecursiveIteratorIterator
                    {
                        function __construct($it)
                        {
                            parent::__construct($it, self::LEAVES_ONLY);
                        }
            
                        function current()
                        {
                            return "<td style='text-align:center'>" . parent::current() ."</td>";
                        }
            
                        function beginChildren()
                        {
                            echo "<tr>";
                        }
            
                        function endChildren() {
                            echo '<td><input type="button" name = "like_button" value = "Like"/></td>';
                            echo "</tr>" . "\n";
                        } 
                }

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "pa1.2";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // SQL
                    $stmt = $conn->prepare("SELECT name, production, budget, rating, season_count, id FROM series INNER JOIN motion_picture on series.mpid=motion_picture.id");
                    $stmt->execute();

                    // set the resulting array to associative
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach(new LikeRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                        echo $v;
                    }
                }

                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
                echo "</table>";
            }

                if(isset($_POST['button1']))
                {

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Production</th><th class='col-md-2'>Budget</th><th class='col-md-2'>Rating</th><th class='col-md-2'>Box Office Collection</th><th class='col-md-2'>ID</th></tr></thead>";
                    
                    class TableRows extends RecursiveIteratorIterator {
                        function __construct($it) {
                            parent::__construct($it, self::LEAVES_ONLY);
                        }

                        function current() {
                            // return "<td style='width: 30px; border: 1px solid black;'>" . parent::current(). "</td>";
                            return "<td style='text-align:center'>" . parent::current(). "</td>";
                        }

                        function beginChildren() {
                            echo "<tr>";
                        }

                        function endChildren() {
                            echo "</tr>" . "\n";
                        }
                }
                    class LikeRows extends RecursiveIteratorIterator
                    {
                        function __construct($it)
                        {
                            parent::__construct($it, self::LEAVES_ONLY);
                        }
            
                        function current()
                        {
                            return "<td style='text-align:center'>" . parent::current() ."</td>";
                        }
            
                        function beginChildren()
                        {
                            echo "<tr>";
                        }
            
                        function endChildren() {
                            echo '<td><input type="button" name = "like_button" value = "Like"/></td>';
                            echo "</tr>" . "\n";
                        } 
                }

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "pa1.2";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // SQL
                    $stmt = $conn->prepare("SELECT name, production, budget, rating, boxoffice_collection, id FROM Movie INNER JOIN motion_picture on Movie.mpid=motion_picture.id");
                    $stmt->execute();

                    // set the resulting array to associative
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach(new LikeRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                        echo $v;
                    }
                }

                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
                echo "</table>";
            }

                if(isset($_POST['submitted']))
                {
                    $ratingLimit = $_POST["inputRating"]; 

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Rating</th></tr></thead>";

                    class TableRows extends RecursiveIteratorIterator {
                        function __construct($it) {
                            parent::__construct($it, self::LEAVES_ONLY);
                        }

                        function current() {
                            // return "<td style='width: 30px; border: 1px solid black;'>" . parent::current(). "</td>";
                            return "<td style='text-align:center'>" . parent::current(). "</td>";
                        }

                        function beginChildren() {
                            echo "<tr>";
                        }

                        function endChildren() {
                            echo "</tr>" . "\n";
                        }
                    }

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "pa1.2";

                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // SQL
                        $stmt = $conn->prepare("SELECT name,rating FROM motion_picture where rating>=$ratingLimit");
                        $stmt->execute();

                        // set the resulting array to associative
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                            echo $v;
                        }
                    }
                    catch(PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                    echo "</table>";
                }
                else
                {
                    $ratingLimit = 0;
                }


                if(isset($_POST['email_submitted']))
                {
                    $userID = $_POST["userID"]; 

                    $friendlyMessage = "Showing " . $userID . "'s likes:";

                    echo $friendlyMessage;

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Rating</th></tr></thead>";

                    class TableRows extends RecursiveIteratorIterator {
                        function __construct($it) {
                            parent::__construct($it, self::LEAVES_ONLY);
                        }

                        function current() {
                            // return "<td style='width: 30px; border: 1px solid black;'>" . parent::current(). "</td>";
                            return "<td style='text-align:center'>" . parent::current(). "</td>";
                        }

                        function beginChildren() {
                            echo "<tr>";
                        }

                        function endChildren() {
                            echo "</tr>" . "\n";
                        }
                    }

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "pa1.2";

                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // SQL
                        $stmt = $conn->prepare("SELECT name,rating FROM motion_picture INNER JOIN Likes where uemail='$userID' and Likes.mpid=motion_picture.id");
                        $stmt->execute();

                        // set the resulting array to associative
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                            echo $v;
                        }
                    }
                    catch(PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                    echo "</table>";
                }
                else
                {
                    $userID = 0;
                }

                if(isset($_POST['newLike_submitted']))
                {
                    $newLikeUID = $_POST["newLikeUID"]; 
                    $newLikeMPID = $_POST["newLikeMPID"]; 


                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>User</th><th class='col-md-2'>Name</th></tr></thead>";

                    class TableRows extends RecursiveIteratorIterator {
                        function __construct($it) {
                            parent::__construct($it, self::LEAVES_ONLY);
                        }

                        function current() {
                            // return "<td style='width: 30px; border: 1px solid black;'>" . parent::current(). "</td>";
                            return "<td style='text-align:center'>" . parent::current(). "</td>";
                        }

                        function beginChildren() {
                            echo "<tr>";
                        }

                        function endChildren() {
                            echo "</tr>" . "\n";
                        }
                    }

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "pa1.2";

                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // SQL
                        $stmt = $conn->prepare("INSERT INTO Likes (uemail, mpid) VALUES ('$newLikeUID', $newLikeMPID)");
                        $stmt->execute();



                        // set the resulting array to associative
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                            echo $v;
                        }
                    }
                    catch(PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                    echo "</table>";
                }
                else
                {
                    $userID = 0;
                }


                if(isset($_POST['reg_submitted']))
                {
                    $regUID = $_POST["regUID"]; 
                    $regName = $_POST["regName"];
                    $regAge = $_POST["regAge"]; 
 


                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>User</th><th class='col-md-2'>Name</th></tr></thead>";

                    class TableRows extends RecursiveIteratorIterator {
                        function __construct($it) {
                            parent::__construct($it, self::LEAVES_ONLY);
                        }

                        function current() {
                            // return "<td style='width: 30px; border: 1px solid black;'>" . parent::current(). "</td>";
                            return "<td style='text-align:center'>" . parent::current(). "</td>";
                        }

                        function beginChildren() {
                            echo "<tr>";
                        }

                        function endChildren() {
                            echo "</tr>" . "\n";
                        }
                    }

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "pa1.2";

                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // SQL
                        $stmt = $conn->prepare("INSERT INTO User (uemail, name, age) VALUES ('$regUID', '$regName', $regAge)");
                        $stmt->execute();



                        // set the resulting array to associative
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
                            echo $v;
                        }
                    }
                    catch(PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                    echo "</table>";
                }
                else
                {
                    $userID = 0;
                }


            ?>
        </div>
    </body>
</html>
