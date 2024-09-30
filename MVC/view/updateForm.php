<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Student Form</title>
    <style>
        .studentDetails img 
        {
            margin-bottom:15px;
            height:130px;
            width:130px;
            border-radius:50%;
        }
    </style>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
</head>
<body style='font-family: arial;'>
<?php
    foreach($rows as $data)
    {
        $id=$data['student_id'];
        $fname=$data['first_name'];
        $lname=$data['last_name'];
        $dob=$data['dob'];
        $email=$data['email'];
        $number=$data['number'];
        $image=$data['image'];
        $department=$data['department'];
        $age=$data['age'];
        $blood_group=$data['blood_group'];
        $gender=$data['gender'];
        $passedout_year=$data['passedout_year'];
        $location=$data['location'];
    }
?>
    <a href='index.php?mod=student&view=logout'><button class='btn btn-danger'>Logout</button></a>
    <div class='form-control container'>
        <form method='post' action='index.php?mod=student&view=updateForm&id=<?php echo $id?>' style='width:500px; margin: 0px auto;' enctype='multipart/form-data'>
            <div class='form-group'>
                <label><b>
                        Firstname :
                    </b>
                </label><br>
                <input type='text' name='firstname' value=<?php echo $fname; ?> required>
            </div>
            <div class='form-group'>
                <label><b>
                        Lastname :
                    </b>
                </label><br>
                <input type='text' name='lastname' value=<?php echo $lname; ?> required>
            </div>
            <div class='form-group'>
                <label><b>
                        Dob :
                    </b>
                </label><br>
                <input type='date' name='dob' value=<?php echo $dob; ?> required>
            </div>
            <div class='form-group'>
                <label><b>
                        Email :
                    </b>
                </label><br>
                <input type='email' name='email' value=<?php echo $email; ?> required>
            </div>
            <div class='form-group'>
                <label><b>
                        Number :
                    </b>
                </label><br>
                <input type='text' name='number' value=<?php echo $number; ?> required>
            </div>
            <div class='form-group studentDetails'>
                <label><b>
                        Image :
                    </b>
                </label><br>
                <img src=<?php echo $image; ?>><br>
                <input type='file' name='image' required>
            </div>
            <div class='form-group'>
                <label><b>
                        Department :
                    </b>
                </label><br>
                <input type='text' name='department' value=<?php echo $department; ?> required>
            </div>
            <div class='form-group'>
                <label><b>
                        Age :
                    </b>
                </label><br>
                <input type='number' name='age' value=<?php echo $age; ?> required>
            </div>
            <div class='form-group'>
                <label><b>
                        Blood Group :
                    </b>
                </label><br>
                <input type='text' name='blood_group' value=<?php echo $blood_group; ?> required>
            </div>
            <div class='form-group'>
                <label><b>
                        Gender :
                    </b>
                </label><br>
                <select name='gender' required>
                    <option value='' <?php if($gender=='') echo 'selected'; ?>>Select</option>
                    <option value='Male' <?php if($gender=='Male') echo 'selected'; ?>>Male</option>
                    <option value='Female' <?php if($gender=='Female') echo 'selected'; ?>>Female</option>
                    <option value='Other' <?php if($gender=='Other') echo 'selected'; ?>>Other</option>
                </select>
            </div>
            <div class='form-group'>
                <label><b>
                        Passedout Year :
                    </b>
                </label><br>
                <input type='number' name='passedout_year' value=<?php echo $passedout_year; ?> required>
            </div>
            <div class='form-group'>
                <label><b>
                        Location :
                    </b>
                </label><br>
                <input type='text' name='location' value=<?php echo $location; ?> required>
            </div><br>
            <input type='submit' class='btn btn-primary' name='submit'><br>
        </form>
    </div>
</body>
</html>