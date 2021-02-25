<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="tag in tags" :key="tag.id">

                    <div class="card-body">
                        <p> Tag Name:{{tag.name }}</p>
                        <p> Tag Views:{{tag.views }}</p>
                           <p> Tag Views:{{tag.shares }}</p>

                        <span>
                            Data :
                            {{
                                new Date(tag.created_at).toLocaleString("it")
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
            axios.get('api/tagslist').then(response => {
                
                this.tags = response.data.data;
                console.log(response.data.data);
            });
            
        },
        data() {
            return {
                tags: " ",

            }
           
        }
    }
</script>