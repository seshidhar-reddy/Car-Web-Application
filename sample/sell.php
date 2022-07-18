<?php
session_start();
include 'includes/dbh.inc.php';
$years = array(1980,1981,1982,1983,1984,1985,1986,1987,1988,1989,1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021);
$companies = array("Skoda","Volkwagen","Maruti","Hyundai","Honda","Tata","Mahindra","Toyota","Kia");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $_SESSION["username"];
    ?>
    <form action="includes/sample.inc.php" method = "post" enctype="multipart/form-data">
        <select name="select_year" id="select_year" >
            <option value="year">~~~ Select Year ~~~</option>
            <?php
            foreach ($years as $years1) {
                echo "<option value='" . $years1. "'>" . $years1 . "</option>";
            }
            ?>
        </select>
        <br>
        <br>
        <select name="select_company" id="select_company" onchange ="myopt(this.value)">
            <option value="company">~~~ Select Company ~~~</option>
            <?php
            foreach ($companies as $companies1) {
                echo "<option value='" . $companies1. "'>" . $companies1 . "</option>";
            }
            ?>
        </select>
        <br>
        <br>
        <select name="select_car" id="select_car" >
        <option value="company">~~~ Select Car ~~~</option>
        </select>
        <?php
            for($i = 1;$i<=16;$i++){
            echo "<br>";
            echo "<br>";
            echo "<input type='file' name='photo$i' id='photo$i' >";        
        }        
        ?>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <script>
        function myopt(data){
            const ajaxreq = new XMLHttpRequest();
            ajaxreq.open('GET','http://localhost/NEW_BEGINNING/includes/form1.inc.php?data='+data.toLowerCase(),'TRUE');
            ajaxreq.send();
            ajaxreq.onreadystatechange = function(){
                if(ajaxreq.readyState == 4 && ajaxreq.status == 200){
                    document.getElementById('select_car').innerHTML = ajaxreq.responseText;
                }
            };
        }
    </script>
</body>
</html>