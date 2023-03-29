<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="row mb-3 mt-3">
            <div class="col-6">
                <h2 class="float-start">Products edit</h2>
            </div>
            <div class="col-6">
                <a href="<?= ROOT . '/home' ?>" class="btn btn-success">Back</a>
            </div>
        </div>

        <form action="<?= ROOT . '/home/update' ?>" method="post">
            <input type="hidden" name="id" value="<?= $product['id'] ?>">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="inputEmail3" value="<?= $product['title'] ?>" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Write Description" required><?= $product['description'] ?></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                        <input name="is_checked" value="<?= $product['is_checked'] ?>" class="form-check-input" type="checkbox" id="gridCheck1" <?php if ($product['is_checked'] == 1) { echo "checked" ?> <?php } '' ?>>
                        <label class="form-check-label" for="gridCheck1">
                            Item Checked?
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>