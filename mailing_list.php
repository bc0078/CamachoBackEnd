<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="exiled" conent="width=device-width, initial-scale=1">
        <title>Exiled Gaming</title>
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            
            ul.a {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333333
            }
            
            ul.b {
                list-style-type: disc;
            }
            
            ul.a li {
                float:left;
            }
            
            ul.a li a {
                display: inline-block;
                color: white;
                text-align: center;
                padding: 21px 16px;
                text-decoration: none;
                font-size: 2em;
            }
            
            ul.a li a:hover{
                background-color: #111111;
            }
            
            .active {
                background-color: #ffcc00;
            }

            /* Style the header */
            .logo {
                background-color: #f1f1f1;
                padding: 0;
                text-align: left;
                font-size: 35px;
                height:80px
            }

            /* Create three unequal columns that floats next to each other */
            .column {
                float: left;
                height: 600px;
            }

            /* Left and right column */
            .column.side {
                width: 10%;
                padding: 10px;
            }

            /* Middle column */
            .column.middle {
                width: 80%;
                padding: 10px;
                
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Style the footer */
            .footer {
                color: lightgray;
                background-color: #333333;
                padding: 10px;
                text-align: center;
            }

            /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
            @media (max-width: 600px) {
                .column.side{
                    width: 0%;
                    padding: 0px;
                }
                .column.middle {
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <!-- Site header -->
        <ul class="a">
            <li>
                <!-- EQ Logo -->
                <div class="logo" style="background-color: #362162;">
                    <img src="Exiled.png" alt="Exiled" style="width:80px;height:80px;">
                </div>
            </li>
            
            <li>
                <a href="index.php">Home</a>
            </li>
            
            <li>
                <a class="active">Mailing List</a>
            </li>
        </ul>
        
        <div class="row">
            <!-- Blank column -->
            <div class="column side" style="background-color:#363636;"></div>
            
            <!-- Main body  -->
            <div class="column middle" style="background-color:#222;color: lightgoldenrodyellow;">
               
                <h1 style="text-align: left; margin-left: 20px;">
                    Sign Up For Our Mailing List
                </h1>
                <p>
                    Signing up for our mailing list will give you access to future updates on Exiled as more information is revealed.
                </p>
                <!--Input Form-->
                <form action="action" style="font-size: 16px; line-height: 28px;">
                    First Name:<br>
                    <input type="text" name="firstname"><br>
                    Last Name:<br>
                    <input type="text" name="lastname"><br>
                    Email Address:<br>
                    <input type="email" name="email"><br>
                    <input type="submit" value="Submit"> <input type="reset" value="Reset">
                </form>
                
            </div>
            
            <!-- Blank column -->
            <div class="column side" style="background-color:#363636;"></div>
        </div>
        
        <!-- Footer with credits -->
        <div class="footer">
            <p>Site designed by Blaise Camacho.</p>
        </div>
    </body>
</html>
