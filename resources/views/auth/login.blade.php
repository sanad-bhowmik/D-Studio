<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Eventas</title>
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="lg:flex">
        <div class="lg:w-1/2 xl:max-w-screen-sm">

            <div class="mt-10 px-12 sm:px-24 md:px-48 lg:px-12 lg:mt-16 xl:px-24 xl:max-w-2xl">
                <h2
                    class="text-center text-4xl text-green-800 font-display font-semibold lg:text-left xl:text-5xl xl:text-bold">
                    Log in</h2>
                <div class="mt-12">
                    <!-- Form for login -->
                    <form method="POST" action="{{ url('/login') }}">
                        @csrf
                        <div>
                            <div class="text-sm font-bold text-gray-700 tracking-wide">Email Address</div>
                            <input
                                class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                style="padding: 10px;" type="email" name="email" value="{{ old('email') }}"
                                placeholder="mike@gmail.com" required>
                            @error('email')
                                <p class="text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-8">
                            <div class="flex justify-between items-center">
                                <div class="text-sm font-bold text-gray-700 tracking-wide">Password</div>

                            </div>
                            <div class="relative">
                                <input id="password"
                                    class="w-full text-lg py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500"
                                    type="password" name="password" placeholder="Enter your password" required
                                    style="padding: 10px;">
                                <span id="togglePassword"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                                    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    <svg id="eyeSlashIcon" xmlns="http://www.w3.org/2000/svg"
                                        class="hidden h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3.98 8.793A9.929 9.929 0 002.458 12c1.274 4.057 5.065 7 9.542 7 2.615 0 5.007-.93 6.868-2.465M3.98 8.793l15.034 15.034M9 12a3 3 0 003 3m0-6a3 3 0 013 3m0 0a3 3 0 01-3 3m0 0a3 3 0 01-3-3" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <script>
                            const passwordInput = document.getElementById("password");
                            const togglePassword = document.getElementById("togglePassword");
                            const eyeIcon = document.getElementById("eyeIcon");
                            const eyeSlashIcon = document.getElementById("eyeSlashIcon");

                            togglePassword.addEventListener("click", () => {
                                // Toggle password visibility
                                const isPasswordVisible = passwordInput.type === "password";
                                passwordInput.type = isPasswordVisible ? "text" : "password";

                                // Toggle icons
                                eyeIcon.classList.toggle("hidden", !isPasswordVisible);
                                eyeSlashIcon.classList.toggle("hidden", isPasswordVisible);
                            });
                        </script>

                        <div class="mt-10">
                            <button
                                class="bg-indigo-500 text-gray-100 p-4 w-full rounded-full tracking-wide font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg"
                                type="submit">
                                Log In
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div>
            <img src="https://i.pinimg.com/originals/3f/c3/2b/3fc32b3699a73c4a172720cc51b24e19.gif"
                style="margin-top: 28px;" alt="">
        </div>
    </div>
</body>

</html>
