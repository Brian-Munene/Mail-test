<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Test</title>
  </head>
  <body>
        <div class="container align-items-center">
            <h1>Mail sending test</h1>
            <div class="row align-items-center">
                <div class="col">
                    </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Recipient's name" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <input type="text" class="form-control" placeholder="Recipient's email address" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-primary" type="button" id="button-add_email">Add</button>
                            </div>
                </div>
                <div class="col">
                </div>
            </div>
            <h2> Emails</h2>
            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                    <div class="fw-bold">Name </div>
                    Email
                    </div>
                    <span class="badge bg-warning rounded-pill">Update</span>
                    <span class="badge bg-danger rounded-pill">Delete</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                    <div class="fw-bold">Name</div>
                    Email
                    </div>
                    <span class="badge bg-warning rounded-pill">Update</span> 
                    <span class="badge bg-danger rounded-pill">Delete</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                    <div class="fw-bold">Name</div>
                    Email
                    </div>
                    <span class="badge bg-warning rounded-pill">Update</span>
                    <span class="badge bg-danger rounded-pill">Delete</span>
                </li>
                </ol>
                <div class="align-items-center">
                <button class="btn btn-primary" type="button" id="button-add_email">Save</button>
                </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>