<template id="table-component">
    <div class="container" >

       <!-- <p>Name: {{data.name}}</p>
        <p>Email: {{data.email}}</p>-->
        <p>Всего просмотров: {{data.count_all_time}}</p>

      <table class="table table-striped">
            <thead>
                <tr>
                    <th>Site ID</th>
                    <th>User Agent</th>
                    <th>Date/Time</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="d in data.data">
                    <td>{{d.site_id}}</td>
                    <td>{{d.user_agent}}</td>
                    <td>{{d.date_show.date}}</td>
                </tr>
            </tbody>
        </table>

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
