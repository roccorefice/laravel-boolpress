<template>
    
            <div class="col-md-10">
            
            <a class="btn bg-warning" href="posts/create">Create a new post</a>
                <div class="card" v-for=" post in posts" :key = "post.id">
                

                    <div class="card-header">{{post.title}}</div>

                    <div class="card-body">
                        <strong>{{post.body}}</strong>
                        
                    </div>
                    <div class="card-footer">
                        <p>autore: {{ post.author }}</p>
                         
                        <p>creato il: {{ new Date(post.created_at).toLocaleString('it') }}</p>
                       
                        
                        
                            <div class="crud">
                                <a href="" class="btn btn-primary">View</a>
                                <a href="posts" class="btn btn-primary">Edit</a>
                            </div>
                        </div>
                    </div>
                        
 
                    </div>
                </div>
            </div>

</template>

<script>
    export default {
        data(){
            return {
                posts: [],
            }
        },

        mounted() {
            console.log('Component mounted.');
            axios.get('api/posts').then(response => {
                console.log(response.data.data);
                this.posts = response.data.data;
            }).catch(error =>{
                console.log(error);
            });
        }
    }
</script>

<style lang="scss" scoped>
    .card{
        background-color: #daedf2;
        margin: 70px;
        .card-header{
            font-size: 20px;
            font-weight: 400;
        }
    }

</style>
