const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: [],
            inputText: "",
            todoForm: false
        }
    },
    created() {
        axios.get("server.php")
            .then((resp) => {
                this.todoList = resp.data;
            });
    },
    methods: {
        addTodo() {

            if (this.inputText === "") {
                this.todoForm = !this.todoForm;
                return;
            }

            const data = {
                text: this.inputText,
                done: false
            };

            axios
                .post("server.php", data, {
                    headers: { "Content-Type": "multipart/form-data" }
                })
                .then((resp) => {
                    this.todoList = resp.data;
                    this.inputText = "";
                    this.todoForm = !this.todoForm;
                })
        },
        deleteTodo(index) {
            console.log(index);
            const data = {
                delete: index
            }
            axios
                .post("server.php", data, {
                    headers: { "Content-Type": "multipart/form-data" }
                })
                .then((resp) => {
                    this.todoList = resp.data;
                })
        },

        doneToggle(index) {
            const data = {
                index: index
            }

            console.log("aqui", index);

            axios
                .post("server.php", data, {
                    headers: { "Content-Type": "multipart/form-data" }
                })
                .then((resp) => {
                    this.todoList = resp.data;
                })
        },
        //toggle add form 
        toggleTodoForm() {
            this.todoForm = !this.todoForm;
        }
    }
}).mount("#app");