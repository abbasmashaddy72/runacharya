<x-front-layout>
    <section class="relative py-16 mt-3 bg-gray-50 dark:bg-slate-800 md:py-24">
        <div class="container mt-16 md:mt-24">
            <div class="grid md:grid-cols-1 grid-cols-1 items-center gap-[30px]">
                <div class="mt-8 lg:col-span-5 md:col-span-6 md:mt-0">
                    <div class="lg:ml-5">
                        <h3 class="mb-6 text-2xl font-medium text-center">Book Appointment</h3>

                        <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                            <p class="mb-0" id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-12">
                                    <div class="text-left">
                                        <label for="name" class="font-semibold">Full Name:</label>
                                        <div class="relative mt-2 form-icon">
                                            <input name="name" id="name" type="text" class="pl-2 form-input"
                                                placeholder="Enter Your Full Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 lg:col-span-12">
                                    <div class="text-left">
                                        <label for="email" class="font-semibold"> Phone Number:</label>
                                        <div class="relative mt-2 form-icon">
                                            <input name="email" id="email" type="email" class="pl-2 form-input"
                                                placeholder="Enter Your Phone Number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="mb-5 lg:col-span-12">
                                    <div class="text-left">
                                        <label for="email" class="font-semibold">Email Address:</label>
                                        <div class="relative mt-2 form-icon">
                                            <input name="email" id="email" type="email" class="pl-2 form-input"
                                                placeholder="Enter Your Email Address">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="text-left">
                                        <label for="email" class="font-semibold">Date:</label>
                                        <div class="relative mt-2 form-icon">
                                            <input name="email" id="email" type="date" class="pl-2 form-input"
                                                placeholder="Enter Your Email Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full px-3 sm:w-1/2">
                                    <div class="text-left">
                                        <label for="email" class="font-semibold">Time:</label>
                                        <div class="relative mt-2 form-icon">
                                            <input name="email" id="email" type="time" class="pl-2 form-input"
                                                placeholder="Enter Your Email Address">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-3 mb-5">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="text-left">
                                            <label for="email" class="font-semibold">Enter Your Area:</label>
                                            <div class="relative mt-2 form-icon">
                                                <input name="email" id="email" type="area"
                                                    class="pl-2 form-input" placeholder="Enter Your Area">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="text-left">
                                            <label for="email" class="font-semibold">Enter Your City:</label>
                                            <div class="relative mt-2 form-icon">
                                                <input name="email" id="email" type="city"
                                                    class="pl-2 form-input" placeholder="Enter Your City">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3 mb-5">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="text-left">
                                            <label for="email" class="font-semibold">Enter Your State</label>
                                            <div class="relative mt-2 form-icon">
                                                <input name="email" id="email" type="state"
                                                    class="pl-2 form-input" placeholder="Enter Your State">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full px-3 sm:w-1/2">
                                        <div class="text-left">
                                            <label for="email" class="font-semibold">Enter your PinCode:</label>
                                            <div class="relative mt-2 form-icon">
                                                <input name="email" id="email" type="pincode"
                                                    class="pl-2 form-input" placeholder="Enter Your Pin Code">
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
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
</x-front-layout>
