<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị danh mục</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Slug</th>
        </thead>
        <tbody>
           <?php foreach($detail as $cate):?>
                <tr>
                    <td><?= $cate['id']?></td>
                    <td><?= $cate['cate_name']?></td>
                    <td><?= $cate['slug']?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    
</body>
</html>