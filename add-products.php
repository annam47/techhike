<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot.php' ?>
    <style>
    ::-webkit-scrollbar {
        width: 0;
    }
    </style>
</head>

<body style="overflow: hidden;">
    <div class="row">
        <?php include './admin-sidebar.php' ?>
        <div class="col-xl-10 col-lg-9 col-md-8">
            <form action="./add-product-data.php" method="POST" enctype="multipart/form-data" class="container p-5"
                style="height: 100vh;overflow-y:scroll">
                <h2>Product Details</h2>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input name="name" type="text" placeholder="e.g. Smart Watch" class="form-control">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Product Color</label>
                            <input name="color" type="color" placeholder="e.g. Smart Watch"
                                class="form-control w-100 form-control-color">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="10" placeholder="smart watches with..."
                        id=""></textarea>
                </div>
                <h2>Pricing Details</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Product Price</label>
                            <input name="price" type="number" placeholder="e.g. 550" class="form-control">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Product Discounted Price</label>
                            <input name="discount" type="number" placeholder="e.g. 490" class="form-control w-100 ">
                        </div>
                    </div>
                </div>

                <label for="product_image"
                    class="w-100 form-control d-flex justify-content-center align-items-center bg-body-secondary  my-3"
                    style="height: 200px;">
                    <input type="file" name="image" class="d-none" id="product_image">
                    <i class="bi fs-1 bi-images"></i>
                </label>
                <button class="btn btn-dark w-100 my-2">
                    Add Product
                </button>
            </form>
        </div>
    </div>
</body>

</html>