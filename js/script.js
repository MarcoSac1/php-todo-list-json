
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
            axios.get('/user', {
                    params: {
                        nome: this.nome,
                    }
                })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });  
            },
    },
}).mount('#app')
