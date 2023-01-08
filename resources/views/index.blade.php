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
        <h2 class="text-center">Project Monitoring</h2>
        @if ($message = Session::get('success'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card border-0 mt-4">
            <div class="card-header"><a href="/createIndex" class="btn btn-primary"><i class="fas fa-plus"> Create Data</i></a></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <th>PROJECT NAME</th>
                            <th>CLIENT</th>
                            <th>PROJECT LEADER</th>
                            <th>START DATE</th>
                            <th>END DATE</th>
                            <th>PROGRESS</th>
                            <th>ACTION</th>

                        </thead>
                        <tbody class="text-center">

                            @foreach ($data as $dt)


                            <tr>
                                <td>{{$dt->project_name}}</td>
                                <td>{{$dt->client}}</td>
                                <td>

                                    <div class="row">
                                        <div class="col text-end">
                                            <img class="rounded-circle" width="40px" height="40px" src="{{$dt->foto_leader}}" alt="">
                                        </div>

                                        <div class="col text-start">
                                            <div class="col">{{$dt->name_leader}}</div>
                                            <div class="col">{{$dt->email_leader}}</div>

                                        </div>

                                    </div>



                                </td>
                                <td>{{$dt->start_date}}</td>
                                <td>{{$dt->end_date}}</td>
                                <td>




                                    <div class="progress mt-1">
                                        <div class="progress-bar" style="width: {{ $dt->progress}}%;" role="progressbar" aria-valuenow="{{$dt->progress}}" aria-valuemin="0" aria-valuemax="100">


                                        </div>
                                    </div>
                                    <p> {{$dt->progress}}%</p>




                                </td>
                                <td>
                                    <a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="/delete/{{$dt->id}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row-1 text-end me-3">
            <div class="col">
                Created by :
            </div>

            <div class="col">
                Nur Alimul Haq
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>





</html>