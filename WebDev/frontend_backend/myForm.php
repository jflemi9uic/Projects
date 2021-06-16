<!DOCTYPE html>
<html>
    <head>
        <h1>Welcome to the diamond maker</h1>

    </head>

    <body>
        <form name="diamond-options" action="process.php" method="post" autocomplete="off">
            <fieldset><legend>Input</legend>
            <!-- Cut -->
            <p>Cut:</p>
            <select name="cut">
                <option value="" disabled selected hidden>Please Choose...</option>
                <option>Premium</option>
                <option>Ideal</option>
                <option>Very Good</option>
                <option>Good</option>
                <option>Fair</option>
            </select>
            <br>

            <!-- Clarity -->

            <!-- Color -->
            <p>Color:</p>
            <select name="color">
                <option value="" disabled selected hidden>Please Choose...</option>
                <option>G</option>
                <option>E</option>
                <option>F</option>
                <option>H</option>
                <option>D</option>
            </select>

            <!-- Carat -->

            <p><input type="submit" name="submit" value="Submit" /></p>
        
        </form> 
    </body>
</html>





<!--<!DOCTYPE html>
<html>
    <body>
        <form name="options" action="process.php" method="post" autocomplete="off">
            <fieldset><legend>Input</legend>
            <p>Cut: <input type="text" name="first" /></p>
            <p>Last name: <input type="text" name="last" /></p>
            <p>Password: <input type="text" name="pw" /></p>
            <p>Status:
                <input type="radio" name="status" value="enrolled" checked>Enrolled
                <input type="radio" name="status" value="notEnrolled">Not Enrolled</p>
            <p><input type="checkbox" name="waitlist" value="true"
                checked="checked">Add me to the waitlist</p>
            <p><input type="submit" name="submit" value="Sign In" /></p>
        </form>
    </body>
</html>
-->





