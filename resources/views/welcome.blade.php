<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="photo/logo.png">
    <title>Dstudio - ARCHITECTURE | INTERIOR | MASTER PLAN</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<style>
    html {
        scroll-behavior: smooth;
    }

    .testimonial-card {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1002%26quot%3b)' fill='none'%3e%3cpath d='M1056.2996450949677 268.00682398232436L888.5711650431135 235.2377908951925 934.7361643098659 377.3190491321843z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1310.7933019788748 434.92962590126274L1429.3021872197778 485.23366318310013 1361.0973392607123 316.4207406603597z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M804.814%2c390.108C837.425%2c389.681%2c858.932%2c360.047%2c874.889%2c331.603C890.391%2c303.97%2c901.79%2c271.718%2c886.925%2c243.738C871.307%2c214.341%2c838.093%2c200.461%2c804.814%2c199.7C769.981%2c198.903%2c732.675%2c209.273%2c715.928%2c239.826C699.625%2c269.569%2c714.216%2c304.289%2c731.483%2c333.483C748.334%2c361.973%2c771.717%2c390.542%2c804.814%2c390.108' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M137.00200741100394 288.8165693086527L259.85619454972147 174.25318640661897 145.29281164768776 51.398999267901445 22.438624508970236 165.96238216993515z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1250.8 272.56 a129.67 129.67 0 1 0 259.34 0 a129.67 129.67 0 1 0 -259.34 0z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M175.84 205.84 a118.89 118.89 0 1 0 237.78 0 a118.89 118.89 0 1 0 -237.78 0z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M960.09%2c178.846C988.263%2c178.941%2c1008.398%2c154.738%2c1022.09%2c130.116C1035.305%2c106.351%2c1042.098%2c78.352%2c1029.321%2c54.349C1015.839%2c29.021%2c988.769%2c14.54%2c960.09%2c13.641C929.662%2c12.688%2c897.127%2c22.841%2c882.913%2c49.762C869.317%2c75.511%2c883.868%2c104.708%2c898.81%2c129.7C913.211%2c153.787%2c932.026%2c178.751%2c960.09%2c178.846' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1039.769387282613 556.4870834892666L1019.4342591781804 428.09613761879393 891.0433133077076 448.4312657232266 911.3784414121403 576.8222115936993z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1400.8198927912183 434.91830597089273L1275.6986097767317 401.3921592312151 1367.2937460515407 560.0395889853793z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M818.8483391886757 532.4252299609534L943.9789472533889 563.6237945642811 975.1775118567166 438.49318649956786 850.0469037920034 407.2946218962402z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1246.186%2c207.166C1289.299%2c209.653%2c1336.775%2c201.222%2c1359.216%2c164.326C1382.295%2c126.381%2c1371.092%2c78.202%2c1347.515%2c40.565C1325.495%2c5.413%2c1287.639%2c-14.632%2c1246.186%2c-16.109C1201.67%2c-17.695%2c1152.957%2c-6.181%2c1131.53%2c32.871C1110.626%2c70.969%2c1129.807%2c116.166%2c1153.689%2c152.471C1174.788%2c184.544%2c1207.859%2c204.955%2c1246.186%2c207.166' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1088.550857433312 353.1074865055787L1012.981113765535 410.0533729116621 1069.9270001716184 485.62311657943917 1145.4967438393955 428.6772301733558z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M913.397%2c197.493C955.987%2c198.004%2c994.514%2c176.511%2c1018.581%2c141.37C1046.807%2c100.157%2c1069.501%2c48.171%2c1045.765%2c4.219C1021.257%2c-41.162%2c964.808%2c-57.523%2c913.397%2c-53.397C868.592%2c-49.801%2c834.222%2c-16.93%2c813.337%2c22.872C794.076%2c59.578%2c791.885%2c102.931%2c812.494%2c138.898C833.22%2c175.068%2c871.713%2c196.993%2c913.397%2c197.493' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M180.332%2c491.999C199.067%2c490.855%2c214.328%2c478.276%2c223.325%2c461.803C231.916%2c446.073%2c232.471%2c427.554%2c224.216%2c411.645C215.211%2c394.29%2c199.866%2c379.78%2c180.332%2c378.945C159.483%2c378.054%2c140.156%2c389.693%2c129.431%2c407.594C118.391%2c426.02%2c116.077%2c449.281%2c127.17%2c467.675C137.957%2c485.561%2c159.484%2c493.272%2c180.332%2c491.999' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M343.59806772036745 297.34130338288554L448.7948297928145 344.2980986036471 440.01790639301794 243.97740508664256z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M617.3088687597849 341.80718522341897L555.8218331666237 420.50700191924363 696.0086854556096 403.29422081658015z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M667.6881360941112 437.1305190559341L783.3649802164493 332.9746207765699 679.2090819370852 217.29777665423177 563.5322378147471 321.45367493359595z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M475.15951702117644 600.898336700201L608.9454534854556 605.5702445487077 613.6173613339622 471.78430808442863 479.8314248696832 467.1124002359219z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1498.1892287677365 59.43244834475942L1351.0017119246222 2.932454222518345 1294.501717802381 150.11997106563263 1441.6892346454954 206.6199651878737z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M882.6 215.68 a148.44 148.44 0 1 0 296.88 0 a148.44 148.44 0 1 0 -296.88 0z' fill='rgba(199%2c 211%2c 203%2c 0.26)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1002'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
        border-radius: 15px;
        /* box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.5); */
        padding: 30px;
        border: 2px solid #666;
        position: relative;
        overflow: hidden;
    }

    .testimonial-card:hover {
        box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.3);
        transform: scale(1.05);
    }

    .testimonial-card .testimonial-image {
        box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.2);
    }

    .testimonial-slider-wrapper {
        max-width: 90%;
    }

    .testimonial-card p {
        color: #f2f2f2;
    }

    .testimonial-card p.italic {
        font-style: italic;
    }

    .testimonial-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.1);
        opacity: 0.1;
        z-index: 1;
        border-radius: 15px;
    }

    .testimonial-slider-wrapper {
        position: relative;
        overflow: hidden;
    }

    .testimonial-slider {
        display: flex;
        transition: transform 1s ease-in-out;
    }

    .testimonial-card {
        min-width: 100%;
    }

    ::selection {
        background-color: black;
        color: white;
    }

    ::-moz-selection {
        background-color: black;
        color: white;
    }

    @media (max-width: 768px) {
        #about img {
            max-width: 100%;
            height: auto;
            margin: 0 auto;
        }
    }

    #scrollToTopBtn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
        /* Hidden by default */
        background: rgba(12, 11, 11, 0.42);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(6.8px);
        -webkit-backdrop-filter: blur(6.8px);
        color: white;
        border: none;
        padding: 10px 15px;
        font-size: 16px;
        cursor: pointer;
        z-index: 1000;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        animation: float 1.5s ease-in-out infinite;
        /* Animation added */
    }

    #scrollToTopBtn:hover {
        background: rgba(12, 11, 11, 0.73);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(6.8px);
        -webkit-backdrop-filter: blur(6.8px);
    }

    /* Keyframes for floating animation */
    @keyframes float {
        0% {
            transform: translateY(0);
            /* Start position */
        }

        50% {
            transform: translateY(-10px);
            /* Float upwards */
        }

        100% {
            transform: translateY(0);
            /* Return to original position */
        }
    }
