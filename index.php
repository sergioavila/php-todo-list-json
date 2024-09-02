<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap.min.css">

    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Style -->
    <link rel="stylesheet" href="style.css">

    <title>PHP ToDo List JSON</title>
</head>

<body>
    <main id="app">
        <div class="container">
            <h1 class="text-center py-3 block">ToDo List</h1>

            <div class="row justify-content-center">
                <div class="col-md-8 pb-5">
                    <div v-for="todo, index in todoList" class="alert d-flex justify-content-between align-items-center rounded-4" :class="{'is-done': todo.done}">
                    <svg @click="doneToggle(index)" xmlns="http://www.w3.org/2000/svg" class="rounded-circle check" viewBox="0 0 24 24" width="32" height="32" fill="rgba(4,25,85,1)"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"></path></svg>
                        {{ todo.text }}
                    <button type="button" @click="deleteTodo(index)" class="btn" data-bs-dismiss="alert"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="rgba(236,25,252,1)"><path d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z"></path></svg></button>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
        <div class="d-block w-100 h-23 position-fixed p-3 z-2 shadow-lg todoForm":class="{'active': todoForm}" >
            <input type="text" class="form-control" id="add-todo" name="add-todo" placeholder="Add new ToDo" aria-label="Add new ToDo" v-model="inputText" @keyup.enter="addTodo">
            <button class="btn btn-lg btn-primary d-block w-100 mt-2" type="button" @click="addTodo">Add task</button>
        </div>
        <button type="button" class="btn rounded-circle shadow-lg position-fixed" id="add" @click="toggleTodoForm">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="rgba(255,255,255,1)"><path d="M13.0001 10.9999L22.0002 10.9997L22.0002 12.9997L13.0001 12.9999L13.0001 21.9998L11.0001 21.9998L11.0001 12.9999L2.00004 13.0001L2 11.0001L11.0001 10.9999L11 2.00025L13 2.00024L13.0001 10.9999Z"></path></svg>
        </button>
    </main>

    <script src="myscript.js"></script>
</body>

</html>