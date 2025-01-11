<div class="bg-white py-8" id="service" style="padding-bottom: 0px; border-bottom: 3px solid #2f3543;font-family:sans-serif;">
    <div class="">
        <div class="flex flex-wrap" id="urban-services-section">
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
                        <strong>Building Design Consultancy:</strong> Expert guidance to create innovative, efficient,
                        and budget-friendly structures.
                    </li>
                    <li>
                        <strong>Interior Design and Construction:</strong> Comprehensive services to transform spaces
                        into functional, aesthetically pleasing environments within competitive budgets.
                    </li>
                    <li>
                        <strong>Custom Solutions:</strong> Personalized designs for homes, commercial spaces, and retail
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
                <div style="margin-top: 62px;background-color: #ffbe00;padding: 10px;margin-left: -97px;width: 129%;">
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
</style>
