if(isset($_POST['button2']))
                {

                    echo "<table class='table table-md table-bordered'>";
                    echo "<thead class='thead-dark' style='text-align: center'>";
                    echo "<tr><th class='col-md-2'>Name</th><th class='col-md-2'>Production</th><th class='col-md-2'>Budget</th><th class='col-md-2'>Rating</th><th class='col-md-2'># of Seasons</th></tr></thead>";
                    
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
                    $stmt = $conn->prepare("SELECT name, production, budget, rating, season_count FROM series INNER JOIN motion_picture on series.mpid=motion_picture.id");
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
