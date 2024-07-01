
const { createApp } = Vue

createApp({
    data() {
        return {
            nome: '',
            data:[],
        }
    },    
    methods: {
        getData(){
            axios.get('/server.php', {
                    params: {
                        nome: this.nome,
                    }
                })
                .then((response) => {
                    console.log(response);
                    this.data = response.data;
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
        this.getData();
    }
}).mount('#app')
