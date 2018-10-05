<template id="grid-component">
    <div class="container" >

       <!-- <p>Name: {{data.name}}</p>
        <p>Email: {{data.email}}</p>-->
        <p>Всего просмотров: {{data.count_all_time}}</p>
        <ul class="products clearfix" >
            <li class="product-wrapper clearfix" v-for="d in data.data">
                <p><strong>Site ID:</strong> {{d.site_id}}</p>
                <hr>
                <p ><strong>User Agent:</strong><br> {{d.user_agent}}</p>
                <hr>
                <p><strong>Date/Time:</strong><br> {{d.date_show.date}}</p>
            </li>
        </ul>

    </div>
</template>

<script>
    export default {
        data: function (){
            return {
                currentView: 'table',
                data: [],
                id: 0,
                view: 'table'
            }
        },
        mounted() {
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
    }
</script>
