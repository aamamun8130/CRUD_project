<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="registration.css">

    <style>

    </style>
</head>


    <div class="login-container">
        <div class="login-inner">
            <h1 class="lab1">Sign Up</h1>
            

            <form name="myForm" method="post" action="dbuserinsert.php">
                <div class="con">

                    <table>
                        <tr>
                            <td><label>Your Full Name</label></td>
                            <td> <input id="uunn" name="fname" type="text" placeholder="" required="true" onblur="unValidation()" /></td>
                            <td>
                                <span Id="un"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Email</label></td>
                            <td><input type="email" placeholder="" name="email" required="true" onblur="emailValidation()" /></td>
                            <td>
                                <span Id="em"></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Password</label></td>
                            <td><input type="password" placeholder="" name="pass" required="true" /></td>
                            <td>
                                <span Id="pw"></span>
                            </td>
                        </tr>

                        <tr>
                            <td><label>Re-type Password</label></td>
                            <td><input type="password" placeholder="" name="repass" required="true" onblur="passValidation()" /></td>
                            <td>
                                <span Id=""></span>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Age</label></td>
                            <td><input type="number" placeholder="" name="age" required="true" onblur="ageValidation()" /></td>
                            <td>
                                <span Id="ag"></span>
                            </td>
                        </tr>

                        <tr>
                        </tr>

                    </table>

                    <br /><label>Gender</label>

                    <input type="radio" name="gender" value="Male" required>Male
                    <input type="radio" name="gender" value="Female" required>Female
                    <input type="radio" name="gender" value="Any Other" required>Any Other





                    <br /><label>Religion</label>
                    <select required name="religion">
                        <option value="">-select-</option>
                        <option value="Islam">Islam</option>
                        <option value="Hinduism">Hinduism</option>
                        <option value="Buddism">Buddism</option>

                    </select>

                    <br /><input type="checkbox" name="term" value="Yes" required>Terms And Condition!!!<span id="cond"></span>




                    <br />
                    <button type="submit" class="but" onclick="validateForm()">Submit</button>
                    <br/>
                    
                </div>
            </form>
            <label>Do You Want To <a href="http://localhost/MyProject/loginform.html">Sign In?</a></label>
        </div>

    </div>

    <script src="registration.js"></script>

</body>

</html>