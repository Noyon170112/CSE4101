<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Part A</title>


</head>

<body>
    <div class="header">
        <h2>Student Information</h2>
    </div>
    <div class="container">


        <form method="post" action="">
            <div class="input-group">
                <label>First Name</label>
                <input type="text" name="FirstName">
            </div>
            <br>
            <div class="input-group">
                <label>Last Name</label>
                <input type="text" name="LastName">
            </div>
            <br>
            <div class="input-group">
                <label>Department</label>
                <select name="Department">
                    <option value="CSE">CSE</option>
                    <option value="EEE">EEE</option>
                    <option value="EEE">IPE</option>
                    <option value="PME">PME</option>
                    <option value="BME">BME</option>
                    <option value="TE">TE</option>
                    <option value="ChE">ChE</option>
                </select>
            </div>
            <br>
            <div class="input-group">
                <label>Roll</label>
                <input type="number" name="Roll">
            </div>
            <br>
            <div class="input-group">
                <label>Gender</label>
                <select name="Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <br>
            <div class="input-group">
                <label>Email</label>
                <input type="text" name="Email">
            </div>
            <br>
            <div class="input-group">
                <label>Mobile Number</label>
                <input type="number" name="MobileNumber">
            </div>
            <br>
            <div class="input-group">
                <label>Favorite Icecream Flavor</label>
                <select name="FavoriteIcecreamFlavor">
                    <option value="Strawberry">Strawberry</option>
                    <option value="Mango">Mango</option>
                    <option value="Vanilla">Vanilla</option>
                    <option value="Mixed Fruit">Mixed Fruit</option>
                </select>
            </div>
            <br>
            <div class="input-group">
                <label>Address</label>
                <input type="text" name="Address">
            </div>
            <br>
            <div class="input-group">
                <label>Home District</label>
                <select name="district">
                    <option value="Dhaka">Dhaka</option>
                    <option value="Jashore">Jashore</option>
                    <option value="Barguna">Barguna</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Bhola">Bhola</option>
                    <option value="Bogra">Bogra</option>
                    <option value="Brahmanbaria">Brahmanbaria</option>
                    <option value="Chandpur">Chandpur</option>
                    <option value="Chittagong">Chittagong</option>
                  
                </select>
            </div>
            <br>
            <br><br>
            <div class="input-group">
                <button type="submit" class="btn" name="submit">Add Details</button>
            </div>

        </form>
    </div>
    <br>
    <a href="../PartB/serverpage.php" target="_blank" rel="noopener noreferrer">Server Page</a>

    <?php
    include('config.php')
    ?>





</body>

</html>