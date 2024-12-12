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
            <li><a href="#" class="hover:underline">Home</a></li>
            <li><a href="#" class="hover:underline">Services</a></li>
            <li><a href="#" class="hover:underline">Portfolio</a></li>
            <li><a href="#" class="hover:underline">About</a></li>
            <li><a href="#" class="hover:underline">Contact</a></li>
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
            <li><a href="#" class="hover:underline">Services</a></li>
            <li><a href="#" class="hover:underline">Portfolio</a></li>
            <li><a href="#" class="hover:underline">About</a></li>
            <li><a href="#" class="hover:underline">Contact</a></li>
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
    <div id="content-section" class="absolute inset-0 flex flex-col items-start justify-center p-8 z-10"
        style="gap: 27px;">
        <!-- Tagline -->
        <div id="tagline" class="text-white mb-4 animate-slide-in">
            <div class="text-lg font-semibold tracking-wide uppercase bg-black bg-opacity-70 px-4 py-2 inline-block"
                style="font-size: 40px;">
                Dstudio - Your Distant Design Partner
            </div>
        </div>

        <!-- Main Title -->
        <div id="main-title" class="relative border-4 border-white w-max animate-fade-in">
            <h1 class="text-white font-bold uppercase leading-tight tracking-wider px-8 py-4" style="font-size: 40px;">
                Innovating Spaces, Empowering Communities
            </h1>
        </div>

        <!-- Call-to-Action Buttons -->
        <div class="mt-6 space-x-4 animate-fade-in-delay">
            <button class="btn"
                style="background: rgba(255, 255, 255, 0.25);border-radius: 16px;box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);backdrop-filter: blur(5px);-webkit-backdrop-filter: blur(5px);font-family: math;">
                Urban Services </button>

            <button class="btn"
                style="background: rgba(255, 255, 255, 0.25);border-radius: 16px;box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);backdrop-filter: blur(5px);-webkit-backdrop-filter: blur(5px);font-family: math;">
                Rural Services </button>

            <button class="btn"
                style="background: rgba(255, 255, 255, 0.25);border-radius: 16px;box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);backdrop-filter: blur(5px);-webkit-backdrop-filter: blur(5px);font-family: math;">
                Global Remote Services </button>
        </div>
    </div>
</div>

<script>
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
</style>
