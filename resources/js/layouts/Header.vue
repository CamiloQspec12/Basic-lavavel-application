<template>
        <div class="header" style="height: 50px; width: 100%; bottom:0; left: 0;">
            <div class="header-left" >
                <h5>Sb</h5>
            </div>
            <div class="header-right">
                <h5>Administrador</h5>
            </div>
        </div>
</template>       

<style scoped>
    .header {
        background-color: #153175;
        color: #fff !important;
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        font-family: inherit !important;
    }
    h5{
        color:rgb(76, 76, 214);
        margin: 4px;
    }
    .header-left{
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: row;
    }
    .header-right{
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: row;
    }

</style>