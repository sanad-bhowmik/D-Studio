<div class="bg-white py-8" id="remoteService"
    style="padding-bottom: 0px; border-bottom: 3px solid #2f3543;font-family: 'Nunito', serif;">
    <div class="relative">
        <div class="flex flex-wrap" id="urban-services-section">
            <!-- Left Text Section -->
            <div class="w-full lg:w-1/2 px-4" id="urban-services-left" style="padding-left: 118px;
        padding-right: 0px;">
                @if($remoteServiceData)
                    {!! $remoteServiceData->details !!}
                @else
                    <p>No urban services data available at the moment.</p>
                @endif

                <!-- From Uiverse.io by eirikvold -->
                <a href="https://ds.dstudio.com.bd/idea-form" target="_blank">
                    <button>
                        <div class="svg-wrapper-1">
                            <div class="svg-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path fill="currentColor"
                                        d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <span>Click Share Your Idea</span>
                    </button>
                </a>
                <!-- Yellow fixed bar -->
                <div class="fixed-bar"></div>
            </div>

            <!-- Right Image Grid Section -->
            <div class="w-full lg:w-1/2 px-4 mt-8 lg:mt-0" id="urban-services-right">
                @if($remoteServiceData)
                    <div class="grid grid-cols-2 gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2"
                        style="margin-top: 96px;">
                        @if($remoteServiceData->imgOne)
                            <div>
                                <img src="{{ asset($remoteServiceData->imgOne) }}" alt="Building Design 1" class="urban-image">
                            </div>
                        @endif
                        @if($remoteServiceData->imgTwo)
                            <div>
                                <img src="{{ asset($remoteServiceData->imgTwo) }}" alt="Building Design 2" class="urban-image">
                            </div>
                        @endif
                        @if($remoteServiceData->imgThree)
                            <div>
                                <img src="{{ asset($remoteServiceData->imgThree) }}" alt="Interior Design 1"
                                    class="urban-image">
                            </div>
                        @endif
                        @if($remoteServiceData->imgFour)
                            <div>
                                <img src="{{ asset($remoteServiceData->imgFour) }}" alt="Office Design" class="urban-image">
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
    /* From Uiverse.io by eirikvold */
    button {
        font-family: inherit;
        font-size: 18px;
        background: linear-gradient(to bottom, #ffbe00 0%, #f4ff66 100%);
        color: black;
        padding: 0.8em 2.2em;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        border-radius: 25px;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s;
        margin-bottom: 27px;
    }

    button:hover {
        transform: translateY(-3px);
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
    }

    button:active {
        transform: scale(0.95);
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
    }

    button span {
        display: block;
        margin-left: 0.4em;
        transition: all 0.3s;
    }

    button svg {
        width: 18px;
        height: 18px;
        fill: white;
        transition: all 0.3s;
    }

    button .svg-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.2);
        margin-right: 0.5em;
        transition: all 0.3s;
    }

    button:hover .svg-wrapper {
        background-color: rgba(255, 255, 255, 0.5);
    }

    button:hover svg {
        transform: rotate(45deg);
    }


    .fixed-bar {
        position: absolute;
        bottom: 0;
        left: 0;
        background-color: #ffbe00;
        padding: 10px;
        margin-left: -0;
        width: 640px;
        height: auto;
        z-index: 10;
    }

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
            height: 105%;
            max-width: 100%;
        }

        .grid {
            grid-template-columns: 1fr;
            gap: 10px;
        }

        .grid div {
            margin-bottom: 10px;
        }

        .fixed-bar {
            margin-left: 0;
            width: 100%;
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
