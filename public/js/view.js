

/*

new Vue({
    el: '#app',
    data: function (){
        return {
            currentView: 'table',
            data: [],
            id: 0,
            view: 'table'
        }
    },
    components: {
        grid: {
            template: '#grid-component'
        },
        table: {
            template: '#table-component'
        }
    },
    mounted() {
        console.log('mounted');
        this.update();
    },
    methods: {
        update: function () {
            axios.get('/get-ajax').then((response) => {
                this.data = response.data;
                this.id++;
                console.log(this.id);
            });
        },
        switchView(view){
            this.currentView = view
        }
    }
});*/
