<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Photo/logo.png">
    <title>Remote Service</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="antialiased bg-fixed bg-no-repeat bg-cover md:container md:mx-auto md:px-4 lg:container lg:mx-auto lg:px-4"
    style="font-family: serif;">

    <!-- Nav -->
    <nav class="bg-black bg-opacity-50 fixed w-full z-20" style=" width: 1249px;">
        <div class="container mx-auto px-6 py-4 flex items-center " style="">
            <!-- Logo -->
            <a href="/" class="text-white font-bold text-xl" style="margin-right: 10%;letter-spacing: 4px;">
                DSTUDIO
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-8 divide-x divide-gray-500">
                <div class="pr-4"><a href="/"
                        class="text-white hover:text-gray-300 uppercase text-sm nav font-bold">Home</a></div>
                <div class="pr-4 pl-4"><a href="#about"
                        class="text-white hover:text-gray-300 uppercase text-sm nav font-bold">About</a></div>
                <div class="pr-4 pl-4"><a href="#mission"
                        class="text-white hover:text-gray-300 uppercase text-sm nav font-bold">Services</a></div>
                <div class="pr-4 pl-4"><a href="#service"
                        class="text-white hover:text-gray-300 uppercase text-sm nav font-bold">Upload Idea</a></div>
                <div class="pr-4 pl-4"><a href="#blog"
                        class="text-white hover:text-gray-300 uppercase text-sm nav font-bold">Blog</a></div>
                <div class="pl-4"><a href="#contact"
                        class="text-white hover:text-gray-300 uppercase text-sm nav font-bold">Network</a></div>
                <div class="pl-4"><a href="#contact"
                        class="text-white hover:text-gray-300 uppercase text-sm nav font-bold">Contact</a></div>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-toggle" class="md:hidden text-white focus:outline-none" style="margin-left: 6%;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden bg-black bg-opacity-70">
            <div class="px-6 py-4 space-y-2">
                <a href="/" class="block text-white uppercase text-sm font-bold">Home</a>
                <a href="#about" class="block text-white uppercase text-sm font-bold">About</a>
                <a href="#mission" class="block text-white uppercase text-sm font-bold">Services</a>
                <a href="#service" class="block text-white uppercase text-sm font-bold">Upload Idea</a>
                <a href="#blog" class="block text-white uppercase text-sm font-bold">Blog</a>
                <a href="#contact" class="block text-white uppercase text-sm font-bold">Network</a>
                <a href="#contact" class="block text-white uppercase text-sm font-bold">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Nav -->

    <div class=" py-8" style="padding-bottom: 0px; border-bottom: 3px solid #2f3543;">
    <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('Photo/background.png'); background-size: cover; background-position: center; background-repeat: no-repeat; opacity: 0.1; z-index: -1;background-attachment: fixed;">
        </div>
        <div class="">
            <div class="flex flex-wrap" id="remote-services-section" style="margin-top: 8%;">
                <!-- Left Text Section -->
                <div class="w-full lg:w-1/2 px-4" id="remote-services-left">
                    <h2 class="text-2xl font-bold text-black mb-4">REMOTE SERVICES</h2>
                    <p class="font-semibold text-black mb-4">
                        Expert Designs Delivered Across the Country and Worldwide via Remote Collaboration.
                    </p>
                    <p class="text-black mb-4">
                        As DSTUDIO, "Your Distant Design Partner" is more than just a slogan—it's our commitment to
                        bringing
                        architectural and interior design services closer to you, no matter where you are.
                    </p>
                    <h3 class="text-lg font-bold text-black mb-2">Our Services Include:</h3>
                    <ul class="list-disc text-black pl-5 space-y-2">
                        <li>
                            <strong>Remote AutoCAD Drafting Services:</strong> Precise & Professional Drafting for
                            projects
                            across the country & worldwide.
                        </li>
                        <li>
                            <strong>Remote 3D Visualization Services:</strong> High-quality visual representations that
                            bring your project to life, enhancing understanding and communication.
                        </li>
                        <li>
                            <strong>Remote Consultancy Services:</strong> Personalized guidance through audio or video
                            calls
                            over the internet, available to clients anywhere in the world.
                        </li>
                        <li>
                            <strong>Remote Design Services:</strong> Architectural & interior solutions tailored to meet
                            country-specific and international standards.
                        </li>
                        <li>
                            Outsource your 2D AutoCAD Drafting, 3D Visualization, and design needs to DSTUDIO and focus
                            on
                            your creative vision—even without an in-house team. We are ready to enhance your project
                            locally
                            or internationally.
                        </li>
                    </ul>
                    <div
                        style="margin-top: 72px;background-color: #ffbe00;padding: 10px;margin-left: -97px;width: 130%;">
                    </div>
                </div>

                <!-- Right Image Grid Section -->
                <div class="w-full lg:w-1/2 px-4 mt-8 lg:mt-0" id="remote-services-right" style="margin-top: 28px;">
                    <div class="grid grid-cols-2 gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2"
                        style="margin-top: 65px;">
                        <div>
                            <img src="Photo/Remote_01.jpg" alt="Building Design 1" class="remote-image">
                        </div>
                        <div>
                            <img src="Photo/Remote_02.jpg" alt="Building Design 2" class="remote-image">
                        </div>
                        <div>
                            <img src="Photo/Remote_03.jpg" alt="Interior Design 1" class="remote-image">
                        </div>
                        <div>
                            <img src="Photo/Remote_04.jpg" alt="Office Design" class="remote-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @media screen and (max-width: 768px) {
            #remote-services-section {
                flex-direction: column;
            }

            #remote-services-left {
                padding-left: 0;
                text-align: center;
                padding-right: 15px;
            }

            #remote-services-left h2 {
                font-size: 24px;
            }

            #remote-services-left p,
            #remote-services-left h3 {
                font-size: 16px;
            }

            #remote-services-left ul {
                padding-left: 20px;
                text-align: left;
            }

            #remote-services-right {
                margin-top: 16px;
            }

            .remote-image {
                width: 100%;
                height: auto;
                max-width: 100%;
            }

            .grid {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .grid div {
                margin-bottom: 10px;
            }
        }

        @media screen and (min-width: 769px) {
            #remote-services-left {
                padding-left: 97px;
                padding-right: 30px;
            }

            #remote-services-left h2 {
                font-size: 32px;
            }

            #remote-services-left p,
            #remote-services-left h3 {
                font-size: 18px;
            }

            .remote-image {
                width: 100%;
                height: auto;
                max-width: 100%;
            }

            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
            const mobileMenu = document.getElementById("mobile-menu");

            mobileMenuToggle.addEventListener("click", function () {
                mobileMenu.classList.toggle("show");
            });
        });
    </script>
    @include('partials.footer')
</body>

</html>
