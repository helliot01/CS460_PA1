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
            <h1 style="text-align:center"> CS460 PA 1.3</h1><br>
            <h3 style="text-align:center"> Movie Madness </h3><br>
            <p style="text-align:center"> Created By Harrison Elliot and Tabitha Oanda </p><br>
        </div>


        <div class = "container">

            <form method= "post">
                <input type="submit" name="button0" value="All Tables"/>
                <input type="submit" name="button1" value="All Movies"/>
                <input type="submit" name="button2" value="All Series"/>
                <input type="submit" name="button3" value="All People"/>                
                <input type="submit" name="button5" value="All Actors"/>
                <input type="submit" name="button4" value="All Users"/>
                <br>
                <input type="submit" name="button6" value="Populated Movies"/>


                <input type="submit" name="Query7" value="Oldest and Youngest Actors to Win"/>
                <input type="submit" name="Query12" value="Actors in both Marvel and Warner Bros."/>
                <input type="submit" name="Query13" value="MPs with higher rating comedies"/>

                <input type="submit" name="Query15" value="Actors with same birthday"/>

            </form>
        </div>

        <!-- query 4 -->
        <div class = "container">
            <b>Search Movie by Filming Country:</b>
        </div>

        <div class = "container">
    
            <form id="shootingLocationForm" method="post" action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter shooting location" name="inputShootingLocation" id="inputShootingLocation">
                    <button class="btn btn-outline-secondary" type="submit" name="Location" id="button-addon3">Search</button>
                </div>
            </form>
        </div>

        <!-- query 5 -->
        <div class = "container">
            <b>Search Movie by Zip Code:</b>
        </div>

        <div class = "container">
    
            <form id="zip" method="post" action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Motion Picture by Zip Code" name="inputzip" id="inputzip">
                    <button class="btn btn-outline-secondary" type="submit" name="zipDir" id="button-addon3">Search</button>
                </div>
            </form>
        </div>

         <!-- query 6 -->
         <div class = "container">
            <b>Search people by k awards:</b>
        </div>

        <div class = "container">
    
            <form id="k_awards" method="post" action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search people by K awards" name="k_wards" id="k_wards">
                    <button class="btn btn-outline-secondary" type="submit" name="k_button" id="button-addon3">Search</button>
                </div>
            </form>
        </div>

        <!-- query 8 -->
        <div class="container">
            <b>Find Producers with movies between box office coll. and budget (Query 8) :</b>
        </div>
        <div class="container">

        <form id="Query8Form" method="post" action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter Box Office Collection" name="boxOffID" id="boxOffID">
                <input type="text" class="form-control" placeholder="Enter Budget" name="budgetID" id="budgetID">
                <button class="btn btn-outline-secondary" type="submit" name="Query8" id="button-addon2">Enter</button>
            </div>
        </form>
        </div>

        <!-- query 9 -->
        <div class = "container">
            <b>Search for People with multiple roles based on ratings (Query 9):</b>
        </div>

        <div class = "container">
    
            <form id="k_rating" method="post" action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search people by K rated movies" name="k_rate" id="k_rate">
                    <button class="btn btn-outline-secondary" type="submit" name="k_rate_button" id="button-addon3">Search</button>
                </div>
            </form>
        </div>

        <!-- query 10 -->
        <div class = "container">
            <b>Top 2 Boston Thrillers:</b>
        </div>

        <div class = "container">
    
            <form id="zip" method="post" action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Top 2 thrillers shot in Boston" name="inputsearch" id="inputsearch">
                    <button class="btn btn-outline-secondary" type="submit" name="thrillers" id="button-addon4">Search</button>
                </div>
            </form>
        </div>

        <!-- query 11 -->
        <div class="container">
            <b>Find all movies with more than x likes by users of age less than y:</b>
        </div>
        <div class="container">

        <form id="Query11Form" method="post" action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter Likes" name="minLikesID" id="minLikesID">
                <input type="text" class="form-control" placeholder="Enter Age" name="minAgeID" id="minAgeID">
                <button class="btn btn-outline-secondary" type="submit" name="Query11" id="button-addon2">Enter</button>
            </div>
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


                if(isset($_POST['button5']))
                {

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Motion Picture ID</th></tr></thead>";
                    
            

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
                    
    
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // SQL
                    $stmt = $conn->prepare("SELECT name, production, budget, rating, season_count, id FROM series INNER JOIN motion_picture on series.mpid=motion_picture.id");
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

                if(isset($_POST['button1']))
                {

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Production</th><th class='col-md-2'>Budget</th><th class='col-md-2'>Rating</th></tr></thead>";
                    
    

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // SQL
                    $stmt = $conn->prepare("SELECT name, production, budget, rating FROM Movie INNER JOIN motion_picture on Movie.mpid=motion_picture.id");
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



            if(isset($_POST['button0']))
                {

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th></thread>";
                    

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // SQL
                    $stmt = $conn->prepare("show tables");
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





                if(isset($_POST['submitted']))
                {
                    $ratingLimit = $_POST["inputRating"]; 

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Rating</th></tr></thead>";

                    

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

                // query 4

                if(isset($_POST['Location']))
                {
                    $shoot_location = $_POST["inputShootingLocation"]; 

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Motion Picture</th></tr></thead>";


                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        
                        $stmt = $conn->prepare("SELECT name FROM motion_picture, Location WHERE country = '$shoot_location'");
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
              

                // query 5
                if(isset($_POST['zipDir']))
                {
                    $shoot_location = $_POST["inputzip"]; 

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Director Name</th><th class='col-md-2'>Series</th></tr></thead>";


                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        
                        $stmt = $conn->prepare("SELECT DISTINCT p.name as Person_Name, m.name FROM (motion_picture m, series s, Location, People p , Role r) WHERE zip = $shoot_location and role_name = 'Director' ");
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

                // query 6
                if(isset($_POST['k_button']))
                {
                    $k= $_POST["k_wards"]; 

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Movie Name</th><th class='col-md-2'>Award Year</th><th class='col-md-2'>Count</th></tr></thead>";


                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        
                        $stmt = $conn->prepare(" SELECT People.name, motion_picture.name as movie_name, award_year, COUNT(*)
                        FROM People, motion_picture, Award
                        GROUP BY motion_picture.name, Award.award_year, People.name
                        HAVING count(*) > $k ");
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

                // query 7
                if (isset($_POST['Query7'])) {

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Age @ Award</th></tr></thead>";
        
                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                        // SQL
        
                        $stmt = $conn->prepare("SELECT People.name, (Award.award_year-YEAR(DOB)) 
                        FROM Award LEFT JOIN People ON People.id=Award.pid 
                        LEFT JOIN Role on Role.pid=Award.pid and Role.mpid=Award.mpid 
                        Where Role.role_name='Actor' 
                        and (Award.award_year-YEAR(DOB))=
                        (SELECT MAX(Award.award_year-YEAR(DOB)) 
                        FROM Award LEFT JOIN People ON People.id=Award.pid 
                        LEFT JOIN Role on Role.pid=Award.pid and Role.mpid=Award.mpid 
                        Where Role.role_name='Actor')
                        OR (Award.award_year-YEAR(DOB))=
                        (SELECT MIN(Award.award_year-YEAR(DOB)) FROM Award LEFT JOIN People ON People.id=Award.pid 
                        LEFT JOIN Role on Role.pid=Award.pid and Role.mpid=Award.mpid 
                        Where Role.role_name='Actor')");
                        $stmt->execute();
        
                        // set the resulting array to associative
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                            echo $v;
                        }
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                    echo "</table>";
                }
        
                #testing for Query 8
                if (isset($_POST['Query8'])) {
                    $boxOfficeID = $_POST["boxOfficeID"];
                    $budgetID = $_POST["budgetID"];
        
        
                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Producer Name</th><th class='col-md-2'>Movie Name</th><th class='col-md-2'>Budget</th><th class='col-md-2'>Box Office Coll.</th></tr></thead>";
        
        
                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                        // SQL
                        #$stmt = $conn->prepare("SELECT motion_picture.name, budget FROM (motion_picture inner join movie),(People inner join Role) where budget<=$budgetID and movie.boxoffice_collection>='$boxOfficeID' and movie.mpid=motion_picture.id and movie.mpid=Role.mpid and Role.pid=People.id and Role.role_name='Director'");
                        $stmt = $conn->prepare("SELECT People.name as pn, motion_picture.name, budget, boxoffice_collection 
                        FROM (motion_picture inner join movie) inner join (Role inner join People) 
                        where budget<=$budgetID and movie.boxoffice_collection>='$boxOfficeID' 
                        and movie.mpid=motion_picture.id and Role.role_name='Producer' and Role.mpid=movie.mpid and Role.pid=People.id ");
                    
                        $stmt->execute();
        
        
        
                        // set the resulting array to associative
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                            echo $v;
                        }
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                    echo "</table>";
                } else {
                    $userID = 0;
                }



                 // query 9
                 if(isset($_POST['k_rate_button']))
                 {
                     $k= $_POST["k_rate"]; 
 
                     echo "<table class='table table-md table-bordered'>";
                     echo "<thead class='thead-dark' style='text-align: center'>"; 
                     echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Movie Name</th><th class='col-md-2'>Role Count</th></thead>";
 
 
                     try {
                         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
                         
                         $stmt = $conn->prepare(" SELECT People.name AS name, motion_picture.name AS movie_name, COUNT(People.name ) as Role_Count
                         FROM motion_picture, People, Role AS r1, Role AS r2
                         WHERE motion_picture.id IN(
                         SELECT motion_picture.id
                         FROM motion_picture
                         WHERE motion_picture.rating > $k) and People.id = r1.pid and People.id = r2.pid and r1.role_name != r2.role_name 
                         group by movie_name, name");
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


                // query 10
                if(isset($_POST['thrillers']))
                {
                    $shoot_location = 'Boston';

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Movie Name</th><th class='col-md-2'>Ratings</th></tr></thead>";


                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        
                        $stmt = $conn->prepare(" SELECT DISTINCT motion_picture.name, motion_picture.rating
                        FROM motion_picture INNER JOIN Genre INNER JOIN Movie INNER JOIN Location L
                        WHERE motion_picture.id NOT IN(SELECT m.mpid
                        FROM Movie m INNER JOIN Location L
                        WHERE L.city != 'Boston') and Genre.genre_name = 'Thriller' and L.city = 'Boston'
                       ORDER BY motion_picture.rating DESC LIMIT 2");
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

                #testing for Query 11
                if (isset($_POST['Query11'])) {
                    $minLikesID = $_POST["minLikesID"];
                    $minAgeID = $_POST["minAgeID"];


                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Movie Name</th><th class='col-md-2'>Number of Likes</th></tr></thead>";


                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // SQL
                        #$stmt = $conn->prepare("SELECT mp.name, COUNT(*) FROM motion_picture mp join movie m join user join likes WHERE mp.id=m.mpid and user.age<$minAgeID and user.uemail=likes.uemail and likes.mpid=m.mpid GROUP BY likes.mpid HAVING COUNT(*)>$minLikesID");

                        $stmt = $conn->prepare("SELECT COUNT(*), mp.name 
                        FROM motion_picture mp join movie m join user join likes 
                        WHERE mp.id=m.mpid and likes.mpid=m.mpid and likes.uemail=user.uemail and user.age<$minAgeID 
                        GROUP BY mp.name 
                        HAVING count(*)>$minLikesID");

                        $stmt->execute();



                        // set the resulting array to associative
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                            echo $v;
                        }
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                    echo "</table>";
                } else {
                    $userID = 0;
                }

                #testing button for query 12
                if (isset($_POST['Query12'])) {

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Movie 1 Name</th><th class='col-md-2'>Movie 2 Name</th><th class='col-md-2'>Actor Name</th></tr></thead>";

                    
                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // SQL

                        $stmt = $conn->prepare("SELECT mp1.name as M1, mp2.name as M2, People.name 
                        from (People inner join Role as R1 cross join Role as R2) 
                        inner join motion_picture as mp1 cross join motion_picture as mp2 
                        where mp1.production='Marvel' and R1.role_name='Actor' and R1.pid=People.id 
                        and R1.mpid=mp1.id and mp2.production='Warner Bros' and R2.role_name='Actor' and R2.mpid=mp2.id and R2.pid=People.id");
                        $stmt->execute();

                        // set the resulting array to associative
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                            echo $v;
                        }
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                    echo "</table>";
                }

                #testing query 13
                if (isset($_POST['Query13'])) {

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Rating</th></tr></thead>";


                

                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // SQL

                        $stmt = $conn->prepare("SELECT name, rating 
                        from motion_picture 
                        where rating>
                        (SELECT Max(rating) 
                        FROM motion_picture inner join Genre 
                        where Genre.mpid=motion_picture.id and Genre.genre_name='Comedy') 
                        ORDER BY rating DESC");
                        $stmt->execute();

                        // set the resulting array to associative
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                            echo $v;
                        }
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    $conn = null;
                    echo "</table>";
                }


                // query 14
                if(isset($_POST['button6']))
                {

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Movie Name</th><th class='col-md-2'>People Count</th><th class='col-md-2'>Role Count</th><th class='col-md-2'Awards</th></tr></thead>";


                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        
                        $stmt = $conn->prepare("SELECT motion_picture.name, COUNT(DISTINCT Role.role_name) AS num_roles, COUNT(Role.pid) AS num_people
                        FROM Role, motion_picture
                        WHERE Role.mpid = motion_picture.id
                        GROUP BY Role.mpid
                        ORDER BY COUNT(DISTINCT Role.pid) DESC
                        LIMIT 5");
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
               


            ?>
        </div>
    </body>
</html>
