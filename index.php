<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-todo-list-json</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main id="app">
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>PHP ToDo</h1>
                    </div>
                    <section class="todo-list">
                    <div class="list-group">
                        <ul>
                            <li href="#" class="list-group-item list-group-item-action" v-for='todoElement in todoList' >A second link item</li>
                            <li href="#" class="list-group-item list-group-item-action">A third link item</li>
                            <li href="#" class="list-group-item list-group-item-action">A fourth link item</li>
                        </ul>
                    </div>
                    </section>
                    <div class="col-3" v-for='data in data'>
                        <div class="card">
                            <h2 class="card-title"> </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>