<?php include("template/header.php"); ?>
    <form method="post">
        <input type="text" placeholder="Mã giảng viên" name="txtmagv" value="<?php echo $data['magv']; ?>"><br>
        <input type="text" placeholder="Họ và tên" name="txthovaten" value="<?php echo $data['hovaten']; ?>"><br>
        <input type="text" placeholder="Ngày sinh" name="txtngaysinh" value="<?php echo $data['ngaysinh']; ?>"><br>
        <input type="text" placeholder="Giói tính" name="txtgioitinh" value="<?php echo $data['gioitinh']; ?>"><br>
        <input type="text" placeholder="Trình độ" name="txttrinhdo" value="<?php echo $data['trinhdo']; ?>"><br>
        <input type="text" placeholder="Chuyên môn" name="txtchuyenmon" value="<?php echo $data['chuyenmon']; ?>"><br>
        <input type="text" placeholder="Học hàm" name="txthocham" value="<?php echo $data['hocham']; ?>"><br>
        <input type="text" placeholder="Học vị" name="txthocvi" value="<?php echo $data['hocvi']; ?>"><br>
        <input type="text" placeholder="Cơ quan" name="txtcoquan" value="<?php echo $data['coquan']; ?>"><br>
        <button type="submit">Lưu</button>
    </form>
<?php include("template/footer.php"); ?>