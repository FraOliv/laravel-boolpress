<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="article in articles" :key="article.id">
                    <div class="card-header">
                        <p>Title: {{article.title }}</p>
                          <p>Category id: {{article.category_id }}</p>
                         <p>Author: {{article.author }}</p>
                          <p>Reading time:{{article.reading_time }} minutes</p>
                    </div>

                    <div class="card-body">
                        <p> body:{{article.body }}</p>
                        <span>
                            Data :
                            {{
                                new Date(article.created_at).toLocaleString("it")
                            }}
                        </span>
                    </div>
                </div>+
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('api/articleslist').then(response => {
                
                this.articles = response.data.data;
                console.log(response.data.data);
            });
            
        },
        data() {
            return {
                articles: " ",

            }
           
        }
    }
</script>
