<template>
   <input type="submit" class="btn btn-danger w-100 mt-1 d-block" value="Eliminar" v-on:click="eliminarReceta"> 
</template>

<script>
    export default {
        props:['recetaId'],       
        methods:{
            eliminarReceta(){
                this.$swal({
                title: 'Desea eliminar la receta?',
                text: "Una vez eliminada, no se piede recuperar !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'No'
                }).then((result) => {
                if (result.isConfirmed) {
                    const params={
                        id:this.recetaId
                    }
                    axios.post(`/recetas/${this.recetaId}`,{params, _method:'delete'})
                    .then(respuesta=>{
                        this.$swal(
                        'Receta Eliminada!',
                        'Se a eliminado la receta',
                        'success'
                    )
                        this.$el.parentElement.parentElement.parentElement.removeChild(this.$el.parentElement.parentElement);
                    })
                    .catch(error=>{
                        console.log(error);
                    })
                    
                }
                })

                
            }
        }
    }
</script>
