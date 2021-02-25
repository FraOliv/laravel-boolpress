<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="category in categories" :key="category.id">

                    <div class="card-body">
                        <p> Category Genre: {{category.genre }}</p>
                        <p> Over 18: {{category.over18 ? 'si' : 'no'}} </p>
                       
                    </div>
                </div>+
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('api/categorieslist').then(response => {
                
                this.categories = response.data.data;
                console.log(response.data.data);
            });
            
        },
        data() {
            return {
                categories: " ",

            }
           
        }
    }
</script>
