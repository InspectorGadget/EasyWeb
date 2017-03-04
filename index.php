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
        <title> API Key </title>
        
        <style>
            
            body {
                background-color: white;
                padding: 40px;
                margin: 30px auto;
                text-align: center;
                box-shadow: 0 0 45px black;
            }
            
            
        </style>
        
    </head>
    
    <body>
        <?php
            function onRand() {
                
                $rand = mt_rand(1000, 50000);
                echo $rand;
                
            }
            
        ?>
        
        <script>
            
            function onPrompt() {
                
                return window.alert(<?php onRand(); ?>);
                
            }
        
        </script>
        
        <button type="button" onclick="onPrompt()"> Click me </button> <br>
        
        <form action="thanks\index.php" method="POST">
            Name: <input name="name" type="name" </input> <br>
            Email: <input name="email" type="name" </input> <br>
            <input type="submit" </input>
        </form>
        
    </body>
    
</html>
