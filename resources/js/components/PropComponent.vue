<template>
    <div class="container" >
        <h2>{{test}}</h2>
        <p>Name: {{datas.name}}</p>
        <p>Email: {{datas.email}}</p>
        <p>Всего просмотров: {{datas.count_all_time}}</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Site ID</th>
                    <th>User Agent</th>
                    <th>Date/Time</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="d in datas.data">
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
        props: ['datas', 'test'],
        mounted() {
            this.update();
        },
        methods: {
            update: function () {
                console.log(this.test);
               console.log(this.datas);
            }
        }
    }
    console.log(this.datas);
</script>
