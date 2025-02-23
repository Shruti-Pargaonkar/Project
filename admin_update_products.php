<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4..7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com.ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>
<body>
    <div class="d-flex vh-100 justify-content-center align-items-center">

        <form enctype="multiport/form-data" method="POST" action="admin_update_pdt.php" class="w-25 text-center bg-secondary p-4" >
            <h1 class="text-white">Update Products</h1>

            <input name='pdt_id' readonly class="d-none" value="<?php echo $_GET['pdt_id'] ?>">

            <input name="name" placeholder="Product name" class="form-control mt-3 form-control ">
            <textarea name="details" placeholder="Product details" class="form-control mt-3" rows="5"></textarea>
            <input name="price" placeholder="Product price" class="form-control mt-3">
            <input name="imgname" type="file" class="form-control mt-3">

            <input type="submit" class="form-control btn btn-success mt-3">
        </form>

    </div>
</body>
</html>