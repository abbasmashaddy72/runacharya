<div class="mt-8 lg:col-span-5 md:col-span-6 md:mt-0">
    <div class="lg:ml-5">
        <h3 class="mb-6 text-2xl font-medium leading-normal text-center">Get in touch !</h3>

        <form wire:submit.prevent="save">
            @if ($submitted)
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-4"
                    x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)">
                    <div class="flex">
                        <div class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="#004d40"
                                    d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10s10-4.5 10-10S17.5 2 12 2m0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8m4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4l8-8l-1.41-1.42Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold">We will contact You Shortly</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="grid lg:grid-cols-12 lg:gap-6">
                <div class="lg:col-span-12">
                    <div class="text-left">
                        <label for="name" class="font-semibold">Your Name:</label>
                        <div class="relative mt-2 form-icon">
                            <i data-feather="user" class="absolute w-4 h-4 top-3 left-4"></i>
                            <input wire:model='name' name="name" id="name" type="text"
                                class="form-input pl-11" placeholder="Name :">
                        </div>
                    </div>
                </div>
                <div class="mb-5 lg:col-span-12">
                    <div class="text-left">
                        <label for="phone_no" class="font-semibold">Your Contact No.:</label>
                        <div class="relative mt-2 form-icon">
                            <i data-feather="phone" class="absolute w-4 h-4 top-3 left-4"></i>
                            <input wire:model='phone_no' name="phone_no" id="phone_no" type="number"
                                class="form-input pl-11" placeholder="Contact No. :">
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1">
                <div class="mb-5">
                    <div class="text-left">
                        <label for="question" class="font-semibold">Your Question:</label>
                        <div class="relative mt-2 form-icon">
                            <i data-feather="book" class="absolute w-4 h-4 top-3 left-4"></i>
                            <input wire:model='question' name="question" id="question" class="form-input pl-11"
                                placeholder="Question :">
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <div class="text-left">
                        <label for="comment" class="font-semibold">Your Comment:</label>
                        <div class="relative mt-2 form-icon">
                            <i data-feather="message-circle" class="absolute w-4 h-4 top-3 left-4"></i>
                            <textarea wire:model='comment' name="comment" id="comment" class="form-input pl-11 h-28" placeholder="Message :"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" id="submit" name="send"
                class="flex justify-center w-full text-white bg-indigo-600 border-indigo-600 rounded-md btn hover:bg-indigo-700 hover:border-indigo-700 items-cen ter">Send
                Message</button>
        </form>
    </div>
</div>
