<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    const sleep = (milliseconds) => {
        return new Promise(resolve => setTimeout(resolve, milliseconds))
    }

    export default {
        props: {
          items: {}
        },
        methods() {
            function sleep(ms) {
                return new Promise(resolve => setTimeout(resolve, ms));
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
