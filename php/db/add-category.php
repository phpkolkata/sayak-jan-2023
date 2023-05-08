<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>
<body>

<div class='card mx-auto w-50 p-3 mt-3' >
<div>
    <h1 class='float-start'>Category > Add</h1>
    <a class='btn btn-primary float-end' href='category.php'> <i class="fa-solid fa-house text-light"></i> Home</a>
</div>
</div>

<div class='card mx-auto w-50 p-3 mt-3' >
    <form action="adding-category.php" method="post">
        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="cname" class="form-control" placeholder="enter category name">
        </div>

        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="is_active" value="y">
                <label class="form-check-label" >
                    YES
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="is_active" value="n">
                <label class="form-check-label" >
                    NO
                </label>
            </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-success float-end btn-lg"> <i class="fa-solid fa-floppy-disk text-light"></i> Add Category</button>
        </div>
    </form>
</div>

</body>
</html>
