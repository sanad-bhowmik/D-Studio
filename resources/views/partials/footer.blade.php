<footer class="bg-gray-800 text-white py-4 px-3 container">
    <div class="container mx-auto flex flex-wrap items-center justify-between">
        <!-- Left: Copyright text -->
        <div class="w-full md:w-1/2 text-left md:text-center mb-4 md:mb-0">
            <p class="text-xs text-gray-400 md:text-sm" style="text-align: justify;">
                Copyright 2025 &copy; DSTUDIO
            </p>
        </div>

        <!-- Right: Developed by text -->
        <div class="w-full md:w-1/2 text-right">
            <p class="text-xs text-gray-400 md:text-sm">
                Developed by <a href="https://playon24.com.bd/" class="font-bold">Playon24</a>
            </p>
        </div>
    </div>
</footer>

<style>
    footer {
        padding-left: 20px;
        padding-right: 20px;
    }

    /* Media Queries for Responsiveness */
    @media (min-width: 768px) {
        footer {
            padding-left: 122px;
            padding-right: 119px;
        }

        .container {
            flex-wrap: nowrap;
            /* Prevent wrapping on medium and larger screens */
        }

        .mb-4 {
            margin-bottom: 0;
        }
    }

    @media (max-width: 767px) {
        footer .text-left {
            text-align: center;
            margin-bottom: 12px;
            /* Add spacing between sections on smaller screens */
        }

        footer .text-right {
            text-align: left;
        }
    }
</style>
