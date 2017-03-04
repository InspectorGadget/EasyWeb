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
            
            body {
                background-color: white;
                text-align: center;
                box-shadow: 0 0 45px black;
                padding: 40px;
                margin: 50px auto;
                max-width: 700px;
            }
            
        </style>
    </head>
    <body>
        
        <?php
            
                
            $get = $_POST['name'];
                
               if(empty($_POST['name'])) {
                    echo "Name is required!";
                }
                else {
                        $file = fopen("names.txt", "w") or die("Unable to create file! File exists....");
                        $gg = fgets($file, $get);
                        if($gg != false) {
                            echo "You cant use $get";
                        } else {
                            echo "Accepted!";
                        }
                        
                } 
                
        ?>
        
    </body>
</html>
