<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>Dashboard | Contact</title>
    <link rel="icon" type="image/x-icon" href="Photo/logo.png">

    <!-- CKEditor 5 CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    <style>
        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 12px 24px;
            background-color: #28a745;
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            display: none;
        }

        main {
            position: relative;
        }

        main::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('Photo/background.png');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            opacity: 0.1;
            z-index: -1;
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
                    <div class="bg-white p-10 rounded-lg shadow-xl"
                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 10px 20px;">
                        <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Contact</h2>

                        <!-- Form Start -->
                        <form action="{{ url('/a-contact') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Rich Text Editor for Details -->
                            <div class="mb-8" style="width: 98%;">
                                <textarea name="details" id="details"
                                    class="w-full border-2 p-5 rounded-lg shadow-md focus:outline-none focus:ring-4 focus:ring-blue-500 transition-all duration-300 ease-in-out"
                                    style="border: 1px solid #a79d9d;">{{ old('details', $details->details ?? '') }}</textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="flex mb-4 justify-center">
                                <button type="submit"
                                    class="bg-purple-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-500 transition-all duration-300 ease-in-out">
                                    Save
                                </button>
                            </div>
                        </form>

                        <!-- Form End -->
                    </div>
                </div>
            </main>

            <!-- Toast Notification -->
            <div id="toast" class="toast">
                <span id="toastMessage"></span>
            </div>
        </div>

    </div>

    <script>
        // Initialize CKEditor 5
        document.addEventListener('DOMContentLoaded', function () {
            ClassicEditor
                .create(document.querySelector('#details'))
                .catch(error => {
                    console.error(error);
                });
        });

        @if(session('success'))
            window.onload = function () {
                var toast = document.getElementById("toast");
                var toastMessage = document.getElementById("toastMessage");

                toastMessage.innerHTML = "{{ session('success') }}";

                toast.style.display = "block";

                setTimeout(function () {
                    toast.style.display = "none";
                }, 3000);
            };
        @endif
    </script>

</body>

</html>
