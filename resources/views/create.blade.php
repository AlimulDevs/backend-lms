<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Mentoring</title>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-info">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3>Create</h3>
            </div>
            <div class="card-body">
                <form action="post">
                    <label for="project_name" class="form-label mt-2">Project Name</label>
                    <input type="text" class="form-control" name="project_name">
                    <label for="client" class="form-label mt-2">Client</label>
                    <input type="text" class="form-control" name="client">
                    <label for="name_leader" class="form-label mt-2">Name Leader</label>
                    <input type="text" class="form-control" name="name_leader">
                    <label for="email_leader" class="form-label mt-2">Email Leader</label>
                    <input type="text" class="form-control" name="email_leader">
                    <label for="foto_leader" class="form-label mt-2">Foto Leader</label>
                    <input type="file" class="form-control" name="foto_leader">
                    <label for="start_date" class="form-label mt-2">Start Date</label>
                    <input type="text" class="form-control" name="start_date">
                    <label for="end_date" class="form-label mt-2">End Date</label>
                    <input type="text" class="form-control" name="end_date">
                    <label for="progress" class="form-label mt-2">Progress</label>
                    <input type="text" class="form-control" name="progress">

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>





</html>