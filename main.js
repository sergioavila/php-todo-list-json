const { createApp } = Vue;

createApp({
    data() {
        return {
            title : 'To Do List',
            apiUrl : 'server.php',
            list :[],
            newTask:{
                title:'',
                description:''
            }
        }
    },

    methods: {
        // facciamo chiamata axios
        getApi(){
            axios.get(this.apiUrl)
             .then (risultato => {
                this.list = risultato.data;
                console.log(this.list);
             })
        },

        addTask(){
            console.log('mi hai cliccato');
        },
    },
    mounted() {
        this.getApi();
    }
}).mount('#app')