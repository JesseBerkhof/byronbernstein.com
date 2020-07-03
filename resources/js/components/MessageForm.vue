<template>
    <div>
        <div class="w-full text-center mb-6 mt-8">
            <button @click="showModel = !showModel" class="p-4 rounded transition duration-500 ease-in-out bg-white hover:bg-red-600 hover:text-white transform hover:-translate-y-1 hover:scale-110 font-bold">Leave a message</button>
        </div>

        <div v-show="showModel" class="fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center">
            <transition
                    enter-active-class="transition ease-out duration-100 transform"
                    enter-class="opacity-0 scale-95"
                    enter-to-class="opacity-100 scale-100"
                    leave-active-class="transition ease-in duration-75 transform"
                    leave-class="opacity-100 scale-100"
                    leave-to-class="opacity-0 scale-95"
            >
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            </transition>

            <transition
                enter-active-class="transition ease-out duration-100 transform"
                enter-class="opacity-0 scale-95"
                enter-to-class="opacity-100 scale-100"
                leave-active-class="transition ease-in duration-75 transform"
                leave-class="opacity-100 scale-100"
                leave-to-class="opacity-0 scale-95"
            >
            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-4 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                Leave a message in memory of Byron
                            </h3>
                            <div class="mt-2">
                                <div>
                                    <label for="username" class="block text-sm font-medium leading-5 text-gray-700 mt-4">Username</label>
                                    <div class="mt-1 relative rounded-md shadow-sm">
                                        <input v-model="message.username" id="username" class="form-input block w-full sm:text-sm sm:leading-5" placeholder="username" />
                                    </div>
                                    <label for="message" class="block text-sm font-medium leading-5 text-gray-700 mt-4">
                                        Message
                                    </label>
                                    <div class="mt-1 rounded-md shadow-sm">
                                        <textarea v-model="message.body" id="message" rows="3" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">Write a few sentences about Byron.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                  <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                    <button v-on:click="submit()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                      Submit Message
                    </button>
                  </span>
                  <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                    <button @click="showModel = !showModel" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                      Cancel
                    </button>
                  </span>
                </div>
            </div>
            </transition>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        data: function () {
          return {
              message: {
                  username: '',
                  body: '',
              },
              errors: [],
              showModel: false
          }
        },
        methods: {
            submit: function () {
                axios.post('/api/message', {
                    username: this.message.username,
                    body: this.message.body
                })
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
