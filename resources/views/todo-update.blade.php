<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
<div class="container">


    <div class="row">

        <div class="col-md-4 col-md-offset-4">
            @if (isset($todo))
                {{ Form::model($todo, ['route' => ['todos.update', $todo->id]]) }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="task">Nome da Tarefa</label>
                    {{ Form::text('task', $todo->task, ['class' => 'form-control']) }}<br>
                </div>

                <div class="form-group">

                    @if ($todo->is_done == 1)
                        <label class="radio-inline">
                            {{ Form::radio('is_done', 1, true) }} Ativo
                        </label>
                        <label class="radio-inline">
                            {{ Form::radio('is_done', 0, false) }} Inativo
                        </label>
                    @else
                        <label class="radio-inline">
                            {{ Form::radio('is_done', 1, false) }} Ativo
                        </label>
                        <label class="radio-inline">
                            {{ Form::radio('is_done', 0, true) }} Inativo
                        </label>
                        @endif
                        </label>
                </div>

                {{ Form::submit('Atualizar') }}
                {{ Form::close() }}
            @endif
        </div>

    </div>
</div>

<script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>


</body>
</html>
