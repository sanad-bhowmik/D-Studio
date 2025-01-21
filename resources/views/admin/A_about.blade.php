<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>Dashboard | About</title>
    <link rel="icon" type="image/x-icon" href="Photo/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 12px 24px;
            background-color: #28a745;
            /* Green color for success */
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            display: none;
            /* Hide by default */
        }
    </style>
</head>

<body>

    <div class="md:flex">

        @include('partials.sidebar')

        <!-- content -->
        <div class="flex-1 flex-col flex">
            @include('partials.navDash')

            <main class="bg-[#f3f3f9] mb-auto flex-grow">
                <div class="container mx-auto px-4 py-8">
                    <div class="bg-white p-8 rounded-lg shadow-lg"
                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-8 text-center">About Information</h2>

                        <!-- Form Start -->
                        <form action="{{ route('admin.storeAbout') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Mission and Vision Fields in Flex Layout -->
                            <div class="flex space-x-6 mb-6">
                                <!-- Mission Field -->
                                <div class="flex-1">
                                    <label for="mission" class="block text-gray-700 font-medium mb-2">Mission:</label>
                                    <textarea name="mission" id="mission"
                                        class="w-full border p-3 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        style="border: 1px solid #a79d9d;" >{{ old('mission') }}</textarea>
                                </div>

                                <!-- Vision Field -->
                                <div class="flex-1">
                                    <label for="vision" class="block text-gray-700 font-medium mb-2">Vision:</label>
                                    <textarea name="vision" id="vision"
                                        class="w-full border p-3 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        style="border: 1px solid #a79d9d;" >{{ old('vision') }}</textarea>
                                </div>
                            </div>

                            <!-- Right and Left Image Fields in Flex Layout -->
                            <div class="flex space-x-6 mb-6">
                                <!-- Right Image -->
                                <div class="flex-1">
                                    <label for="rightImg" class="block text-gray-700 font-medium mb-2">Right
                                        Image:</label>
                                    <input type="file" name="rightImg" id="rightImg"
                                        class="w-full border p-3 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        style="border: 1px solid #a79d9d;">
                                </div>

                                <!-- Left Image -->
                                <div class="flex-1">
                                    <label for="leftImg" class="block text-gray-700 font-medium mb-2">Left
                                        Image:</label>
                                    <input type="file" name="leftImg" id="leftImg"
                                        class="w-full border p-3 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        style="border: 1px solid #a79d9d;">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex mb-4 justify-center">
                                <button type="submit"
                                    class="bg-blue-500 text-white px-6 py-3 rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Save</button>
                            </div>
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
            </main>
            <div id="toast" class="toast">
                <span id="toastMessage"></span>
            </div>
        </div>

    </div>
</body>

</html>
<script>
    // Check if there is a success message in the session
    @if(session('success'))
        window.onload = function () {
            // Get the toast element and the message
            var toast = document.getElementById("toast");
            var toastMessage = document.getElementById("toastMessage");

            // Set the message
            toastMessage.innerHTML = "{{ session('success') }}";

            // Display the toast
            toast.style.display = "block";

            // Hide the toast after 3 seconds
            setTimeout(function () {
                toast.style.display = "none";
            }, 3000);
        };
    @endif
</script>
