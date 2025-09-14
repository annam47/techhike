<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 p5  col-lg-5 mx-auto shadow w-25">
        <div class="card border-0 py-5 ">
        <h2 class="text-center text-dark">Tech Hunk</h2>
        <h6 class="text-center text-dark" >Empowering people</h6>

        <form  class='' action="./add-data.php" method="POST">
            <div class="form-group">
                <label for="" class="form-label text-dark">User name</label>
                <input type="text" placeholder="Enter your name......" name="student_name"  class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="form-label text-dark">Email</label></label>
                <input type="email" placeholder="Enter your email adress......" name="father_name"  class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="form-label text-dark">Password</label>
                <input type="password" placeholder="Enter your passward......" name="student_class"  class="form-control">
            </div>
           
                <h6>
                <button class="btn btn-primary w-100 my-2">Continue</button>
                <button class="btn btn text-blue">Privacy Policy
                    <button class="btn btn text-blue">Terms of service</button>
                </button>
            </h6>
            </div>
        </form>
    </div>
</div>
</body>
</html>