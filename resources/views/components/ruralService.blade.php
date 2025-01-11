<div class="bg-white py-8" style="padding-bottom: 0px; border-bottom: 3px solid #2f3543;font-family:sans-serif;">
    <div class="">
        <div class="flex flex-wrap" id="rural-services-section">
            <!-- Left Text Section -->
            <div class="w-full lg:w-1/2 px-4" id="rural-services-left">
                <h2 class="text-2xl font-bold text-black mb-4">RURAL SERVICES</h2>
                <p class="font-semibold text-black mb-4">
                    Affordable, Professional Designs for the Countryside.
                </p>
                <p class="text-black mb-4">
                    We bring professional design solutions to rural areas, combining functionality, affordability, and
                    thoughtful craftsmanship.
                </p>
                <h3 class="text-lg font-bold text-black mb-2">Our Services Include:</h3>
                <ul class="list-disc text-black pl-5 space-y-2">
                    <li>
                        <strong>House Design: </strong> Thoughtfully crafted designs to maximize space and usability.
                    </li>
                    <li>
                        <strong>Interior Design and Construction:</strong> Comprehensive services to transform spaces
                        into functional, aesthetically pleasing environments within competitive budgets.
                    </li>
                    <li>
                        <strong>Rural Interior Design:</strong> Functional and stylish interiors tailored to rural
                        lifestyles.
                    </li>
                    <li>
                        <strong>Commercial Area Design:</strong> Efficient designs for rural businesses, including shops
                        and workspaces.
                    </li>
                    <li>
                        <strong>Agricultural Spaces and Farmhouses:</strong> Expert layouts for farms, rural shops, and
                        more.
                    </li>
                    <li>
                        <strong>Remote Consultancy:</strong> Professional remote consultancy and project monitoring over
                        audio and video communication.
                    </li>
                </ul>
                <div style="margin-top: 32px;background-color: #ffbe00;padding: 10px;margin-left: -97px;width: 129%;">
                </div>
            </div>

            <!-- Right Image Grid Section -->
            <div class="w-full lg:w-1/2 px-4 mt-8 lg:mt-0" id="rural-services-right">
                <div class="grid grid-cols-2 gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2"
                    style="margin-top: 39px;">
                    <div>
                        <img src="Photo/Rural_04.png" alt="Building Design 1" class="rural-image">
                    </div>
                    <div>
                        <img src="Photo/Rural Retail_06.png" alt="Building Design 2" class="rural-image">
                    </div>
                    <div>
                        <img src="Photo/Rural House_06.png" alt="Interior Design 1" class="rural-image">
                    </div>
                    <div>
                        <img src="Photo/Rural_03.png" alt="Office Design" class="rural-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Mobile responsive styles */
    @media screen and (max-width: 768px) {
        #rural-services-section {
            flex-direction: column;
            /* Stack the two sections vertically */
        }

        /* Left Text Section */
        #rural-services-left {
            padding-left: 0;
            /* Remove left padding on mobile */
            text-align: center;
            /* Center-align text */
            padding-right: 15px;
            /* Ensure some padding on the right */
        }

        #rural-services-left h2 {
            font-size: 24px;
            /* Adjust font size for headings */
        }

        #rural-services-left p,
        #rural-services-left h3 {
            font-size: 16px;
            /* Adjust paragraph and subheading font sizes */
        }

        #rural-services-left ul {
            padding-left: 20px;
            /* Ensure proper padding for list items */
            text-align: left;
            /* Align list text to the left */
        }

        /* Right Image Grid Section */
        #rural-services-right {
            margin-top: 16px;
            /* Space between sections */
        }

        .rural-image {
            width: 100%;
            /* Ensure images scale with the container */
            height: auto;
            /* Maintain aspect ratio */
            max-width: 100%;
            /* Prevent stretching */
        }

        .grid {
            grid-template-columns: 1fr;
            /* Stack the images vertically */
            gap: 10px;
            /* Add spacing between images */
        }

        .grid div {
            margin-bottom: 10px;
            /* Add some space between the images */
        }
    }

    /* For larger screens (e.g., desktops) */
    @media screen and (min-width: 769px) {
        #rural-services-left {
            padding-left: 97px;
            /* Keep the original padding for larger screens */
            padding-right: 30px;
        }

        #rural-services-left h2 {
            font-size: 32px;
            /* Larger font size for headings on large screens */
        }

        #rural-services-left p,
        #rural-services-left h3 {
            font-size: 18px;
            /* Larger font size for paragraphs and subheadings */
        }

        .rural-image {
            width: 100%;
            /* Ensure images scale with the container */
            height: auto;
            /* Maintain aspect ratio */
            max-width: 100%;
            /* Prevent stretching */
        }

        .grid {
            grid-template-columns: repeat(2, 1fr);
            /* Two columns for larger screens */
        }
    }
</style>
