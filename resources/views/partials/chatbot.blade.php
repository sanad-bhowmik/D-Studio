<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Button</title>
    <style>
        /* Message Container */
        .message-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            z-index: 1000;
            animation: float 3s ease-in-out infinite;
            /* Floating Animation */
        }

        /* Floating Animation */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Icon Button Container */
        .icon-container {
            display: flex;
            align-items: center;
            position: relative;
        }

        .icon-container .title {
            position: absolute;
            left: -127px;
            background-color: #333;
            color: white;
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 5px;
            opacity: 0;
            transition: opacity 0.3s ease;
            visibility: hidden;
            white-space: nowrap;
        }

        /* Show title on hover */
        .icon-container:hover .title {
            opacity: 1;
            visibility: visible;
        }

        .icon-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .icon-button img {
            width: 44px;
            height: 44px;
        }

        .close-button {
            width: 30px;
            height: 30px;
            background-color: red;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 10px;
        }

        /* Welcome Message */
        .welcome-message {
            position: fixed;
            bottom: 90px;
            right: 20px;
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            animation: fade-out 2s forwards 2s;
        }

        /* Fade-out Animation */
        @keyframes fade-out {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                display: none;
            }
        }

        /* Hide the buttons */
        .hidden {
            transform: scale(0);
            opacity: 0;
        }
    </style>
</head>

<body>

    <!-- Message Container -->
    <div class="message-container" id="messageContainer">
        <!-- Close Button -->
        <div class="close-button" id="closeButton">×</div>

        <!-- WhatsApp Button -->
        <a href="https://www.whatsapp.com/">
            <div class="icon-container" id="whatsAppButton">
                <div class="title">Chat with us on WhatsApp</div>
                <div class="icon-button">
                    <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp Icon">
                </div>
            </div>
        </a>

        <!-- Facebook Button -->
        <a href="https://www.facebook.com/">
            <div class="icon-container" id="facebookButton">
                <div class="title">Message us on Facebook</div>
                <div class="icon-button">
                    <img src="https://img.icons8.com/color/48/000000/facebook-new.png" alt="Facebook Icon">
                </div>
            </div>
        </a>

        <!-- Message Button -->
        <div class="icon-container" id="chatButton">
            <div class="title">Start a live chat</div>
            <div class="icon-button" style="border: 1px solid white;">
                <svg fill="#fff" height="34px" width="34px" version="1.1" id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 458 458"
                    xml:space="preserve" stroke="#fff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <g>
                                <path
                                    d="M428,41.534H30c-16.569,0-30,13.431-30,30v252c0,16.568,13.432,30,30,30h132.1l43.942,52.243 c5.7,6.777,14.103,10.69,22.959,10.69c8.856,0,17.258-3.912,22.959-10.69l43.942-52.243H428c16.568,0,30-13.432,30-30v-252 C458,54.965,444.568,41.534,428,41.534z M323.916,281.534H82.854c-8.284,0-15-6.716-15-15s6.716-15,15-15h241.062 c8.284,0,15,6.716,15,15S332.2,281.534,323.916,281.534z M67.854,198.755c0-8.284,6.716-15,15-15h185.103c8.284,0,15,6.716,15,15 s-6.716,15-15,15H82.854C74.57,213.755,67.854,207.039,67.854,198.755z M375.146,145.974H82.854c-8.284,0-15-6.716-15-15 s6.716-15,15-15h292.291c8.284,0,15,6.716,15,15C390.146,139.258,383.43,145.974,375.146,145.974z">
                                </path>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
    </div>

    <script>
        const messageContainer = document.getElementById('messageContainer');
        const closeButton = document.getElementById('closeButton');

        // Hide the entire message container when the close button is clicked
        closeButton.addEventListener('click', () => {
            messageContainer.classList.add('hidden');
        });

    </script>

</body>

</html>
