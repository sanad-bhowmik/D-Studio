<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Idea | DSTUDIO</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- component -->
    <div class="flex justify-center items-center w-screen h-screen bg-white">
        <!-- COMPONENT CODE -->
        <div class="container mx-auto my-4 px-4 lg:px-20" style="margin-top: -80px;">
            <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl"
                style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                <div class="flex">
                    <h1 class="font-bold uppercase text-5xl">Give Us Your <br /> thoughts</h1>
                </div>
                <form id="ideaForm" action="{{ route('ideaForm.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                        <input
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="text" name="firstName" placeholder="First Name*" required />
                        <input
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="text" name="lastName" placeholder="Last Name*" required />
                        <input
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="email" name="email" placeholder="Email*" required />
                        <input
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="number" name="phone" placeholder="Phone*" required />
                    </div>
                    <div class="my-4">
                        <label for="imageUpload" class="block text-gray-700">Upload Image*</label>
                        <input type="file" name="imageUpload" id="imageUpload" accept="image/*"
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            required />
                    </div>

                    <div class="flex gap-2">
                        <!-- Send Us Button -->
                        <button type="submit"
                            class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-32 focus:outline-none focus:shadow-outline">
                            Send Us
                        </button>
                        <button type="button"
                            class="uppercase text-sm font-bold tracking-wide bg-gray-500 text-white p-3 rounded-lg w-32 focus:outline-none focus:shadow-outline">
                            Clone
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <!-- COMPONENT CODE -->
    </div>

</body>

</html>

<script>
    const form = document.getElementById('ideaForm');

    const showToast = (message, type = 'success') => {
        // Create a toast container if it doesn't exist
        let toastContainer = document.getElementById('toastContainer');
        if (!toastContainer) {
            toastContainer = document.createElement('div');
            toastContainer.id = 'toastContainer';
            document.body.appendChild(toastContainer);
            toastContainer.style.position = 'fixed';
            toastContainer.style.top = '20px';
            toastContainer.style.right = '20px';
            toastContainer.style.zIndex = '1000';
        }

        // Create the toast message
        const toast = document.createElement('div');
        toast.innerHTML = message;
        toast.style.padding = '15px 20px';
        toast.style.marginBottom = '10px';
        toast.style.borderRadius = '8px';
        toast.style.color = '#fff';
        toast.style.fontSize = '1rem';
        toast.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
        toast.style.opacity = '0'; // Start invisible for animation
        toast.style.transform = 'translateX(100%)'; // Start off-screen for animation
        toast.style.transition = 'all 0.5s ease';

        // Set toast color based on type
        toast.style.backgroundColor = type === 'success' ? '#4CAF50' : '#F44336';

        // Append the toast to the container
        toastContainer.appendChild(toast);

        // Animate the toast (fade-in and slide-in)
        setTimeout(() => {
            toast.style.opacity = '1';
            toast.style.transform = 'translateX(0)';
        }, 100);

        // Remove the toast after 3 seconds
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateX(100%)';
            setTimeout(() => toast.remove(), 500); // Remove from DOM after fade-out
        }, 3000);
    };

    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Submit the form via AJAX
        const formData = new FormData(form);

        fetch("{{ route('ideaForm.submit') }}", {
            method: "POST",
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest', // Inform Laravel it's an AJAX request
            }
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Server responded with an error: ' + response.statusText);
                }
                return response.json(); // Expecting JSON response
            })
            .then(data => {
                // Hide the form and show the success toast
                showToast('Thank you for your submission!', 'success');

                // Redirect to the homepage after a short delay
                setTimeout(() => {
                    window.location.href = '/';
                }, 2000); // Redirect after 1 second delay
            })
            .catch(error => {
                console.error('Error:', error);
                showToast('An error occurred. Please try again!', 'error');
            });
    });
</script>
