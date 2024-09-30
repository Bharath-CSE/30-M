<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>StudentList</title>
    <style>
        *
        {
            margin: 0px;
            padding: 0px;
        }
        body
        {
            margin: 20px;
            padding: 20px;
        }
        .filter
        {
            display: flex;
            width: 700px;
            margin: 0px auto;
        }
        .filters
        {
            margin-right: 50px;
        }
    </style>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>
</head>
<body>
    <a href='index.php?mod=student&view=logout'><button class='btn btn-danger'>Logout</button></a>
    <h1>Welcome <?php echo $_SESSION["Name"] ?></h1><br>
    <h3>Filters</h3><br>
    <div class='filter'>
        <div class='filters'>
            <form method="post" action="index.php?mod=student&view=studentList">
                <div class='form-group'>
                            <label><b>
                                    Email :
                                </b>
                            </label><br>
                            <input type='email' name='email_filter' required>
                </div><br>
                <input type='submit' class='btn btn-primary' name='submit'><br>
            </form>
        </div>
        <div class='filters'>
            <form method="post" action="index.php?mod=student&view=studentList">
                <div class='form-group'>
                            <label><b>
                                    Department :
                                </b>
                            </label><br>
                            <input type='text' name='dept_filter' required>
                </div><br>
                <input type='submit' class='btn btn-primary' name='submit'><br>
            </form>
        </div>
        <div class='filters'>
            <form method="post" action="index.php?mod=student&view=studentList">
                <div class='form-group'>
                            <label><b>
                                    Blood Group :
                                </b>
                            </label><br>
                            <input type='text' name='blood_group_filter' required>
                </div><br>
                <input type='submit' class='btn btn-primary' name='submit'><br>
            </form>
        </div>
    </div><br>
    <table cellspacing='0' cellpadding='20' border='1' width='800' class='table table-bordered table-hover table-secondary'>
        <tr class='table-dark'>
            <td><b>Name</b></td>
            <td><b>Department</b></td>
            <td><b>Number</b></td>
            <td><b>Blood Group</b></td>
            <td><b>Passedout Year</b></td>
            <td><b>Location</b></td>
            <td><b>Actions</b></td>
        </tr>
        <?php
        foreach ($rows as $row) 
        {
            echo "<tr>
                        <td>{$row['first_name']} {$row['last_name']}</td>
                        <td>{$row['department']}</td>
                        <td>{$row['number']}</td>
                        <td>{$row['blood_group']}</td>
                        <td>{$row['passedout_year']}</td>
                        <td>{$row['location']}</td>
                        <td><a href=index.php?mod=student&view=getStudentDetails&id={$row['student_id']}><button class='btn btn-secondary'>Update</button></a> 
                        <a href=index.php?mod=student&view=deleteStudent&id={$row['student_id']}><button class='btn btn-danger'>Delete</button></a>
                        <a href=index.php?mod=student&view=viewStudent&id={$row['student_id']}><button class='btn btn-success'>View</button></a>
                        </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>