<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap stuff to make page look beautiful -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container">
        <h1 style="text-align:center"> CS460 PA2</h1><br>
        <h3 style="text-align:center"> Movie Madness </h3><br>
    </div>

    <div class="container">
        <form method="post">
            <input type="submit" name="Movie_list" value="Movie_list" />
        </form>
    </div>

    <div class="container">
        <form method="post">
            <input type="submit" name="Actors_list" value="Actors_list" />
        </form>
    </div>

    <div class="containter">
        <form id="nationality_form" method="post" action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter Nationality" name="inputNationality" id="inputNationality">
                <button class="btn btn-outline-secondary" type="submit" name="submitted" id="button-addon2">Query</button>
            </div>
        </form>
    </div>

    <div class="containter">
        <h5>Liked Movies<h5>
                <form id="nationality_form" method="post" action="">
                    <h6>E-mail: </h6><input type="text" class="form-control" placeholder="Enter Email" name="inputEmail" id="inputemail">
                    <br><br>
                    <h6>Movie ID</h6> <input type="text" class="form-control" placeholder="Enter MovieID" name="inputMovie" id="inputmovie">
                    <br><br>
                    <button class="btn btn-outline-secondary" type="submit" name="liked" id="button-addon2">Submit Likes</button>
                </form>
    </div>

    <div class="container">
        <!-- important php stuff starts now -->
        <?php

        //Global settings

        // SQL CONNECTIONS
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cs460_pa2"; //database name

        // We will use PDO to connect to MySQL DB. This part need not be 
        // replicated if we are having multiple queries. 
        // initialize connection and set attributes for errors/exceptions
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // generic table builder. It will automatically build table data rows irrespective of result
        class TableRows extends RecursiveIteratorIterator
        {
            function __construct($it)
            {
                parent::__construct($it, self::LEAVES_ONLY);
            }

            function current()
            {
                return "<td style='text-align:center'>" . parent::current() . "</td>";
            }

            function beginChildren()
            {
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


        // we want to check if the submit button has been clicked (in our case, it is named Query)
        if (isset($_POST['submitted'])) {
            // set nationality to whatever input we get
            // ideally, we should do more validation to check for varchar, etc. 
            // $nationality = $_POST["Actors_list"]; 


            // we will now create a table from PHP side 
            echo "<table class='table table-md table-bordered'>";
            echo "<thead class='thead-dark' style='text-align: center'>";

            // initialize table headers
            // YOU WILL NEED TO CHANGE THIS DEPENDING ON TABLE YOU QUERY OR THE COLUMNS YOU RETURN
            echo "<tr><th class='col-md-2'>Firstname</th><th class='col-md-2'>Gender</th></tr></thead>";


            try {
                // prepare statement for executions. This part needs to change for every query
                // query to 
                $stmt = $conn->prepare("SELECT 'name',gender FROM People");

                // execute statement
                $stmt->execute();

                // set the resulting array to associative. 
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                // for each row that we fetched, use the iterator to build a table row on front-end
                foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                    echo $v;
                }
            } catch (PDOException $e) {
                echo "Error: Can't fetch actors " . $e->getMessage();
            }
            echo "</table>";
            // destroy our connection
            $conn = null;
        } elseif (isset($_POST['Movie_list'])) {
            // set nationality to whatever input we get
            // ideally, we should do more validation to check for varchar, etc. 
            // $nationality = $_POST["Movie_list"]; 

            // we will now create a table from PHP side 
            echo "<table class='table table-md table-bordered'>";
            echo "<thead class='thead-dark' style='text-align: center'>";

            // initialize table headers
            // YOU WILL NEED TO CHANGE THIS DEPENDING ON TABLE YOU QUERY OR THE COLUMNS YOU RETURN
            echo "<tr><th class='col-md-2'>Movie Name</th><th class='col-md-2'>Production</th></tr></thead>";


            try {
                // prepare statement for executions. This part needs to change for every query
                // query to 
                $stmt = $conn->prepare("SELECT name,boxoffice_collection FROM Movie");

                // execute statement
                $stmt->execute();

                // set the resulting array to associative. 
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                // for each row that we fetched, use the iterator to build a table row on front-end
                foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                    echo $v;
                }
            } catch (PDOException $e) {
                echo "Error: Can't fetch movies " . $e->getMessage();
            }
            echo "</table>";
            // destroy our connection
            $conn = null;
        } elseif (isset($_POST['submitted'])) {
            // set nationality to whatever input we get
            // ideally, we should do more validation to check for varchar, etc. 
            $nationality = $_POST["submitted"];


            // we will now create a table from PHP side 
            echo "<table class='table table-md table-bordered'>";
            echo "<thead class='thead-dark' style='text-align: center'>";

            // initialize table headers
            // YOU WILL NEED TO CHANGE THIS DEPENDING ON TABLE YOU QUERY OR THE COLUMNS YOU RETURN
            echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Gender</th></tr></thead>";


            try {
                // prepare statement for executions. This part needs to change for every query
                // query to 
                $stmt = $conn->prepare("SELECT 'name',gender FROM People WHERE nationality = $nationality");

                // execute statement
                $stmt->execute();

                // set the resulting array to associative. 
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                // for each row that we fetched, use the iterator to build a table row on front-end
                foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                    echo $v;
                }
            } catch (PDOException $e) {
                echo "Error: Can't fetch nationalities " . $e->getMessage();
            }
            echo "</table>";
            // destroy our connection
            $conn = null;
        } elseif (isset($_POST['liked'])) {

            $movie_id = $_POST["inputMovie"];
            $user = $_POST['inputEmail'];

            // we will now create a table from PHP side 
            echo "<table class='table table-md table-bordered'>";
            echo "<thead class='thead-dark' style='text-align: center'>";
            echo "<tr><th class='col-md-2'>Movie</th><th class='col-md-2'>Production</th></tr></thead>";


            try {
                // prepare statement for executions. This part needs to change for every query
                // query to 
                $stmt = $conn->prepare("SELECT name,production FROM MotionPicture WHERE id = $movie_id");

                // execute statement
                $stmt->execute();

                // set the resulting array to associative. 
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                // for each row that we fetched, use the iterator to build a table row on front-end
                foreach (new LikeRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                    echo $v;
                }

                
            } catch (PDOException $e) {
                echo "Error: Can't fetch motion pictures " . $e->getMessage();
            }
            echo "</table>";
            // destroy our connection
            $conn = null;
        }
        ?>
    </div>
</body>

</html>