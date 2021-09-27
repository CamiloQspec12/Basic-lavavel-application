<template>
    <div style="margin:10px" >
        <header></header>
        <div class="thumbnail" >
            <div>
                dadwadwd
            </div>
            <div v-for="(match, index) in data" :key="index" class="thumbnail--container dawdwad">
                <div class='thumbnail--item' >
                    <h1 style="text-align:center" class="thumbnail__item--title" >{{match.title}}</h1>
                    <img :src="match.thumbnail" class="thumbnail__item--image" alt="">
                </div>
            </div>    
        </div> 
    </div>
</template>

<script>
    export default {
        props:['data'],
        data() {
            return {
                
            }    
        },   
        
    }
</script>
<style scoped>
    .thumbnail{
        display: flex;
        flex-wrap: wrap;
        grid-template-columns: repeat(5, 1fr);
        padding: 20px;
    }
    .thumbnail--item{
        border: solid;
        border-radius: 10px;
        margin: 10px;
        display: flex;
        flex-direction:column ;
        align-items: center;
        position: relative;
        font-size: 20px;
        width: 200px;
    }
    
    .thumbnail__item--image{
        width: 98%;
        height: 200px;
        overflow:hidden;
        margin: 20px;

    }
</style>

