
const { createApp } = Vue

createApp({
    data() {
        return {
            todoList :[],
            apiUrl : './api/get_all_list.php',
        }
    },    
    methods: {
        getTodoList(){
            axios.get('this.apiUrl')
                .then((response) => {
                    console.log(response);
                    this.todoList = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });  
            },
    },
    created(){
        this.getTodoList();
    }
}).mount('#app')
