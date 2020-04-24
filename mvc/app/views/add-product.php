<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị màn hình thêm sản phẩm</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
        <table width="25%" border="0">
        <!-- Tên nhân viên -->
            <tr>
                <td>Tên Sản Phẩm</td>
                <td><input type="text" name="ten"></td>
            </tr>

        
<!-- Ảnh nhân viên -->
            <tr>
                <td>Ảnh Sản Phẩm</td>
                <td>
                    <input type="hidden" name="size" value="10000000">
                    <input type="file" name="image">
                </td>
            </tr>
        <!--/Ảnh nhân viên -->



            <tr>
				<td></td>
				<td><button type="submit" name="Submit" value="Add">submit</button></td>
			</tr>
        </form>
</body>
</html>