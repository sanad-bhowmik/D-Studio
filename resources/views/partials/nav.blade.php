<div class="relative h-screen overflow-hidden">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Navigation -->
    <nav class="bg-black bg-opacity-50 fixed w-full z-20" style=" width: 1249px;">
        <div class="container mx-auto px-6 py-4 flex items-center " style="">
            <!-- Logo -->
            <a href="#" class="text-white font-bold text-xl" style="margin-right: 10%;">
                DSTUDIO
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-8 divide-x divide-gray-500">
                <div class="pr-4"><a href="#"
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
            <button id="mobile-menu-toggle" class="md:hidden text-white focus:outline-none" style="margin-left: 12%;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden bg-black bg-opacity-70">
            <div class="px-6 py-4 space-y-2">
                <a href="#" class="block text-white uppercase text-sm font-bold">Home</a>
                <a href="#about" class="block text-white uppercase text-sm font-bold">About</a>
                <a href="#mission" class="block text-white uppercase text-sm font-bold">Services</a>
                <a href="#service" class="block text-white uppercase text-sm font-bold">Upload Idea</a>
                <a href="#blog" class="block text-white uppercase text-sm font-bold">Blog</a>
                <a href="#contact" class="block text-white uppercase text-sm font-bold">Network</a>
                <a href="#contact" class="block text-white uppercase text-sm font-bold">Contact</a>
            </div>
        </div>
    </nav>



    <!-- Slider Section -->
    <div class="relative h-full w-full flex flex-wrap md:flex-nowrap">
        <!-- Slider 1 -->
        <div class="w-full md:w-1/3 h-64 md:h-full flex items-end justify-center bg-cover bg-center image-slider relative"
            data-images="Photo/RuralRetail_07.png,Photo/Urban_02.png,Photo/Urban_03.png,Photo/Urban_04.png">
            <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        </div>

        <!-- Slider 2 -->
        <div class="w-full md:w-1/3 h-64 md:h-full flex items-end justify-center bg-cover bg-center image-slider relative"
            data-images="Photo/Interior_09.png,Photo/Interior_08.png,Photo/Interior_07.png,Photo/Interior_06.png">
            <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        </div>

        <!-- Slider 3 -->
        <div class="w-full md:w-1/3 h-64 md:h-full flex items-end justify-center bg-cover bg-center image-slider relative"
            data-images="Photo/Rural_04.png,Photo/Rural_05.png,Photo/RuralRetail_07.png,Photo/Rural_03.png">
            <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        </div>
    </div>


</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");

        mobileMenuToggle.addEventListener("click", function () {
            mobileMenu.classList.toggle("show");
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        const sliders = document.querySelectorAll(".image-slider");

        sliders.forEach((slider, index) => {
            const images = slider.dataset.images.split(",");
            let currentIndex = 0;

            slider.style.backgroundImage = `url(${images[currentIndex]})`;

            setTimeout(() => {
                currentIndex = (currentIndex + 1) % images.length;
                slider.style.backgroundImage = `url(${images[currentIndex]})`;

                setInterval(() => {
                    currentIndex = (currentIndex + 1) % images.length;
                    slider.style.backgroundImage = `url(${images[currentIndex]})`;
                }, sliders.length * 2000);
            }, 5000 + index * 2000);
        });
    });
</script>



<style>
    #mobile-menu {
        display: none;
    }

    #mobile-menu.show {
        display: block;
    }

    .btn {
        margin-bottom: 22px;
        display: inline-block;
        padding: 10px 1.6rem;
        font-size: 17px;
        font-weight: 700;
        color: white;
        border-bottom: 2px solid rgb(255 255 255);
        cursor: pointer;
        position: relative;
        background: rgba(255, 255, 255, 0.2);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        text-decoration: none;
        overflow: hidden;
        z-index: 1;
        font-family: math;
    }

    .btn::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(2, 2, 2, 0.54);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(7px);
        -webkit-backdrop-filter: blur(7px);
        transform: translateX(-100%);
        transition: all .3s;
        z-index: -1;
    }

    .btn:hover::before {
        transform: translateX(0);
    }

    .image-slider {
        transition: background-image 1.5s ease-in-out;
        background-size: cover;
        background-position: center;
    }

    @media (max-width: 768px) {
        #content-section {
            padding: 4px;
            gap: 15px;
        }

        nav ul li a {
            font-size: 12px;
            padding: 8px 15px;
        }

        .btn {
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        h1 {
            font-size: 20px;
        }

        .btn {
            padding: 0.5em 1.25em;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-out;
    }

    .animate-fade-in-delay {
        animation: fadeIn 1s ease-out 0.5s;
        animation-fill-mode: both;
    }

    @keyframes floatFromLeft {
        from {
            transform: translateX(-100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .letter {
        display: inline-block;
        opacity: 0;
        animation: floatFromLeft 0.05s ease-out forwards;
    }

    /* Navigation Link Style */
    nav ul li a {
        position: relative;
        display: inline-block;
        color: white;
        text-transform: uppercase;
        font-size: 14px;
        padding: 10px 20px;
        text-decoration: none;
        transition: color 0.3s ease, background-color 0.3s ease;
    }

    /* Hover effect with background color change */
    .nav {
        transition: background-color 0.3s ease, color 0.3s ease, padding 0.3s ease;
    }

    .nav:hover {
        background-color: white;
        color: black;
        padding: 5px;
    }
</style>
