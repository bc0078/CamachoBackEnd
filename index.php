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
        <!-- Site header -->
        <ul class="a">
            <li>
                <!-- EQ Logo -->
                <div class="logo" style="background-color: #362162;">
                    <img src="Exiled.png" alt="Exiled" style="width:80px;height:80px;">
                </div>
            </li>
            
            <li>
                <a class="active">Home</a>
            </li>
            
            <li>
                <a href="mailing_list.php">Mailing List</a>
            </li>
        </ul>
        
        <div class="row">
            <!-- Blank column -->
            <div class="column side" style="background-color:#363636;"></div>
            
            <!-- Main body  -->
            <div class="column middle" style="background-color:#222;color: lightgoldenrodyellow;">
               
                <h1 style="text-align: left; margin-left: 20px;">
                    About Exiled
                </h1>
                <p style="text-align: left;">
                    Exiled is Sullivan County's largest competitive gaming event. Held in SUNY Sullivan's
                    Kaplan Student Union, 
                    
                </p>
                <h2 style="text-align: left; margin-left: 20px;">
                    Our Lineup
                </h2>
                <p style="text-align: left;">
                    Exiled will be hosting brackets for multiple games. These include:<br>
                </p>
                <ul class="b" style="margin-left: 5px;">
                    <li>Super Smash Bros. for Wii U</li>
                    <li>Dragon Ball FighterZ</li>
                    <li>The King of Fighters XIV</li>
                    <li>Pyre</li>

                </ul>


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
