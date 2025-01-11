<div class="bg-white py-8" id="upIdea" style="padding-bottom: 0px; border-bottom: 3px solid #2f3543;">
    <div class="">
        <div class="flex flex-wrap" id="upload-idea-section">
            <!-- Left Text Section -->
            <div class="w-full lg:w-1/2 px-4" id="upload-idea-left">
                <h2 class="text-2xl font-bold text-black mb-4">UPLOAD IDEA</h2>
                <p class="font-semibold text-black mb-4">
                    Turn your vision into reality!
                </p>
                <p class="text-black mb-4">
                    Whether you have a hand-drawn sketch of an interior layout, building design, or any rearrangement
                    idea, DSTUDIO is here to bring it to life with precision.
                </p>
                <p class="text-black mb-4">
                    Simply <strong>upload your sketch</strong> or existing drawings directly from your phone, and our
                    team will:
                </p>
                <h3 class="text-lg font-bold text-black mb-2">Our Services Include:</h3>
                <ul class="list-disc text-black pl-5 space-y-2">
                    <li>
                        Transform your hand-drawn ideas into professional technical drawings with accurate measurements,
                        ready for construction.
                    </li>
                    <li>
                        Provide verification and expert input from certified architects and engineers to ensure the
                        design is feasible and aligns with industry standards.
                    </li>
                    <li>
                        Develop your existing drawings further to accommodate new requirements, enhancements, or
                        modifications.
                    </li>
                    <li>
                        This service is perfect for those looking for professional support in refining their creative
                        ideas, improving existing plans, or visualizing their projects. Let us take your inputs and
                        deliver polished, actionable solutions that meet your needs.
                    </li>
                </ul>
                <div style="margin-top: 29px;background-color: #ffbe00;padding: 10px;margin-left: -97px;width: 129%;">
                </div>
            </div>

            <!-- Right Image Grid Section -->
            <div class="w-full lg:w-1/2 px-4 mt-8 lg:mt-0" id="upload-idea-right">
                <div class="grid grid-cols-2 gap-2 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2"style="margin-top: 39px;">
                    <div>
                        <img src="Photo/Upload_01.jpg" alt="Building Design 1" class="upload-image">
                    </div>
                    <div>
                        <img src="Photo/Upload_02.jpg" alt="Building Design 2" class="upload-image">
                    </div>
                    <div>
                        <img src="Photo/Upload_03.jpg" alt="Interior Design 1" class="upload-image">
                    </div>
                    <div>
                        <img src="Photo/Upload_04.png" alt="Office Design" class="upload-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Mobile responsive styles */
    @media screen and (max-width: 768px) {
        #upload-idea-section {
            flex-direction: column;
        }

        #upload-idea-left {
            padding-left: 0;
            text-align: center;
            padding-right: 15px;
        }

        #upload-idea-left h2 {
            font-size: 24px;
        }

        #upload-idea-left p,
        #upload-idea-left h3 {
            font-size: 16px;
        }

        #upload-idea-left ul {
            padding-left: 20px;
            text-align: left;
        }

        #upload-idea-right {
            margin-top: 16px;
        }

        .upload-image {
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
        #upload-idea-left {
            padding-left: 97px;
            padding-right: 30px;
        }

        #upload-idea-left h2 {
            font-size: 32px;
        }

        #upload-idea-left p,
        #upload-idea-left h3 {
            font-size: 18px;
        }

        .upload-image {
            width: 100%;
            height: auto;
            max-width: 100%;
        }

        .grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
