<!DOCTYPE html>
<!--
Copyright (C) 2017 RTG

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Thanks || PHP </title>
        <style>
            
            body, footer {
                background-color: white;
                text-align: center;
                box-shadow: 0 0 45px black;
                padding: 40px;
                margin: 50px auto;
                max-width: 700px;
            }
            
            p.italic {
                font-style: italic;
            }
            
        </style>
    </head>
    <body>
        
        <script>
        
        window.alert("Connected to MySQL DataBase!");
        
        </script>
        
        <h3>
            
            <?php
            
                $name = $_POST['name'];
                
                if(!empty($name)) {
                    echo "Hi $name!";
                    echo "<br>";
                }

            ?>
            
        </h3>
        
        <h1>
            
            <?php
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    
                if(empty($_POST['name'])) {
                    echo "Generation Failed!";
                }
                else {
                    echo "API has been generated!";
                }
                
            ?>
            
        </h1>
        
        <?php
             
            $name = $_POST['name'];
            $email = $_POST['email'];
                
                if(!empty($_POST['name'])) {
                    $rand = mt_rand(1, 999999);
                    echo "Your API Key: $rand";
                }
                
        ?>
        
        
        <strong>
            <p class="italic">
            <?php
            
                if(!empty($_POST['name'])) {
                    echo "Please keep this API Key somewhere save, You can screenshot too!";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "<br>";
                    echo "API requested in:";
                    echo "<br>";
                    echo $_SERVER['REQUEST_TIME'] . " seconds!";
                }
            
            ?>
            </p>
        </strong>
    </body>
    
    <footer>
        
        <strong>
            
            <p>
                
                <?php
                
                echo "<br>";
                echo "<br>";
                echo "Your Web Client";
                echo "<br>";
                echo "<br>";
                echo $_SERVER['HTTP_USER_AGENT'];
                echo "<br>";
                echo "<br>";
                echo "<br>";
                
                ?>
                
                &copy All rights reserved RTGDaCoder!
                
            </p>
            
        </strong>
        
    </footer>
</html>
