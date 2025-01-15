<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>Dashboard | Idea</title>
    <link rel="icon" type="image/x-icon" href="Photo/logo.png">

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

        .modal-overlay {
            background-color: rgba(0, 0, 0, 0.5);
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
                        <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">User Ideas</h2>

                        <!-- Table to Display User Ideas (Responsive) -->
                        <div class="overflow-x-auto">
                            <table class="min-w-full table-auto">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2 text-left">Name</th>
                                        <th class="px-4 py-2 text-left">Phone</th>
                                        <th class="px-4 py-2 text-left">Email</th>
                                        <th class="px-4 py-2 text-left">Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userIdeas as $idea)
                                        <tr>
                                            <td class="border px-4 py-2">{{ $idea->firstName }} {{ $idea->lastName }}</td>
                                            <td class="border px-4 py-2">{{ $idea->phone }}</td>
                                            <td class="border px-4 py-2">{{ $idea->email }}</td>
                                            <td class="border px-4 py-2">
                                                <img src="{{ asset($idea->image) }}" alt="User Image"
                                                    class="w-24 h-24 object-cover rounded-full cursor-pointer"
                                                    onclick="openModal('{{ asset($idea->image) }}')">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination Links -->
                        <div class="mt-4">
                            {{ $userIdeas->links() }}
                        </div>
                    </div>
                </div>
            </main>

            <!-- Modal for Image -->
            <div id="image-modal"
                class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-50 modal-overlay"
                onclick="closeModal(event)">
                <div class="relative" onclick="event.stopPropagation()">
                    <img id="modal-image" src="" alt="Full-size Image" class="w-96 h-auto rounded-lg shadow-lg" />
                    <!-- Download Button (SVG) -->
                    <a id="download-btn" href="#" download class="absolute top-2 right-2 bg-white p-2 rounded-full">
                        <svg width="21px" height="21px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M17 17H17.01M17.4 14H18C18.9319 14 19.3978 14 19.7654 14.1522C20.2554 14.3552 20.6448 14.7446 20.8478 15.2346C21 15.6022 21 16.0681 21 17C21 17.9319 21 18.3978 20.8478 18.7654C20.6448 19.2554 20.2554 19.6448 19.7654 19.8478C19.3978 20 18.9319 20 18 20H6C5.06812 20 4.60218 20 4.23463 19.8478C3.74458 19.6448 3.35523 19.2554 3.15224 18.7654C3 18.3978 3 17.9319 3 17C3 16.0681 3 15.6022 3.15224 15.2346C3.35523 14.7446 3.74458 14.3552 4.23463 14.1522C4.60218 14 5.06812 14 6 14H6.6M12 15V4M12 15L9 12M12 15L15 12"
                                    stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

    </div>

    <script>
        // Function to open the modal and set the image source
        function openModal(imagePath) {
            document.getElementById('modal-image').src = imagePath;
            document.getElementById('download-btn').href = imagePath;  // Set download link to image
            document.getElementById('image-modal').classList.remove('hidden');
        }

        // Function to close the modal when clicking outside the image
        function closeModal(event) {
            if (event.target.id === 'image-modal') {
                document.getElementById('image-modal').classList.add('hidden');
            }
        }
    </script>

</body>

</html>
