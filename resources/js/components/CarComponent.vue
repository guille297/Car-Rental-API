<script>
    import axios from 'axios'
    export default {
        data (){
            return{
                cars: null
            }
        },
        mounted (){
            this.getCars();
        },
        methods: {
            getCars: function (){
                axios.get('api/cars').then(response=>{
                    this.cars = response.data
                });
            }
        }
    }
</script>
