<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    @livewireStyles
    <style>

    </style>
</head>
<body>
    <div class="container-fluid mt-4 p-4">
        <div class="row">
            <div class="col-md-4">
                @livewire('add-task')
            </div>
            <div class="col-md-8 pl-5 pr-5">
                @livewire('show-tasks')
            </div>






        </div>
    </div>

@livewireScripts
</body>
</html>
