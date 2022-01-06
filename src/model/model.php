<?php
    require_once 'config/db.php';
    class model{
        private $magv, $hovaten, $ngaysinh, $gioitinh, $trinhdo, $chuyenmon, $hocham, $hocvi, $coquan;

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }

        public function getAllUsers(){
            $conn = $this->connectDb();
            $sql = "SELECT * FROM GIANGVIEN";
            $result = mysqli_query($conn,$sql);
            $datas = [];
            if(mysqli_num_rows($result) > 0){
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            }
            $this->closeDb($conn);

            return $arr_users;
        }
        public function addUsers($magv, $hovaten, $ngaysinh, $gioitinh, $trinhdo, $chuyenmon, $hocham, $hocvi, $coquan){
            $conn = $this->connectDb();
            $sql = "INSERT INTO GIANGVIEN(magv, hovaten, ngaysinh, gioitinh, trinhdo, chuyenmon, hocham, hocvi, coquan) VALUES ('$magv', '$hovaten', '$ngaysinn', '$gioitinh', '$trinhdo', '$chuyenmon','$hocham', '$hocvi','$coquan')";
            $result = mysqli_query($conn,$sql);
            $this->closeDb($conn);
            return $result;
        }
        public function getUser($id){
            $conn = $this->connectDb();
            $sql = "SELECT * FROM GIANGVIEN WHERE magv = '$id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
                $user = mysqli_fetch_assoc($result);
            $this->closeDb($conn);
            return $user;
        }

        public function updateUser($magv, $hovaten, $ngaysinh, $gioitinh, $trinhdo, $chuyenmon, $hocham, $hocvi, $coquan){
            $conn = $this->connectDb();
            $sql = "UPDATE GIANGVIEN SET magv='$magv', hovaten='$hovaten', ngaysinh='$ngaysinh', gioitinh='$gioitinh', trinhdo='$trinhdo', chuyenmon='$chuyenmon', hocham='$hocham', hocvi='$hocvi', coquan='$coquan' WHERE bd_id = '$id'";
            $result = mysqli_query($conn,$sql);
            $this->closeDb($conn);
            return $result;
        }

        function deleteUser($id){
            $conn = $this->connectDb();

            $sql = "DELETE FROM GIANGVIEN WHERE magv = '$id'";
            $result = mysqli_query($conn,$sql);

            $this->closeDb($conn);
            return $result;
        }
    }
?>