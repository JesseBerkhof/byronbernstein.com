<template>
    <div>
        <div class="w-full text-center mt-6 mb-12">
            <button @click="submit()" class="p-4 rounded transition duration-500 ease-in-out bg-red-600 hover:bg-red-600 hover:text-white transform hover:-translate-y-1 hover:scale-110 font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui text-white" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg>
            </button>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        methods: {
            submit: function () {
                axios.post('/api/heart')
                    .then(response => {
                        console.log(response);
                    })
                    .catch(e => {
                        this.errors.push(e)
                    })
            }
        },
    }
</script>
