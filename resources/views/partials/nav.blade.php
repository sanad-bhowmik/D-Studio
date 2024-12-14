<div class="relative h-screen overflow-hidden">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Navigation -->
    <nav class="absolute top-0 left-0 p-6 w-full flex items-center justify-between z-20">
        <!-- Logo -->
        <div>
            <img src="photo/logo.png" alt="Logo" class="h-10">
        </div>

        <!-- Navigation Links -->
        <ul class="hidden md:flex space-x-6 text-white uppercase text-sm">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#mission">Mission</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-btn" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden absolute top-0 left-0 w-full bg-black bg-opacity-70 hidden">
        <ul class="flex flex-col space-y-6 text-white uppercase text-sm p-6">
            <li><a href="#" class="hover:underline">Home</a></li>
            <li><a href="#about" class="hover:underline">About</a></li>
            <li><a href="#mission" class="hover:underline">Mission</a></li>
            <li><a href="#service" class="hover:underline">Services</a></li>
            <li><a href="#blog" class="hover:underline">Blog</a></li>
            <li><a href="#contact" class="hover:underline">Contact</a></li>
        </ul>
    </div>

    <!-- Slider Section -->
    <div class="relative h-full w-full">
        <!-- Slider Images -->
        <div id="slider" class="absolute inset-0 z-0 h-full w-full">
            <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000"
                style="background-image: url('photo/urban-building.jpg');"></div>
            <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000"
                style="background-image: url('photo/Interior_03.png');"></div>
            <div class="absolute inset-0 bg-cover bg-center transition-opacity duration-1000"
                style="background-image: url('photo/Interior_01.png');"></div>
        </div>
        <!-- Black Overlay on top of the slider -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    </div>

    <!-- Content Section -->
    <div id="content-section" class="absolute inset-0 flex flex-col items-center justify-center p-6 z-10 text-center">
        <!-- Tagline -->
        <div id="tagline" class="text-white mb-4 animate-slide-in">
            <div class="text-lg font-semibold tracking-wide uppercase bg-black bg-opacity-70 px-4 py-2 inline-block">
                Dstudio - Your Distant Design Partner
            </div>
        </div>

        <!-- Main Title -->
        <div id="main-title" class="relative border-4 border-white animate-fade-in">
            <h1 class="text-white font-bold uppercase leading-tight tracking-wider px-4 py-2 text-xl md:text-3xl lg:text-5xl">
                Innovating Spaces, Empowering Communities
            </h1>
        </div>

        <!-- Call-to-Action Buttons -->
        <div class="mt-6 space-y-2 md:space-x-4 md:space-y-0">
            <a href="#service">
                <button class="btn">
                    Urban Services
                </button>
            </a>
            <a href="#service">
                <button class="btn">
                    Rural Services
                </button>
            </a>
            <a href="#service">
                <button class="btn">
                    Global Remote Services
                </button>
            </a>
        </div>
    </div>
</div>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
    // Slider Animation Script
    const slides = document.querySelectorAll('#slider > div');
    let currentSlide = 0;

    const taglines = [
        "Dstudio - Your Distant Design Partner",
        "Crafting Timeless Designs with Passion",
        "Empowering Communities with Sustainable Spaces"
    ];

    const mainTitles = [
        "Innovating Spaces, Empowering Communities",
        "Bringing Your Vision to Life",
        "Designing for the Future, Today"
    ];

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? '1' : '0';
        });

        // Update the content dynamically
        const tagline = document.getElementById('tagline');
        const mainTitle = document.getElementById('main-title');

        tagline.innerHTML = `<div class="text-lg font-semibold tracking-wide uppercase bg-black bg-opacity-70 px-4 py-2 inline-block">${taglines[index]}</div>`;
        mainTitle.innerHTML = `<h1 class="text-white font-bold uppercase leading-tight tracking-wider px-8 py-4" style="font-size: 40px;">${getLetterAnimation(mainTitles[index])}</h1>`;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Function to split text into individual letters and animate them
    function getLetterAnimation(text) {
        return text.split('').map((letter, index) => {
            return `<span class="letter" style="animation-delay: ${index * 0.05}s;">${letter}</span>`;
        }).join('');
    }

    // Initial display and auto-change every 5 seconds
    showSlide(currentSlide);
    setInterval(nextSlide, 5000);
</script>

<style>
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

    .btn {
        --color: white;
        --color2: white;
        padding: 0.8em 1.75em;
        background-color: transparent;
        border-radius: 6px;
        border: .3px solid white;
        transition: .5s;
        position: relative;
        overflow: hidden;
        cursor: pointer;
        z-index: 1;
        font-weight: 700;
        font-size: 17px;
        font-family: 'Roboto', 'Segoe UI', sans-serif;
        text-transform: uppercase;
        color: white;
    }

    .btn::after,
    .btn::before {
        content: '';
        display: block;
        height: 100%;
        width: 100%;
        transform: skew(90deg) translate(-50%, -50%);
        position: absolute;
        inset: 50%;
        left: 25%;
        z-index: -1;
        transition: .5s ease-out;
        background-color: var(--color);
    }

    .btn::before {
        top: -50%;
        left: -25%;
        transform: skew(90deg) rotate(180deg) translate(-50%, -50%);
    }

    .btn:hover::before {
        transform: skew(45deg) rotate(180deg) translate(-50%, -50%);
    }

    .btn:hover::after {
        transform: skew(45deg) translate(-50%, -50%);
    }

    .btn:hover {
        color: black;
    }

    .btn:active {
        filter: brightness(.7);
        transform: scale(.98);
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
    nav ul li a:hover {
        background-color: white;
        color: black;
    }

    /* Floating effect from bottom to top */
    nav ul li a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: black;
        transform: scaleX(0);
        transform-origin: bottom right;
        transition: transform 0.3s ease-out;
    }

    nav ul li a:hover::after {
        transform: scaleX(1);
        transform-origin: bottom left;
    }
</style>
