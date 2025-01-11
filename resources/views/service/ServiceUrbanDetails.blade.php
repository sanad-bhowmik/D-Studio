<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Photo/logo.png">
    <title>Urban Service</title>
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

    <div class=" py-8" style="padding-bottom: 0px; border-bottom: 3px solid #2f3543;font-family:sans-serif;">
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('Photo/background.png'); background-size: cover; background-position: center; background-repeat: no-repeat; opacity: 0.1; z-index: -1;background-attachment: fixed;">
        </div>
        <div class="">
            <div class="flex flex-wrap" id="urban-services-section" style="margin-top: 8%;">
                <!-- Left Text Section -->
                <div class="w-full lg:w-1/2 px-4" id="urban-services-left">
                    <h2 class="text-2xl font-bold text-black mb-4">URBAN SERVICES</h2>
                    <p class="font-semibold text-black mb-4">
                        Trendy, Functional Designs Tailored for City Life
                    </p>
                    <p class="text-black mb-4">
                        We specialize in modern, practical, and stylish solutions to meet the dynamic demands of urban
                        spaces, offering cost-effective, rational, and efficient design modules for every project.
                    </p>
                    <h3 class="text-lg font-bold text-black mb-2">Our Services Include:</h3>
                    <ul class="list-disc text-black pl-5 space-y-2">
                        <li>
                            <strong>Building Design Consultancy:</strong> Expert guidance to create innovative,
                            efficient,
                            and budget-friendly structures.
                        </li>
                        <li>
                            <strong>Interior Design and Construction:</strong> Comprehensive services to transform
                            spaces
                            into functional, aesthetically pleasing environments within competitive budgets.
                        </li>
                        <li>
                            <strong>Custom Solutions:</strong> Personalized designs for homes, commercial spaces, and
                            retail
                            areas to match your vision and city lifestyle.
                        </li>
                        <li>
                            <strong>Project Management:</strong> Seamless coordination for architectural and interior
                            projects, ensuring timely and cost-effective delivery.
                        </li>
                        <li>
                            <strong>Masterplan Design:</strong> Strategic planning for large-scale developments that
                            integrate functionality and sustainability.
                        </li>
                    </ul>
                    <div
                        style="margin-top: 62px;background-color: #ffbe00;padding: 10px;margin-left: -97px;width: 129%;">
                    </div>
                </div>

                <!-- Right Image Grid Section -->
                <div class="w-full lg:w-1/2 px-4 mt-8 lg:mt-0" id="urban-services-right">
                    <div class="grid grid-cols-2 gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2"
                        style="margin-top: 39px;">
                        <div>
                            <img src="Photo/Urban_02.png" alt="Building Design 1" class="urban-image">
                        </div>
                        <div>
                            <img src="Photo/Urban_04.png" alt="Building Design 2" class="urban-image">
                        </div>
                        <div>
                            <img src="Photo/Interior_01.png" alt="Interior Design 1" class="urban-image">
                        </div>
                        <div>
                            <img src="Photo/Interior_02.png" alt="Office Design" class="urban-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Mobile responsive styles */
        @media screen and (max-width: 768px) {
            #urban-services-section {
                flex-direction: column;
            }

            #urban-services-left {
                padding-left: 0;
                text-align: center;
                padding-right: 15px;
            }

            #urban-services-left h2 {
                font-size: 24px;
            }

            #urban-services-left p,
            #urban-services-left h3 {
                font-size: 16px;
            }

            #urban-services-left ul {
                padding-left: 20px;
                text-align: left;
            }

            #urban-services-right {
                margin-top: 16px;
            }

            .urban-image {
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
            #urban-services-left {
                padding-left: 97px;
                padding-right: 30px;
            }

            #urban-services-left h2 {
                font-size: 32px;
            }

            #urban-services-left p,
            #urban-services-left h3 {
                font-size: 18px;
            }

            .urban-image {
                width: 100%;
                height: auto;
                max-width: 100%;
            }

            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        #mobile-menu {
            display: none;
        }

        #mobile-menu.show {
            display: block;
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
