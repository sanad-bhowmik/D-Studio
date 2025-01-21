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

<body
    class="antialiased bg-fixed bg-no-repeat bg-cover md:container md:mx-auto md:px-4 lg:container lg:mx-auto lg:px-4 "
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

    <div class="py-8" style="font-family: 'Nunito', serif; padding-bottom: 11px; background-color: #fff;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>

        <div class="relative">
            <div class="flex flex-wrap" id="urban-services-section">
                <!-- Left Text Section -->
                <div class="w-full lg:w-1/2 lg:mt-10 px-4" id="urban-services-left">
                    @if($uploadIdea)
                    {!! $uploadIdea->details !!}
                    @else
                        <p>No urban services data available at the moment.</p>
                    @endif
                    <!-- Yellow fixed bar -->
                    <div class="fixed-bar"></div>
                </div>

                <!-- Right Image Grid Section -->
                <div class="w-full lg:w-1/2 px-4 mt-8 lg:mt-0" id="urban-services-right">
                    @if($uploadIdea)
<div class="grid grid-cols-2 gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2" style="margin-top: 39px;">
    @if($uploadIdea->imgOne)
        <div>
            <a href="https://ds.dstudio.com.bd/idea-form" target="_blank">
                <img src="{{ asset($uploadIdea->imgOne) }}" alt="Building Design 1" class="urban-image">
            </a>
        </div>
    @endif
    @if($uploadIdea->imgTwo)
        <div>
            <a href="https://ds.dstudio.com.bd/idea-form" target="_blank">
                <img src="{{ asset($uploadIdea->imgTwo) }}" alt="Building Design 2" class="urban-image">
            </a>
        </div>
    @endif
    @if($uploadIdea->imgThree)
        <div>
            <a href="https://ds.dstudio.com.bd/idea-form" target="_blank">
                <img src="{{ asset($uploadIdea->imgThree) }}" alt="Interior Design 1" class="urban-image">
            </a>
        </div>
    @endif
    @if($uploadIdea->imgFour)
        <div>
            <a href="https://ds.dstudio.com.bd/idea-form" target="_blank">
                <img src="{{ asset($uploadIdea->imgFour) }}" alt="Office Design" class="urban-image">
            </a>
        </div>
    @endif
</div>

                    @else
                        <p>No images available for urban services.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <style>
        h2 {
            font-size: 28px;
        }

        /* Mobile responsive styles */
        @media screen and (max-width: 768px) {
            #urban-services-section {
                flex-direction: column;
                margin-top: 54px;
            }

            #line {
                width: 0 !important;
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
</body>

</html>
