<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
            <div class="card-header text-center"> </div>
            <div class="card-body">
                <form action="/create-book" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title of Book</label>
                        <input name="title" type="text" class="form-control" id="formGroupExampleInput"
                            placeholder="Input Title of Book">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author of Book</label>
                        <input name="author" type="text" class="form-control" id="formGroupExampleInput"
                            placeholder="Input Author of Book">

                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price of Book</label>
                        <input name="price" type="numeric" class="form-control" id="formGroupExampleInput"
                            placeholder="Input Price of Book">
                    </div>
                    <div class="mb-3">
                        <label for="release" class="form-label">Date of release Book</label>
                        <input name="release" type="date" class="form-control" id="formGroupExampleInput"
                            placeholder="Input Date release of Book">
                    </div>

                    <div class="mb-3">
                        <label for="Category" class="form-label">Category of Item</label>
                        <div class="" style="">
                            @foreach ($categories as $category)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox1" value="<?= $category['id'] ?>" name="category_id">
                                <label class="form-check-label" for="inlineCheckbox1"><?= $category['category_name'] ?></label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Insert</button>
                </form>

                <form action="{{ route('createCategory') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="category_name" class="form-label">Category of Book</label>
                        <input name="category_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Author of Book">


                    </div>

                    <button type="submit" class="btn btn-success">Insert</button>
                </form>

            </div>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>

</html>
