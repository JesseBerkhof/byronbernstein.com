<template>
    <div>
        <div class="w-full text-center mb-6 mt-8">
            <button @click="submitHeart()" class="p-4 mb-4 rounded transition duration-500 ease-in-out bg-purple-600 hover:bg-purple-600 hover:text-white transform hover:-translate-y-1 font-bold"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="24" class="fill-current text-white"><path class="bg-white" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg></button>
            <br>
            <button @click="showModel = !showModel" class="p-4 rounded transition duration-500 ease-in-out bg-white hover:bg-purple-600 hover:text-white transform hover:-translate-y-1 font-bold">Leave a message</button>
        </div>

        <!-- Form Model -->
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
                <div class="absolute inset-0 bg-black opacity-75"></div>
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
                <div v-if="!formSubmitted">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:mt-4 mx-auto">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Leave a message in memory of Byron
                                </h3>
                                <div class="mt-2">
                                    <div>
                                        <label for="username" class="block text-sm font-medium leading-5 text-gray-700 mt-4">Name</label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <input v-model="message.username" id="username" class="form-input block w-full sm:text-sm sm:leading-5" />
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
                    <button v-on:click="submit()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-500 focus:outline-none focus:border-purple-700 focus:shadow-outline-purple transition ease-in-out duration-150 sm:text-sm sm:leading-5">
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
            </div>
            </transition>
        </div>
        <!-- End Form Model -->

        <!-- Success -->
        <div v-show="showSuccess" class="fixed bottom-0 inset-x-0 px-4 pb-4 sm:inset-0 sm:flex sm:items-center sm:justify-center">
            <transition
                    enter-active-class="transition ease-out duration-100 transform"
                    enter-class="opacity-0 scale-95"
                    enter-to-class="opacity-100 scale-100"
                    leave-active-class="transition ease-in duration-75 transform"
                    leave-class="opacity-100 scale-100"
                    leave-to-class="opacity-0 scale-95"
            >
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-black opacity-75"></div>
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
                <div class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-sm sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <div>
                        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-purple-100">
                            <svg class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-5">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                Thanks for leaving a message.
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm leading-5 text-gray-500">
                                    Your message has been saved and will be approved soon. If you or someone you know struggles with depression, know that you're not alone. Try to talk to someone or reach out to a friend.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 sm:mt-6">
                      <span class="flex w-full rounded-md shadow-sm">
                        <button @click="toggleSuccess()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-500 focus:outline-none focus:border-purple-700 focus:shadow-outline-purple transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                          Close
                        </button>
                      </span>
                    </div>
                </div>
            </transition>
        </div>
        <!-- End success -->
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
              showModel: false,
              formSubmitted: false,
              showSuccess: false,
          }
        },
        methods: {
            submit: function () {
                axios.post('/api/message', {
                    username: this.message.username,
                    body: this.message.body
                })
                .then(response => {
                    this.showModel = !this.showModel;
                    this.showSuccess = !this.showSuccess;
                })
                .catch(e => {
                    this.showModel = !this.showModel;
                })
            },
            submitHeart: function () {
                axios.post('/api/heart')
                    .then(response => {
                        this.showSuccess = !this.showSuccess;
                    })
                    .catch(e => {
                        this.errors.push(e)
                    })
            },
            toggleSuccess: function () {
                this.showSuccess = !this.showSuccess;
                location.reload();
            }
        },
    }
</script>