</style>

<body class="antialiased bg-fixed bg-no-repeat bg-cover"
    style="background-image: url('photo/Urban_01.png'); background-size: cover; background-position: center;">
    <button id="scrollToTopBtn">↑</button>


    @include('partials.nav')

    <section class="bg-white " id="about">
        <div class="flex flex-col items-center relative">
            <!-- Background Text  -->
            <h1 class="absolute text-6xl md:text-9xl font-semibold text-black opacity-5">
                DSTUDIO
            </h1>
            <div class="relative flex flex-col items-center mt-5 md:mt-10">
                <!-- Foreground Text  -->
                <h1 class="text-2xl md:text-4xl lg:text-6xl font-semibold text-navy-100">About Us</h1>
                <!-- Custom Border  -->
                <div class="md:w-28 w-14 md:h-[4px] h-[2px] bg-orange-600 mt-2"></div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-between bg-transparent p-4">
            <!-- Logo Section -->
            <div class="flex items-center justify-center w-full md:w-1/2 mb-6 md:mb-0">
                <img src="photo/transforming-1.png" alt="Logo" class="border border-white p-1 w-3/4 md:w-full" />
            </div>
            <!-- Services Section -->
            <div class="w-full md:w-1/2 mx-auto mt-6 md:mt-24 mb-20 max-w-2xl text-center p-6 dark:bg-gray-900">
                <h2 class="mb-12 text-center text-gray-900 dark:text-gray-200 sm:text-5xl"
                    style="font-size: 42px; color:#202020; font-family: fantasy;">Who <span
                        style="background-color: black;color: white;padding: 10px;">We Are</span></h2>
                <p class="text-lg text-gray-900 dark:text-gray-200 sm:text-xl"
                    style="line-height: 1.6; color: #202020; text-align: justify;">
                    Dstudio bridges the gap between professional architecture and accessibility. We deliver tailored
                    designs for urban, rural, and international clients, balancing cost, creativity, and functionality.
                    With our digital-first approach, we make your dream space a reality—no matter where you are.
                </p>
            </div>
        </div>
    </section>


    <section class="py-12 bg-white relative " id="mission">
        <!-- Background Overlay with Opacity -->
        <div class="absolute inset-0 bg-cover bg-center opacity-5"
            style="background-image: url('photo/background.png');background-attachment: fixed;"></div>

        <div class="font font-Poppins  mb-32 relative z-10">
            <div class="flex flex-col items-center relative">
                <!-- Background Text -->
                <h1 class="absolute text-6xl md:text-9xl font-semibold text-black opacity-5">
                    DSTUDIO
                </h1>
                <div class="relative flex flex-col items-center mt-5 md:mt-10">
                    <!-- Foreground Text -->
                    <h1 class="text-2xl md:text-4xl lg:text-6xl font-semibold text-navy-100">Mission & Vision</h1>
                    <!-- Custom Border -->
                    <div class="md:w-28 w-14 md:h-[4px] h-[2px] bg-orange-600 mt-2"></div>
                </div>
            </div>
        </div>

        <!-- Mission & Vision Content Section -->
        <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-6 px-6 lg:px-20 relative z-10">
            <!-- Left Section: Mission -->
            <div class="flex flex-col justify-center space-y-4 text-center lg:text-center bg-white p-6"
                style="box-shadow: rgba(0, 0, 0, 0.45) -10px 25px 20px -20px, rgba(0, 0, 0, 0.45) 10px 25px 20px -20px;">
                <h3 class="text-3xl font-bold uppercase">Our <span
                        style="background-color: black;color: white;padding: 10px;">Mission</span></h3>
                <p class="text-gray-500 text-lg" style="text-align: justify;">
                    At Dstudio, our mission is to create innovative, sustainable, and functional spaces that enhance
                    lives. We aim to bridge the gap between professional architecture and accessibility, delivering
                    high-quality designs for all.
                </p>
            </div>

            <!-- Middle Border SVG -->
            <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 100 100"
                    class="stroke-orange-600">
                    <path d="M10 10 L50 50 L90 10" stroke="currentColor" stroke-width="3" fill="none" />
                    <path d="M10 90 L50 50 L90 90" stroke="currentColor" stroke-width="3" fill="none" />
                </svg>
            </div>

            <!-- Right Section: Vision -->
            <div class="flex flex-col justify-center space-y-4 text-center lg:text-center bg-white p-6"
                style="box-shadow: rgba(0, 0, 0, 0.45) -10px 25px 20px -20px, rgba(0, 0, 0, 0.45) 10px 25px 20px -20px;">
                <h3 class="text-3xl font-bold uppercase">Our <span
                        style="background-color: black;color: white;padding: 10px;">Vision</span></h3>
                <p class="text-gray-500 text-lg" style="text-align: justify;">
                    Our vision is to become a global leader in design, delivering accessible, creative, and sustainable
                    architecture that transforms the built environment and enriches communities.
                </p>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white relative mt-10" id="service">

        <div class="font font-Poppins  mb-32 relative z-10">
            <div class="flex flex-col items-center relative">
                <!-- Background Text -->
                <h1 class="absolute text-6xl md:text-9xl font-semibold text-black opacity-5">
                    DSTUDIO
                </h1>
                <div class="relative flex flex-col items-center mt-5 md:mt-10">
                    <!-- Foreground Text -->
                    <h1 class="text-2xl md:text-4xl lg:text-6xl font-semibold text-navy-100">Our Service</h1>
                    <!-- Custom Border -->
                    <div class="md:w-28 w-14 md:h-[4px] h-[2px] bg-orange-600 mt-2"></div>
                </div>
            </div>
        </div>
        <div class="p-24 flex flex-wrap items-center justify-center" style="margin-top: -10%;">

            <!-- Card 1 -->
            <div class="flex-shrink-0 m-6 relative overflow-hidden rounded-lg max-w-xs shadow-lg"
                style="background: rgba(134, 133, 133, 0.2);border-radius: 16px;box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);backdrop-filter: blur(5px);-webkit-backdrop-filter: blur(5px);"
                onclick="openModal('modalUrban')">
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <img class="relative w-60" src="photo/icon/skyscraper-building.png" alt="">
                </div>
                <div class="relative text-black px-6 pb-6 mt-6">
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl"
                            style="margin-left: 32%;margin-top: -29px;font-size: 35px;font-family: math;">Urban</span>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex-shrink-0 m-6 relative overflow-hidden rounded-lg max-w-xs shadow-lg"
                style="background: rgba(134, 133, 133, 0.2);border-radius: 16px;box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);backdrop-filter: blur(5px);-webkit-backdrop-filter: blur(5px);"
                onclick="openModal('modalRural')">
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <img class="relative w-60" src="photo/icon/farm-house.png" alt="" style="width: 83%;">
                </div>
                <div class="relative text-black px-6 pb-6 mt-6">
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl"
                            style="margin-left: 32%;margin-top:1px;font-size: 35px;font-family: math;">Rural</span>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="flex-shrink-0 m-6 relative overflow-hidden rounded-lg max-w-xs shadow-lg"
                style="background: rgba(134, 133, 133, 0.2);border-radius: 16px;box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);backdrop-filter: blur(5px);-webkit-backdrop-filter: blur(5px);"
                onclick="openModal('modalInternational')">
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <img class="relative w-60" src="photo/icon/international.png" alt="" style="width: 83%;">
                </div>
                <div class="relative text-black px-6 pb-6 mt-6">
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl"
                            style="margin-left: 12%;margin-top:1px;font-size: 35px;font-family: math;">International</span>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!-- component -->
    <div class="bg-white relative   flex items-center  n justify-center overflow-hidden z-50 ">
        <div class="absolute inset-0 bg-cover bg-center opacity-10"
            style="background-image: url('photo/background.png');background-attachment: fixed;"></div>
        <div
            class="relative mx-auto h-full px-4  pb-20   md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
            <div class="flex flex-col items-center justify-between lg:flex-row py-16">
                <div class=" relative ">
                    <div>
                        <img src="photo/table-lamp.png">
                    </div>

                    <div class="lg:max-w-xl lg:pr-5 relative z-40">
                        <h2
                            class="mb-6 max-w-lg text-5xl font-light leading-snug tracking-tight text-g1 sm:text-7xl sm:leading-snug">
                            Outsource design,
                            <span
                                class="my-1 inline-block border-b-8 border-g4 bg-white px-4 font-bold text-g4 animate__animated animate__flash">focus
                                on vision</span>
                        </h2>
                        <p class="text-base text-gray-700">Expert support for your projects.</p>
                    </div>
                </div>
                <div class="relative hidden lg:ml-32 lg:block lg:w-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="my-6 mx-auto h-10 w-10 animate-bounce rounded-full bg-white p-2 lg:hidden" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 17l-4 4m0 0l-4-4m4 4V3"></path>
                    </svg>
                    <div
                        class="abg-orange-400 mx-auto w-fit overflow-hidden rounded-[6rem] rounded-br-none rounded-tl-none">
                        <img src="photo/RemoteArchitect.png" style="height: 452px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden text-9xl varien absolute top-6 left-1/4 text-g/10 z-40    ">
            About Us
        </div>
        <div class=" absolute -bottom-24 left-10 z-0  opacity-10 ">
            <svg width="800px" height="800px" viewBox="0 0 24 24"
                class="w-96 z-0  h-full    object-fill fill-gray-300 text-gray-300" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M12 6C12 5.44772 11.5523 5 11 5C10.4477 5 10 5.44772 10 6V16C10 16.5523 10.4477 17 11 17C11.5523 17 12 16.5523 12 16V6ZM9 9C9 8.44772 8.55228 8 8 8C7.44772 8 7 8.44772 7 9V16C7 16.5523 7.44772 17 8 17C8.55228 17 9 16.5523 9 16V9ZM15 9C15 8.44772 14.5523 8 14 8C13.4477 8 13 8.44772 13 9V16C13 16.5523 13.4477 17 14 17C14.5523 17 15 16.5523 15 16V9ZM18 13C18 12.4477 17.5523 12 17 12C16.4477 12 16 12.4477 16 13V16C16 16.5523 16.4477 17 17 17C17.5523 17 18 16.5523 18 16V13ZM6 15C6 14.4477 5.55228 14 5 14C4.44772 14 4 14.4477 4 15V16C4 16.5523 4.44772 17 5 17C5.55228 17 6 16.5523 6 16V15ZM21 15C21 14.4477 20.5523 14 20 14C19.4477 14 19 14.4477 19 15V16C19 16.5523 19.4477 17 20 17C20.5523 17 21 16.5523 21 16V15ZM4 18C3.44772 18 3 18.4477 3 19C3 19.5523 3.44772 20 4 20H21C21.5523 20 22 19.5523 22 19C22 18.4477 21.5523 18 21 18H4Z">
                </path>
            </svg>
        </div>

        <div class=" absolute -bottom-0 left-3/4 z-0  opacity-10 ">
            <svg width="800px" height="800px" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"
                class="w-48 z-0  h-full -rotate-90   object-fill fill-red-300 text-red-300">
                <path
                    d="M32 225h12.993A4.004 4.004 0 0 0 49 220.997V138.01c0-4.976.724-5.04 1.614-.16l12.167 66.708c.397 2.177 2.516 3.942 4.713 3.942h8.512a3.937 3.937 0 0 0 3.947-4S79 127.5 80 129s14.488 52.67 14.488 52.67c.559 2.115 2.8 3.83 5.008 3.83h8.008a3.993 3.993 0 0 0 3.996-3.995v-43.506c0-4.97 1.82-5.412 4.079-.965l10.608 20.895c1.001 1.972 3.604 3.571 5.806 3.571h9.514a3.999 3.999 0 0 0 3.993-4.001v-19.49c0-4.975 2.751-6.074 6.155-2.443l6.111 6.518c1.51 1.61 4.528 2.916 6.734 2.916h7c2.21 0 5.567-.855 7.52-1.92l9.46-5.16c1.944-1.06 5.309-1.92 7.524-1.92h23.992a4.002 4.002 0 0 0 4.004-3.992v-7.516a3.996 3.996 0 0 0-4.004-3.992h-23.992c-2.211 0-5.601.823-7.564 1.834l-4.932 2.54c-4.423 2.279-12.028 3.858-16.993 3.527l2.97.198c-4.962-.33-10.942-4.12-13.356-8.467l-11.19-20.14c-1.07-1.929-3.733-3.492-5.939-3.492h-7c-2.21 0-4 1.794-4 4.001v19.49c0 4.975-1.14 5.138-2.542.382l-12.827-43.535c-.625-2.12-2.92-3.838-5.127-3.838h-8.008c-2.207 0-3.916 1.784-3.817 4.005l1.92 42.998c.221 4.969-.489 5.068-1.585.224l-15.13-66.825c-.488-2.155-2.681-3.902-4.878-3.902h-8.512a3.937 3.937 0 0 0-3.947 4s.953 77-.047 75.5-13.937-92.072-13.937-92.072C49.252 34.758 47.21 33 45 33H31.999"
                    fill-rule="evenodd"></path>
            </svg>
        </div>
        <div class=" absolute top-10 left-3/4 z-0  opacity-10 ">

            <svg fill="#000000" width="800px" height="800px" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"
                class="w-96 z-0  h-full    object-fill fill-blue-300 text-blue-300">
                <path
                    d="M230.704 99.2a4.004 4.004 0 0 0-4.01-3.995h-50.981c-2.215 0-5.212-1.327-6.693-2.964L155.289 77.08c-17.795-19.65-41.628-16.256-53.234 7.58l-38.736 79.557C60.42 170.172 52.705 175 46.077 175H29.359a3.996 3.996 0 0 0-3.994 3.995v10.01A4 4 0 0 0 29.372 193h24.7c8.835 0 19.208-6.395 23.174-14.293l43.645-86.914c3.964-7.894 12.233-9.228 18.473-2.974l17.184 17.219c3.123 3.13 9.242 5.667 13.647 5.667H226.7a4.005 4.005 0 0 0 4.004-3.994v-8.512z"
                    fill-rule="evenodd"></path>
            </svg>
        </div>

    </div>


    <section class="py-12 bg-white relative mt-10">
        <div class="font font-Poppins mb-32 relative z-10">
            <div class="flex flex-col items-center relative">
                <!-- Background Text -->
                <h1 class="absolute text-6xl md:text-9xl font-semibold text-black opacity-5">
                    DSTUDIO
                </h1>
                <div class="relative flex flex-col items-center mt-5 md:mt-10">
                    <!-- Foreground Text -->
                    <h1 class="text-2xl md:text-4xl lg:text-6xl font-semibold text-navy-100">Testimonials</h1>
                    <!-- Custom Border -->
                    <div class="md:w-28 w-14 md:h-[4px] h-[2px] bg-black mt-2"></div>
                </div>
            </div>
        </div>

        <!-- Testimonial Slider -->
        <div class="testimonial-slider-wrapper max-w-4xl mx-auto overflow-hidden">
            <div class="testimonial-slider flex transition-transform duration-1000 ease-in-out">
                <!-- Testimonial 1 -->
                <div
                    class="testimonial-card flex-shrink-0 w-96 px-6 py-8 bg-gray-800 rounded-lg shadow-2xl transform hover:scale-105 transition-transform duration-300 ease-in-out border-4 border-gray-600">
                    <div class="flex items-center space-x-6">
                        <img src="https://cliply.co/wp-content/uploads/2020/09/442008571_ARTIST_AVATAR_3D_400px.gif"
                            alt="Urban Client" class="w-20 h-20 rounded-full border-4 border-gray-500 shadow-lg">
                        <div>
                            <p class="text-lg font-semibold text-white">Urban Client</p>
                            <p class="text-gray-400 text-sm italic">"Dstudio transformed my urban office with a modern,
                                sleek design—on time and within budget."</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div
                    class="testimonial-card flex-shrink-0 w-96 px-6 py-8 bg-gray-800 rounded-lg shadow-2xl transform hover:scale-105 transition-transform duration-300 ease-in-out border-4 border-gray-600">
                    <div class="flex items-center space-x-6">
                        <img src="https://cdna.artstation.com/p/assets/images/images/023/576/078/original/ying-chen-me-optimize.gif?1579652163"
                            alt="Rural Client" class="w-20 h-20 rounded-full border-4 border-gray-500 shadow-lg">
                        <div>
                            <p class="text-lg font-semibold text-white">Rural Client</p>
                            <p class="text-gray-400 text-sm italic">"I never thought I could afford a professional, but
                                Dstudio made my rural house design dream come true."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-white relative" id="blog">
        <div class="font font-Poppins mb-32 relative z-10">
            <div class="flex flex-col items-center relative">
                <!-- Background Text -->
                <h1 class="absolute text-6xl md:text-9xl font-semibold text-black opacity-5">
                    DSTUDIO
                </h1>
                <div class="relative flex flex-col items-center mt-5 md:mt-10">
                    <!-- Foreground Text -->
                    <h1 class="text-2xl md:text-4xl lg:text-6xl font-semibold text-navy-100">Blogs</h1>
                    <!-- Custom Border -->
                    <div class="md:w-28 w-14 md:h-[4px] h-[2px] bg-black mt-2"></div>
                </div>
            </div>
        </div>
        <div class="max-w-screen-2xl lg:py-32 grid grid-cols-12 py-16 mx-auto" style="margin-top: -112px;">
            <ul class="lg:gap-16 sm:gap-8 grid grid-cols-12 col-span-10 col-start-2 gap-6">

                <!-- Blog Item 1 -->
                <li class="mb-6 md:md-0 col-span-12 sm:col-span-6 lg:col-span-4">
                    <a href="#">
                        <img src="photo/Rural House_06.png"
                            class="w-full mb-4 rounded-lg shadow-none transition transition-shadow duration-500 ease-in-out group-hover:shadow-lg"
                            alt="Affordable Rural Homes">
                        <div class="flex items-center mb-3">
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-bold leading-5 text-white font-display mr-2 capitalize bg-red-500">
                                Tips
                            </span>
                            <p class="font-mono text-xs font-normal opacity-75 text-black">December 14th, 2024</p>
                        </div>
                        <p class="font-display max-w-sm text-2xl font-bold leading-tight">
                            <span class="link-underline link-underline-black text-black">
                                Affordable Rural Homes: 5 Simple Tips
                            </span>
                        </p>
                        <p class="mt-2 text-sm text-gray-600">
                            Explore practical and cost-effective strategies for building affordable homes in rural
                            areas.
                        </p>
                    </a>
                </li>

                <!-- Blog Item 2 -->
                <li class="mb-6 md:md-0 col-span-12 sm:col-span-6 lg:col-span-4">
                    <a href="#">
                        <img src="photo/Urban_02.png"
                            class="w-full mb-4 rounded-lg shadow-none transition transition-shadow duration-500 ease-in-out group-hover:shadow-lg"
                            alt="Top Trends in Urban Design">
                        <div class="flex items-center mb-3">
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-bold leading-5 text-white font-display mr-2 capitalize bg-red-500">
                                Trends
                            </span>
                            <p class="font-mono text-xs font-normal opacity-75 text-black">December 13th, 2024</p>
                        </div>
                        <p class="font-display max-w-sm text-2xl font-bold leading-tight">
                            <span class="link-underline link-underline-black text-black">
                                Top Trends in Urban Design
                            </span>
                        </p>
                        <p class="mt-2 text-sm text-gray-600">
                            Discover the latest trends shaping urban landscapes, from sustainable buildings to smart
                            cities.
                        </p>
                    </a>
                </li>

                <!-- Blog Item 3 -->
                <li class="mb-6 md:md-0 col-span-12 sm:col-span-6 lg:col-span-4">
                    <a href="#">
                        <img src="photo/Interior_06.png"
                            class="w-full mb-4 rounded-lg shadow-none transition transition-shadow duration-500 ease-in-out group-hover:shadow-lg"
                            alt="Remote Design for International Clients">
                        <div class="flex items-center mb-3">
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-bold leading-5 text-white font-display mr-2 capitalize bg-red-500">
                                Design
                            </span>
                            <p class="font-mono text-xs font-normal opacity-75 text-black">December 12th, 2024</p>
                        </div>
                        <p class="font-display max-w-sm text-2xl font-bold leading-tight">
                            <span class="link-underline link-underline-black text-black">
                                How Remote Design Helps International Clients
                            </span>
                        </p>
                        <p class="mt-2 text-sm text-gray-600">
                            Learn how remote design services can streamline collaboration with international clients.
                        </p>
                    </a>
                </li>

                <!-- Blog Item 4 -->
                <li class="mb-6 md:md-0 col-span-12 sm:col-span-6 lg:col-span-4">
                    <a href="#">
                        <img src="photo/Drafting.jpg"
                            class="w-full mb-4 rounded-lg shadow-none transition transition-shadow duration-500 ease-in-out group-hover:shadow-lg"
                            alt="Drafting Services" style="height: 67%;">
                        <div class="flex items-center mb-3">
                            <p class="font-mono text-xs font-normal opacity-75 text-black">December 11th, 2024</p>
                        </div>
                        <p class="font-display max-w-sm text-2xl font-bold leading-tight">
                            <span class="link-underline link-underline-black text-black">
                                When You Need Drafting Services
                            </span>
                        </p>
                        <p class="mt-2 text-sm text-gray-600">
                            Understand when professional drafting services are necessary for your construction projects.
                        </p>
                    </a>
                </li>

                <!-- Blog Item 5 -->
                <li class="mb-6 md:md-0 col-span-12 sm:col-span-6 lg:col-span-4">
                    <a href="#">
                        <img src="photo/Rural_03.png"
                            class="w-full mb-4 rounded-lg shadow-none transition transition-shadow duration-500 ease-in-out group-hover:shadow-lg"
                            alt="Eco-Friendly Building Practices">
                        <div class="flex items-center mb-3">
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-bold leading-5 text-white font-display mr-2 capitalize bg-green-500">
                                Sustainability
                            </span>
                            <p class="font-mono text-xs font-normal opacity-75 text-black">December 10th, 2024</p>
                        </div>
                        <p class="font-display max-w-sm text-2xl font-bold leading-tight">
                            <span class="link-underline link-underline-black text-black">
                                Eco-Friendly Building Practices
                            </span>
                        </p>
                        <p class="mt-2 text-sm text-gray-600">
                            Explore sustainable building methods that minimize environmental impact and reduce costs.
                        </p>
                    </a>
                </li>

                <!-- Blog Item 6 -->
                <li class="mb-6 md:md-0 col-span-12 sm:col-span-6 lg:col-span-4">
                    <a href="#">
                        <img src="photo/Rural House_06.png"
                            class="w-full mb-4 rounded-lg shadow-none transition transition-shadow duration-500 ease-in-out group-hover:shadow-lg"
                            alt="Modern Architecture for Small Spaces">
                        <div class="flex items-center mb-3">
                            <span
                                class="inline-flex items-center px-3 py-0.5 rounded-full text-xs font-bold leading-5 text-white font-display mr-2 capitalize bg-blue-500">
                                Design
                            </span>
                            <p class="font-mono text-xs font-normal opacity-75 text-black">December 9th, 2024</p>
                        </div>
                        <p class="font-display max-w-sm text-2xl font-bold leading-tight">
                            <span class="link-underline link-underline-black text-black">
                                Modern Architecture for Small Spaces
                            </span>
                        </p>
                        <p class="mt-2 text-sm text-gray-600">
                            Learn how modern architecture can maximize the potential of small living spaces while
                            staying stylish.
                        </p>
                    </a>
                </li>

            </ul>
        </div>

    </section>


    <section class="py-12 bg-white relative mt-10" id="contact">
        <!-- Background Overlay with Opacity -->
        <div class="absolute inset-0 bg-cover bg-center opacity-5"
            style="background-image: url('photo/background.png');background-attachment: fixed;"></div>

        <div class="font font-Poppins  mb-32 relative z-10">
            <div class="flex flex-col items-center relative">
                <!-- Background Text -->
                <h1 class="absolute text-6xl md:text-9xl font-semibold text-black opacity-5">
                    DSTUDIO
                </h1>
                <div class="relative flex flex-col items-center mt-5 md:mt-10">
                    <!-- Foreground Text -->
                    <h1 class="text-2xl md:text-4xl lg:text-6xl font-semibold text-navy-100">Contact Us</h1>
                    <!-- Custom Border -->
                    <div class="md:w-28 w-14 md:h-[4px] h-[2px] bg-orange-600 mt-2"></div>
                </div>
            </div>
        </div>

        <section class="mb-32 bg-white">
            <div id="map" class="relative h-[300px] overflow-hidden bg-cover bg-[50%] bg-no-repeat">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3649.941286126894!2d90.363025!3d23.8206868!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2sbd!4v1734162486561!5m2!1sen!2sbd"
                    referrerpolicy="no-referrer-when-downgrade" width="100%" height="480" style="border:0;"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="container px-6 md:px-12">
                <div
                    class="block rounded-lg bg-white px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)]  md:py-16 md:px-12 -mt-[100px] backdrop-blur-[30px] border border-gray-300">
                    <div class="flex flex-wrap">
                        <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-5/12 lg:px-6">
                            <form>
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <input type="text"
                                        class="peer block min-h-[auto] w-full rounded border-2 bg-transparent py-2 px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                                        id="exampleInput90" placeholder="Name" />

                                </div>
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <input type="email"
                                        class="peer block min-h-[auto] w-full rounded border-2 bg-transparent py-2 px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                                        id="exampleInput91" placeholder="Email" />

                                </div>
                                <div class="relative mb-6" data-te-input-wrapper-init>
                                    <textarea
                                        class="peer block min-h-[auto] w-full rounded border-2 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none "
                                        id="exampleFormControlTextarea1" rows="3"></textarea>

                                </div>
                                <button type="button"
                                    class="mb-6 w-full rounded bg-gray-500 text-white px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal   lg:mb-0">
                                    Send
                                </button>
                            </form>
                        </div>
                        <div class="w-full shrink-0 grow-0 basis-auto lg:w-7/12">
                            <div class="flex flex-wrap">
                                <div
                                    class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:w-6/12">
                                    <div class="flex items-start">
                                        <div class="shrink-0">
                                            <div class="inline-block rounded-md bg-gray-200 p-4 text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" class="h-6 w-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-6 grow">
                                            <p class="mb-2 font-bold ">
                                                Phone
                                            </p>
                                            <p class="text-sm text-neutral-500">
                                                01811410635
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mb-12 w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:w-6/12">
                                    <div class="flex items-start">
                                        <div class="srink-0">
                                            <div class="inline-block rounded-md bg-gray-200 p-4 text-primary">
                                                <svg width="34px" height="34px" viewBox="-1.8 -1.8 23.60 23.60"
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <title>email [#1573]</title>
                                                        <desc>Created with Sketch.</desc>
                                                        <defs> </defs>
                                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <g id="Dribbble-Light-Preview"
                                                                transform="translate(-300.000000, -922.000000)"
                                                                fill="#000000">
                                                                <g id="icons"
                                                                    transform="translate(56.000000, 160.000000)">
                                                                    <path
                                                                        d="M262,764.291 L254,771.318 L246,764.281 L246,764 L262,764 L262,764.291 Z M246,775 L246,766.945 L254,773.98 L262,766.953 L262,775 L246,775 Z M244,777 L264,777 L264,762 L244,762 L244,777 Z"
                                                                        id="email-[#1573]"> </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-6 grow">
                                            <p class="mb-2 font-bold ">
                                                Email
                                            </p>
                                            <p class="text-sm text-neutral-500">
                                                sajjad@dstudio.com.bd
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mb-12 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:mb-12 lg:w-full lg:px-6 xl:w-6/12">
                                    <div class="align-start flex">
                                        <div class="shrink-0">
                                            <div class="inline-block rounded-md bg-gray-200 p-4 text-primary">
                                                <svg fill="#000000" width="34px" height="34px"
                                                    viewBox="-256 -256 1536.00 1536.00" t="1569683925316" class="icon"
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="14972"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <defs>
                                                            <style type="text/css"></style>
                                                        </defs>
                                                        <path
                                                            d="M713.5 599.9c-10.9-5.6-65.2-32.2-75.3-35.8-10.1-3.8-17.5-5.6-24.8 5.6-7.4 11.1-28.4 35.8-35 43.3-6.4 7.4-12.9 8.3-23.8 2.8-64.8-32.4-107.3-57.8-150-131.1-11.3-19.5 11.3-18.1 32.4-60.2 3.6-7.4 1.8-13.7-1-19.3-2.8-5.6-24.8-59.8-34-81.9-8.9-21.5-18.1-18.5-24.8-18.9-6.4-0.4-13.7-0.4-21.1-0.4-7.4 0-19.3 2.8-29.4 13.7-10.1 11.1-38.6 37.8-38.6 92s39.5 106.7 44.9 114.1c5.6 7.4 77.7 118.6 188.4 166.5 70 30.2 97.4 32.8 132.4 27.6 21.3-3.2 65.2-26.6 74.3-52.5 9.1-25.8 9.1-47.9 6.4-52.5-2.7-4.9-10.1-7.7-21-13z"
                                                            p-id="14973"></path>
                                                        <path
                                                            d="M925.2 338.4c-22.6-53.7-55-101.9-96.3-143.3-41.3-41.3-89.5-73.8-143.3-96.3C630.6 75.7 572.2 64 512 64h-2c-60.6 0.3-119.3 12.3-174.5 35.9-53.3 22.8-101.1 55.2-142 96.5-40.9 41.3-73 89.3-95.2 142.8-23 55.4-34.6 114.3-34.3 174.9 0.3 69.4 16.9 138.3 48 199.9v152c0 25.4 20.6 46 46 46h152.1c61.6 31.1 130.5 47.7 199.9 48h2.1c59.9 0 118-11.6 172.7-34.3 53.5-22.3 101.6-54.3 142.8-95.2 41.3-40.9 73.8-88.7 96.5-142 23.6-55.2 35.6-113.9 35.9-174.5 0.3-60.9-11.5-120-34.8-175.6z m-151.1 438C704 845.8 611 884 512 884h-1.7c-60.3-0.3-120.2-15.3-173.1-43.5l-8.4-4.5H188V695.2l-4.5-8.4C155.3 633.9 140.3 574 140 513.7c-0.4-99.7 37.7-193.3 107.6-263.8 69.8-70.5 163.1-109.5 262.8-109.9h1.7c50 0 98.5 9.7 144.2 28.9 44.6 18.7 84.6 45.6 119 80 34.3 34.3 61.3 74.4 80 119 19.4 46.2 29.1 95.2 28.9 145.8-0.6 99.6-39.7 192.9-110.1 262.7z"
                                                            p-id="14974"></path>
                                                    </g>
                                                </svg>

                                            </div>
                                        </div>
                                        <div class="ml-6 grow">
                                            <p class="mb-2 font-bold ">What's App</p>
                                            <p class="text-neutral-500"> 01811410635
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="w-full shrink-0 grow-0 basis-auto md:w-6/12 md:px-3 lg:w-full lg:px-6 xl:mb-12 xl:w-6/12">
                                    <div class="align-start flex">
                                        <div class="shrink-0">
                                            <div class="inline-block rounded-md bg-gray-200 p-4 text-primary">
                                                <svg fill="#000000" height="30px" width="30px" version="1.1"
                                                    id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    viewBox="-145.7 -145.7 601.40 601.40" xml:space="preserve">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <g id="XMLID_801_">
                                                            <path id="XMLID_802_"
                                                                d="M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73 C77.16,101.969,74.922,99.73,72.16,99.73z">
                                                            </path>
                                                            <path id="XMLID_803_"
                                                                d="M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4 c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z">
                                                            </path>
                                                            <path id="XMLID_804_"
                                                                d="M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599 c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319 c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995 C310,145.43,300.549,94.761,230.454,94.761z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-6 grow">
                                            <p class="mb-2 font-bold ">LinkedIn</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>



    <!-- Modals -->
    <!-- Urban Modal -->
    <div id="modalUrban" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center hidden"
        onclick="closeModalOnOutsideClick(event, 'modalUrban')">
        <div class="bg-gray-900 text-white rounded-lg overflow-hidden shadow-xl" onclick="event.stopPropagation()"
            style="border: 1px solid #333; width: 90%; max-width: 800px; height: 80%; overflow-y: auto;">

            <!-- Header Section -->
            <div
                style="position: sticky; top: 0; background: #111; z-index: 10; border-bottom: 1px solid #444; padding: 1rem;">
                <h2 class="text-4xl font-bold text-white text-center tracking-wider uppercase">
                    Urban Services
                </h2>
                <button
                    style="position: absolute; top: 10px; right: 10px; background: #444; border: none; padding: 0.5rem; border-radius: 50%; cursor: pointer;"
                    onclick="closeModal('modalUrban')">
                    ✖
                </button>
            </div>

            <!-- Video Section -->
            <div style="position: relative;">
                <video autoplay muted loop
                    style="width: 100%; height: auto; max-height: 300px; filter: grayscale(100%);">
                    <source src="photo/vid/urban.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div
                    style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(0,0,0,0.1), #111);">
                </div>
            </div>

            <!-- Content Section -->
            <div style="padding: 1.5rem;">
                <p style="color: #ccc; font-size: 1.1rem; margin-bottom: 1rem;">
                    Trendy, functional designs that meet city-specific demands.
                </p>
                <div style="border-left: 4px solid #555; padding-left: 1rem; margin-bottom: 1.5rem;">
                    <ul style="list-style-type: none; padding: 0;">
                        <li style="color: #fff; font-size: 1rem; margin-bottom: 0.5rem;">
                            ◼ Building Design Consultancy.
                        </li>
                        <li style="color: #fff; font-size: 1rem; margin-bottom: 0.5rem;">
                            ◼ Interior Design and Construction.
                        </li>
                        <li style="color: #fff; font-size: 1rem; margin-bottom: 0.5rem;">
                            ◼ Custom solutions for homes, commercial spaces, and retail areas.
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Image Section -->
            <div style="padding: 1.5rem; border-top: 1px solid #444;">
                <h3 style="color: #fff; font-size: 1.5rem; margin-bottom: 1rem;">Gallery</h3>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem;">
                    <img src="photo/Urban_01.png" alt="Urban Design 1"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                    <img src="photo/Urban_02.png" alt="Urban Design 2"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                    <img src="photo/Urban_03.png" alt="Urban Design 3"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                    <img src="photo/Urban_04.png" alt="Urban Design 4"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                </div>
            </div>
        </div>
    </div>


    <!-- Rural Modal -->
    <div id="modalRural" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden"
        onclick="closeModalOnOutsideClick(event, 'modalRural')">
        <div class="bg-gray-900 text-white rounded-lg overflow-hidden shadow-xl" onclick="event.stopPropagation()"
            style="border: 1px solid #333; width: 90%; max-width: 800px; height: 80%; overflow-y: auto;">

            <!-- Header Section -->
            <div
                style="position: sticky; top: 0; background: #111; z-index: 10; border-bottom: 1px solid #444; padding: 1rem;">
                <h2 class="text-4xl font-bold text-white text-center tracking-wider uppercase">
                    Rural Services
                </h2>
                <button
                    style="position: absolute; top: 10px; right: 10px; background: #444; border: none; padding: 0.5rem; border-radius: 50%; cursor: pointer;"
                    onclick="closeModal('modalUrban')">
                    ✖
                </button>
            </div>

            <!-- Video Section -->
            <div style="position: relative;">
                <video autoplay muted loop
                    style="width: 100%; height: auto; max-height: 300px; filter: grayscale(100%);">
                    <source src="photo/vid/rural.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div
                    style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(0,0,0,0.1), #111);">
                </div>
            </div>

            <!-- Content Section -->
            <div style="padding: 1.5rem;">
                <p style="color: #ccc; font-size: 1.1rem; margin-bottom: 1rem;">
                    Explore our technical expertise with innovative urban designs tailored to meet modern demands.
                </p>
                <div style="border-left: 4px solid #555; padding-left: 1rem; margin-bottom: 1.5rem;">
                    <ul style="list-style-type: none; padding: 0;">
                        <li style="color: #fff; font-size: 1rem; margin-bottom: 0.5rem;">
                            ◼ House plans that maximize functionality.
                        </li>
                        <li style="color: #fff; font-size: 1rem; margin-bottom: 0.5rem;">
                            ◼ Design for agricultural spaces, farmhouses, and rural shops.
                        </li>
                        <li style="color: #fff; font-size: 1rem; margin-bottom: 0.5rem;">
                            ◼ Cost-effective renovations and sustainable layouts.
                        </li>
                        <li style="color: #fff; font-size: 1rem; margin-bottom: 0.5rem;">
                            ◼ Drafting services tailored for urban needs.
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Image Section -->
            <div style="padding: 1.5rem; border-top: 1px solid #444;">
                <h3 style="color: #fff; font-size: 1.5rem; margin-bottom: 1rem;">Gallery</h3>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem;">
                    <img src="photo/Rural Retail_06.png" alt="Urban Design 1"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                    <img src="photo/Rural Retail_07.png" alt="Urban Design 2"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                    <img src="photo/Rural_01.png" alt="Urban Design 3"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                    <img src="photo/Rural_02.png" alt="Urban Design 4"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                    <img src="photo/Rural_03.png" alt="Urban Design 4"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                    <img src="photo/Rural_05.png" alt="Urban Design 4"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                </div>
            </div>
        </div>
    </div>


    <!-- International Modal -->
    <div id="modalInternational" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden"
        onclick="closeModalOnOutsideClick(event, 'modalInternational')">
        <div class="bg-gray-900 text-white rounded-lg overflow-hidden shadow-xl" onclick="event.stopPropagation()"
            style="border: 1px solid #333; width: 90%; max-width: 800px; height: 80%; overflow-y: auto;">

            <!-- Header Section -->
            <div
                style="position: sticky; top: 0; background: #111; z-index: 10; border-bottom: 1px solid #444; padding: 1rem;">
                <h2 class="text-4xl font-bold text-white text-center tracking-wider uppercase">
                    International Services
                </h2>
                <button
                    style="position: absolute; top: 10px; right: 10px; background: #444; border: none; padding: 0.5rem; border-radius: 50%; cursor: pointer;"
                    onclick="closeModal('modalUrban')">
                    ✖
                </button>
            </div>

            <!-- Video Section -->
            <div style="position: relative;">
                <video autoplay muted loop
                    style="width: 100%; height: auto; max-height: 300px; filter: grayscale(100%);">
                    <source src="photo/vid/inter.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div
                    style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(0,0,0,0.1), #111);">
                </div>
            </div>

            <!-- Content Section -->
            <!-- Content Section -->
            <div style="padding: 1.5rem;">
                <p style="color: #ccc; font-size: 1.1rem; margin-bottom: 1rem;">
                    Expert designs delivered globally via remote collaboration.
                </p>
                <div style="border-left: 4px solid #555; padding-left: 1rem; margin-bottom: 1.5rem;">
                    <ul style="list-style-type: none; padding: 0;">
                        <li style="color: #fff; font-size: 1rem; margin-bottom: 0.5rem;">
                            ◼ Residential and commercial architectural and interior designs.
                        </li>
                        <li style="color: #fff; font-size: 1rem; margin-bottom: 0.5rem;">
                            ◼ Remote drafting services tailored to international standards.
                        </li>
                        <li style="color: #fff; font-size: 1rem; margin-bottom: 0.5rem;">
                            ◼ Consultancy via audio or video call over the internet.
                        </li>
                    </ul>
                </div>
            </div>


            <!-- Image Section -->
            <div style="padding: 1.5rem; border-top: 1px solid #444;">
                <h3 style="color: #fff; font-size: 1.5rem; margin-bottom: 1rem;">Gallery</h3>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem;">
                    <img src="photo/Interior_03.png" alt="Urban Design 1"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                    <img src="photo/Interior_01.png" alt="Urban Design 2"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                    <img src="photo/Interior_02.png" alt="Urban Design 3"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                    <img src="photo/Interior_04.png" alt="Urban Design 4"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                    <img src="photo/Interior_11.jpg" alt="Urban Design 4"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                    <img src="photo/Interior_09.png" alt="Urban Design 4"
                        style="border-radius: 0.5rem; object-fit: cover; width: 100%; height: 100%; aspect-ratio: 4/3; border: 1px solid #444;">
                </div>
            </div>
        </div>
    </div>


    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        document.getElementById("menu-btn").addEventListener("click", function () {
            const mobileMenu = document.getElementById("mobile-menu");
            mobileMenu.classList.toggle("hidden");
        });

        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        function closeModalOnOutsideClick(event, modalId) {
            if (event.target.id === modalId) {
                closeModal(modalId);
            }
        }
        const testimonialSlider = document.querySelector('.testimonial-slider');
        const testimonials = document.querySelectorAll('.testimonial-card');
        let currentIndex = 0;

        function showNextTestimonial() {
            currentIndex = (currentIndex + 1) % testimonials.length;
            const offset = -currentIndex * 100; // Shift by the width of one card
            testimonialSlider.style.transform = `translateX(${offset}%)`;
        }

        showNextTestimonial();

        setInterval(showNextTestimonial, 3000);
        const scrollToTopBtn = document.getElementById("scrollToTopBtn");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 100) {
                scrollToTopBtn.style.display = "block";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        });

        scrollToTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    </script>

</body>

</html>
