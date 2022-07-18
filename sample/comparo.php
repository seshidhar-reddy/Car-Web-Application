<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style_camparo.css">
</head>
<body>
    <h1>Comparisions</h1>
    <div class="flexx">
        <input type="text" id="car1" placeholder="Car1" >
        <h3>VS</h3>
        <input type="text" id="car2" placeholder="Car2">
        <button type="button" id="btn" class="btn" onclick="button_click()">Submit</button>
    </div>
    <br>
    <br>
    <div class="compare" style="display: none;">
        <table class="table" >
            <thead>
                <tr>
                    <th class="car_name1">Car Name1</th>
                    <th class="spec">SPECIFICATION</th>
                    <th class="car_name2">Car Name2</th>
                </tr>
            </thead>
            <tbody> 
                <tr>
                    <td><h3 id="spec11">Spec1</h3></td>
                    <td><h3 id="specname1">PRICE</h3></td>
                    <td><h3 id="spec21">Spec2</h3></td>
                </tr>
                <tr>
                    <td><h3 id="spec12">Spec1</h3></td>
                    <td><h3 id="specname2">ENGINE</h3></td>
                    <td><h3 id="spec22">Spec2</h3></td>
                </tr>
                <tr>
                    <td><h3 id="spec13">Spec1</h3></td>
                    <td><h3 id="specname3">POWER AND TORQUE</h3></td>
                    <td><h3 id="spec23">Spec2</h3></td>
                </tr>
                <tr>
                    <td><h3 id="spec14">Spec1</h3></td>
                    <td><h3 id="specname4">GEARBOX</h3></td>
                    <td><h3 id="spec24">Spec2</h3></td>
                </tr>
                <tr>
                    <td><h3 id="spec15">Spec1</h3></td>
                    <td><h3 id="specname5">FUEL ECONOMY</h3></td>
                    <td><h3 id="spec25">Spec2</h3></td>
                </tr>
                <tr>
                    <td><h3 id="spec16">Spec1</h3></td>
                    <td><h3 id="specname6">WHEELBASE</h3></td>
                    <td><h3 id="spec26">Spec2</h3></td>
                </tr>
                <tr>
                    <td><h3 id="spec17">Spec1</h3></td>
                    <td><h3 id="specname7">INFOTAINMENT</h3></td>
                    <td><h3 id="spec27">Spec2</h3></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="java_camparo.js"></script>
</body>
</html>