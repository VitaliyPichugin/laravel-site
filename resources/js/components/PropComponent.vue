<template>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Site ID</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="d in datas">
                    <td>{{d.site_id}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props: ['datas'],
        mounted() {
            this.update();
        },
        methods: {
            update: function () {
               console.log(this.datas);
            }
        }
    }
    console.log(this.datas);
</script>
