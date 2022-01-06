<?php include("template/header.php"); ?>
    <div>
        <a class="btn btn-primary" href="index.php?act=add">Thêm</a>
    </div>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã giảng viên</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Trình độ</th>
                    <th scope="col">Chuyên môn</th>
                    <th scope="col">Học hàm</th>
                    <th scope="col">Học vị</th>
                    <th scope="col">Cơ quan</th>         
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datas as $data){
                ?>
                    <tr>
                    <th scope="row"><a href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['magv']; ?></a></th>
                    <td><a href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['hovaten']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['ngaysinh']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['gioitinh']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['trinhdo']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['chuyenmon']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['hocham']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['hocvi']; ?></a></td>
                    <td><a href="index.php?act=details&id=<?php echo $data['magv']; ?>"><?php echo $data['coquan']; ?></a></td>
                    <td><a href="index.php?act=edit&id=<?php echo $data['magv']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="index.php?act=delete&id=<?php echo $data['magv']; ?>"><i class="bi bi-trash"></i></a></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
    </table>
<?php include("template/footer.php"); ?>