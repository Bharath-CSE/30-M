<?php
    class StudentController
    {
        public $Obj;
        function __construct()
        {
            session_start();
            if(file_exists("./model/studentModel.php"))
            {
                include_once "./model/studentModel.php";
            }
            $this->Obj=new StudentModel();
        }

        //This function is for call the model and view
        function studentList()
        {   
            if(isset($_SESSION["Name"]))
            {
                $filter=(isset($_POST['filter'])) ? $_POST['filter'] : null;
                $rows=$this->Obj->studentList($filter);
                if(file_exists("./view/studentList.php"))
                {   
                    include_once "./view/studentList.php";
                }
            }
            else
            {
                $this->redirect_login();
            }
        }

        //This function is for studentData Form
        function studentForm()
        {
            if(isset($_SESSION["Name"]))
            {
                if(isset($_POST['submit']))
                {
                    $arr=array();
                    $arr['firstname']=$_POST['firstname'];
                    $arr['lastname']=$_POST['lastname'];
                    $arr['dob']=$_POST['dob'];
                    $arr['email']=$_POST['email'];
                    $arr['number']=$_POST['number'];
                    $imagePath=$this->file_upload();
                    $arr['image']=$imagePath;
                    $arr['department']=$_POST['department'];
                    $arr['age']=$_POST['age'];
                    $arr['blood_group']=$_POST['blood_group'];
                    $arr['gender']=$_POST['gender'];
                    $arr['passedout_year']=$_POST['passedout_year'];
                    $arr['location']=$_POST['location'];
                    $this->Obj->studentForm($arr);
                }
                if(file_exists("./view/studentForm.php"))
                {
                    include_once "./view/studentForm.php";
                }
            }
            else
            {
                $this->redirect_login();
            }
            
        }

        function getStudentDetails()
        {
            if(isset($_SESSION["Name"]))
            {
                $id=$_GET['id'];
                $rows=$this->Obj->getStudentDetails($id);
                if(file_exists("./view/updateForm.php"))
                {
                    include_once "./view/updateForm.php";
                }
            }
            else
            {
                $this->redirect_login();
            }
        }

        //This function is for updateData Form
        function updateForm()
        {
            if(isset($_SESSION["Name"]))
            {
                $id=$_GET['id'];
                if(isset($_POST['submit']))
                {
                    $arr=array();
                    $arr['id']=$id;
                    $arr['firstname']=$_POST['firstname'];
                    $arr['lastname']=$_POST['lastname'];
                    $arr['dob']=$_POST['dob'];
                    $arr['email']=$_POST['email'];
                    $arr['number']=$_POST['number'];
                    $imagePath=$this->file_upload();
                    $arr['image']=$imagePath;
                    $arr['department']=$_POST['department'];
                    $arr['age']=$_POST['age'];
                    $arr['blood_group']=$_POST['blood_group'];
                    $arr['gender']=$_POST['gender'];
                    $arr['passedout_year']=$_POST['passedout_year'];
                    $arr['location']=$_POST['location'];
                    $rows=$this->Obj->updateForm($arr);
                    $this->studentList();
                }
            }
            else
            {
                $this->redirect_login();
            }
        }

        function deleteStudent()
        {
            if(isset($_SESSION["Name"]))
            {
                $id=$_GET['id'];
                $this->Obj->deleteStudent($id);
                $this->studentList();
            }
            else
            {
                $this->redirect_login();
            }
        }

        function viewStudent()
        {
            if(isset($_SESSION["Name"]))
            {
                $id=$_GET['id'];
                $data=$this->Obj->getStudentDetails($id);
                if(file_exists("./view/studentView.php"))
                {
                    include_once "./view/studentView.php";
                }
            }
            else
            {
                $this->redirect_login();
            }
        }

        function login()
        {
            if(isset($_POST['username']) && isset($_POST['password']))
            {
                $username=$_POST['username'];
                $givenpassword=$_POST['password'];
                $dbPassword=$this->Obj->login($username);
                $row=$dbPassword->fetch(PDO::FETCH_ASSOC);
                if($givenpassword==$row['password'])
                {
                    $_SESSION["Name"]=$username;
                    header("Location:index.php?mod=student&view=studentList");
                }
                else
                {
                    echo "Please Give Correct Username and Password";
                }
            } 
            else
            {
                $this->redirect_login();
            }
        }

        function redirect_login()
        {
            if(file_exists("view/login.php"))
            {
                include_once "view/login.php";
            }
        }

        function file_upload()
        {
            if(isset($_SESSION["Name"]))
            {
                $uploadDirectory = 'C:/xampp/htdocs/MVC/view/Images';
                if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) 
                {   
                    $tmpName = $_FILES["image"]["tmp_name"];
                    $name = $_FILES["image"]["name"];
                    move_uploaded_file($tmpName, "$uploadDirectory/$name");
                    $imagePath = "/MVC/view/Images"."/$name";
                }
                return $imagePath;
            }
        }

        function logout()
        {
            session_destroy();
            $this->redirect_login();
        }

        function __call($name, $arguments)
        {
            echo "Invalid URL";
        }
    }