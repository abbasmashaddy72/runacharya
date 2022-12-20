<div class="lg:ml-5">
    <h3 class="mb-6 text-2xl font-medium text-center">Book Appointment</h3>

    <form wire:submit.prevent="save">
        @if ($submitted)
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md mb-4">
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
                    <label for="name" class="font-semibold">Patient Name:</label>
                    <div class="relative mt-2 form-icon">
                        <input wire:model='name' name="name" id="name" type="text" class="pl-2 form-input"
                            placeholder="Enter Your Full Name">
                    </div>
                </div>
            </div>
            <div class="mb-5 lg:col-span-12">
                <div class="text-left">
                    <label for="phone_no" class="font-semibold"> Phone Number:</label>
                    <div class="relative mt-2 form-icon">
                        <input wire:model='phone_no' name="phone_no" id="phone_no" type="number"
                            class="pl-2 form-input" placeholder="Enter Your Phone Number">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3">
            <div class="w-full px-3 sm:w-1/2">
                <div class="text-left">
                    <label for="appointment_date" class="font-semibold">Appointment Date:</label>
                    <div class="relative mt-2 form-icon">
                        <input wire:model='appointment_date' name="appointment_date" id="appointment_date"
                            type="date" class="pl-2 form-input">
                    </div>
                </div>
            </div>
            <div class="w-full px-3 sm:w-1/2">
                <div class="text-left">
                    <label for="appointment_time" class="font-semibold">Appointment Time:</label>
                    <div class="relative mt-2 form-icon">
                        <input wire:model='appointment_time' name="appointment_time" id="appointment_time"
                            type="time" class="pl-2 form-input" placeholder="Enter Your Email Address">
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-3 mb-5">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="text-left">
                        <label for="area" class="font-semibold">Enter Your Area:</label>
                        <div class="relative mt-2 form-icon">
                            <input wire:model='area' name="area" id="area" type="text"
                                class="pl-2 form-input" placeholder="Enter Your Area">
                        </div>
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="text-left">
                        <label for="comment" class="font-semibold">Enter Your Comments:</label>
                        <div class="relative mt-2 form-icon">
                            <input wire:model='comment' name="comment" id="comment" type="text"
                                class="pl-2 form-input" placeholder="Enter Your City">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" id="submit" name="send"
            class="flex justify-center w-full text-white bg-indigo-600 border-indigo-600 rounded-md btn hover:bg-indigo-700 hover:border-indigo-700 items-cen ter">Book
            Appointment</button>
    </form>
    <br>
</div>
