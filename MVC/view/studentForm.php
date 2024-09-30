<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Student Form</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
</head>
<body style='font-family: arial;'>
    <a href='index.php?mod=student&view=logout'><button class='btn btn-danger'>Logout</button></a>
    <div class='form-control container'>
        <form method='post' action='index.php?mod=student&view=studentForm' style='width:500px; margin: 0px auto;' enctype='multipart/form-data'>
            <div class='form-group'>
                <label><b>
                        Firstname :
                    </b>
                </label><br>
                <input type='text' name='firstname' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Lastname :
                    </b>
                </label><br>
                <input type='text' name='lastname' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Dob :
                    </b>
                </label><br>
                <input type='date' name='dob' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Email :
                    </b>
                </label><br>
                <input type='email' name='email' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Number :
                    </b>
                </label><br>
                <input type='text' name='number' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Image :
                    </b>
                </label><br>
                <input type='file' name='image' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Department :
                    </b>
                </label><br>
                <input type='text' name='department' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Age :
                    </b>
                </label><br>
                <input type='number' name='age' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Blood Group :
                    </b>
                </label><br>
                <input type='text' name='blood_group' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Gender :
                    </b>
                </label><br>
                <select name='gender' required>
                    <option value='' selected>Select</option>
                    <option value='Male'>Male</option>
                    <option value='Female'>Female</option>
                    <option value='Other'>Other</option>
                </select>
            </div>
            <div class='form-group'>
                <label><b>
                        Passedout Year :
                    </b>
                </label><br>
                <input type='number' name='passedout_year' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Location :
                    </b>
                </label><br>
                <input type='text' name='location' required>
            </div><br>
            <input type='submit' class='btn btn-primary' name='submit'><br>
        </form>
    </div>
</body>
</html>