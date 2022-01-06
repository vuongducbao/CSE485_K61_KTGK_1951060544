<?php
    require_once 'model/model.php';
    class controller{
        function index(){
            $model = new model;
            $datas = $model->getAllUsers();
            require_once('view/index.php');
        }

        function details(){
            $model = new model;
            $id = $_GET['id'];
            $data = $model->getUser($id);
            if($data)
                header("location:index.php");
                else
                header("error.php");
        }

        function add(){
            require_once 'view/add.php';
            if(isset($_POST['txtmagv'])){
                $magv = $_POST['txtmagv'];
                $hovaten = $_POST['txthovaten'];
                $ngaysinh = $_POST['txtngaysinh'];
                $gioitinh = $_POST['txtgioitinh'];
                $trinhdo = $_POST['txttrinhdo'];
                $chuyenmon = $_POST['txtchuyenmon'];
                $hocham = $_POST['txthocham'];
                $hocvi = $_POST['txthocvi'];
                $coquan = $_POST['txtcoquan'];
                $model = new model;
                $result = $model->addUsers($magv, $hovaten, $ngaysinh, $gioitinh, $trinhdo, $chuyenmon, $hocham, $hocvi, $coquan);
                if($result)
                header("location:index.php");
                else
                header("error.php");
            }
        }

        function edit(){
            $model = new model;
            $id = $_GET['id'];
            $data = $model->getUser($id);
            require_once('view/edit.php');
            if(isset($_POST['txtmagv'])){
                $magv = $_POST['txtmagv'];
                $hovaten = $_POST['txthovaten'];
                $ngaysinh = $_POST['txtngaysinh'];
                $gioitinh = $_POST['txtgioitinh'];
                $trinhdo = $_POST['txttrinhdo'];
                $chuyenmon = $_POST['txtchuyenmon'];
                $hocham = $_POST['txthocham'];
                $hocvi = $_POST['txthocvi'];
                $coquan = $_POST['txtcoquan'];
                $model = new model;
                $result = $model->addUsers($magv, $hovaten, $ngaysinh, $gioitinh, $trinhdo, $chuyenmon, $hocham, $hocvi, $coquan);
                if($result)
                header("location:index.php");
                else
                header("error.php");
            }
        }

        function delete(){
            $model = new model;
            $id = $_GET['id'];
            $result = $model->deleteUser($id);
            if($result)
                header("location:index.php");
                else
                header("error.php");
        }
    }
?>