<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NVSP Registration</title>
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="main.js"></script>
    <?php
        
        $name_regex = '/[A-Za-z]+/';
        $email_regex = '/[\w]+ [@] [\w]+ [.] [\w]/';
        $epic_regex = '/[A-Za-z]{3}[\d]/';
        if(isset($_POST["fname"]) and isset($_POST["lname"]) and isset($_POST["district"]) and isset($_POST["epic"]))
        {
            echo("sdf");
            if(!(preg_match($name_regex, $_POST['fname'])))
            {
                echo("<script>alert('IHOllegal First Name')</script>");
            }
            elseif(!(preg_match($name_regex, $_POST['lname'])))
            {
                echo("<script>alert('Illegal Last Name')</script>");
            }
            elseif(!(preg_match($name_regex, $_POST['district'])))
            {
                echo("<script>alert('Illegal District Name')</script>");
            }
            elseif(!(preg_match($email_regex, $_POST['email'])))
            {
                echo("<script>alert('Illegal Email Format')</script>");
            }
            elseif(!(preg_match($epic_regex, $_POST['epic'])))
            {
                echo("<script>alert('Illegal EPIC Number')</script>");
            }
            else
            {
                echo("<script>alert('Your Information IS Submitted')</script>");
            }
        }
    ?>
</head>
<body onload="refill()">
    <div class="main">
        <h1>Voter's Registration Portal</h1>
        <form id="form" action="index.php" method="POST" name="form">
            <label> First Name<span class="aster">* </span>: </label>
            <input type="text" id="fname" name="fname"> <br><br>

            <label> Last Name<span class="aster">* </span>: </label>
            <input type="text" id="lname" name="lname"> <br><br>

            <label> Age<span class="aster">* </span>: </label>
            <input type="number" id="age" name="age"> <br><br>

            <label> Mobile Number<span class="aster">* </span>: </label>
            <input type="number" id="phone" name="phone"> <br><br>

            <label> Pincode<span class="aster">* </span>: </label>
            <input type="number" name="pin" id="pin"> <br><br>

            <label> District<span class="aster">* </span>: </label>
            <input type="text" name="district"> <br><br>

            <label> State<span class="aster">* </span>: </label>
            <select name="state" id="state">
                <option value="default" disabled>Select State Here</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
            </select> <br><br>

            <label>Email : </label>
            <input type="text" id="email" name="email"> <br><br>

            <label title="Your Electoral Photo Identity Number">EPIC Number<span class="aster">* </span>:</label>
            <input type="text" id="epic" name="epic"> <br><br>

            <button type="button" onclick='verify()'>Submit Here</button>
        </form>
        </div>
</body>
<footer>Created By: Harshit Joshi</footer>
</html>