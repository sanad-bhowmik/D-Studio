<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Photo/logo.png">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="antialiased bg-fixed bg-no-repeat bg-cover md:container md:mx-auto md:px-4 lg:container lg:mx-auto lg:px-4"
    style="font-family: 'Nunito', serif;">

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

    <div id="blog-section" class="container mx-auto px-4 sm:px-6 lg:px-8"
        style="position: relative; overflow: hidden;font-size: 18px;font-family: 'Nunito', serif;">
        <div id="blog-content"
            class="max-w-screen-xl mx-auto pt-12 pb-16 sm:pt-16 sm:pb-20 px-4 sm:px-6 lg:pt-20 lg:pb-28 lg:px-8">
            <h2 id="blog-title" class="text-2xl sm:text-3xl font-bold text-gray-900">
                BLOG
            </h2>
            <div id="blog-grid" class="mt-4">
                <div id="blog-columns" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-x-16 gap-y-12">
                    @foreach ($blogs as $blog)
                        <!-- Blog Card -->
                        <dl class="space-y-4">
                            <dd>
                                <p class="leading-6 text-base text-gray-800">
                                    {!! $blog->details !!}
                                </p>
                            </dd>
                        </dl>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <style>
        @media screen and (max-width: 768px) {

            #blog-columns {
                grid-template-columns: 1fr;
            }

            #blog-right-content,
            #blog-right-content2 {
                text-align: left;
            }

            #blog-title {
                font-size: 24px;
            }

            .font-medium {
                font-size: 16px;
            }

            .leading-6 {
                line-height: 1.5;
            }

            .mt-4 {
                margin-top: 1rem;
            }
        }

        @media screen and (min-width: 769px) {

            #blog-columns {
                grid-template-columns: repeat(2, 1fr);
            }

            #blog-title {
                font-size: 28px;
            }

            .font-medium {
                font-size: 18px;
            }

            .leading-6 {
                line-height: 1.75;
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
