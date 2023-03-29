<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="row mb-3 mt-3">
            <div class="col-6">
                <h2 class="float-start">Shopping List</h2>
            </div>
            <div class="col-6">
                <a href="<?= ROOT . '/home/create' ?>" class="btn btn-success">Create</a>
            </div>
        </div>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Checked</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($products)) { ?>
                    <?php foreach ($products as $product) { ?>
                        <tr>
                            <th scope="row"><?= $product['id'] ?></th>
                            <td><?= $product['title'] ?></td>
                            <td><?= $product['description'] ?></td>
                            <td>
                                <?php if ($product['is_checked'] == 1) { ?>
                                    <span style="font-weight: bold;color: green;">checked</span>
                                <?php } else { ?>
                                    <span style="font-weight: bold;color: red;">Not checked</span>
                                <?php } ?>
                            </td>
                            <td>
                                <a href="<?= ROOT . '/home/edit?id=' . $product['id'] ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= ROOT . '/home/delete?id=' . $product['id'] ?>" onclick="return alert('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td class="text-center" colspan="5">No Data</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>