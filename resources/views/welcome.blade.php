<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="Photo/logo.png">
    <title>DSTUDIO - ARCHITECTURE | INTERIOR | MASTER PLAN</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<style>
    @media (min-width: 1200px) {

        .who-we-are-text {
            width: 1016px;
            margin-left: 5%;
        }
    }

    @media (min-width: 1600px) and (max-width: 1920px) {
        #responsiveSection {
            background-color: #ffbe00;
            padding: 55px;
            border-top: 3px solid white;
        }

        #responsiveFlex {
            gap: 37%;
            margin-left: 9%;
            margin-top: -4%;
            margin-bottom: 3%;
            font-weight: 700;
            color: #2f3543;
            font-size: 16px;
        }
    }

    #responsiveFlex {
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-align: center;
    }

    #responsiveText {
        text-align: center;
        margin-left: 60px;
        margin-right: 87px;
    }

    @media (max-width: 768px) {
        #responsiveFlex {
            flex-direction: revert;
            gap: 15px;
            margin: 0;
            padding: 0;
            font-size: 14px;
            width: 79px;
        }

        #responsiveFlex a h3 {
            font-size: 18px;
        }

        #responsiveText {
            font-size: 16px;
            margin-top: 20px;
            width: 133%;
            margin-left: -16%;
            text-align: justify;
        }

        #responsiveSection {
            padding: 20px;
        }
    }

    @media (min-width: 1600px) {

        .who-we-are-text {
            width: 1016px;
        }
    }

    @media (max-width: 1199px) {
        /* Styles for smaller screens (less than 1200px) */

        .who-we-are-text {
            width: 1016px;
        }
    }

    @media (min-width: 320px) and (max-width: 768px) {

        .who-we-are-text {
            width: 357px !important;
        }
    }

    #urban-services-left ol {
        list-style-type: decimal;
        padding-left: 20px;
        margin-top: 10px;
    }

    #urban-services-left li {
        margin-bottom: 10px;
    }

    html {
        scroll-behavior: smooth;
    }

    @media screen and (max-width: 768px) {
        #who-we-are {
            padding: 5% 3%;
        }

        .who-we-are-title {
            font-size: 16px;
            text-align: left;
            padding-bottom: 4px;
        }

        .who-we-are-text {
            font-size: 14px;
            text-align: center;
            line-height: 1.6;
        }
    }

    @media screen and (min-width: 769px) {
        .who-we-are-title {
            font-size: 18px;
            text-align: end;
        }

        .who-we-are-text {
            font-size: 16px;
            text-align: center;
        }
    }

    #serviceD {
        transition: all 0.3s ease-in-out;
        background-color: white;
        padding: 6px;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    #serviceD:hover {
        transition: all 0.3s ease-in-out;
        background-color: whitesmoke;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    }



    #fixed-section {
        display: flex;
    }

    @media screen and (max-width: 768px) {
        #fixed-section {
            display: none;
            margin-top: 1767%;
        }
    }

    @media screen and (min-width: 769px) {
        #fixed-section {
            display: flex;
        }
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        background-color: #000;
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

    @keyframes float {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0);
        }
    }
</style>

<body class="antialiased bg-fixed bg-no-repeat bg-cover md:container md:mx-auto md:px-4 lg:container lg:mx-auto lg:px-4"
    style="font-family: 'Nunito', serif;">
    <button id="scrollToTopBtn">↑</button>


    @include('partials.chatbot')
    @include('partials.nav')
    <div style="height: 120%;">
        <section id="responsiveSection" style=" background-color: #ffbe00;padding: 55px;border-top: 3px solid white;">
            <div id="responsiveFlex"
                style="gap: 37%;margin-left: 6%;margin-top: -47px;margin-bottom: 2%;font-weight: 700;color: #2f3543;font-size: 16px;margin-right: 99px;">
                <a href="#service" id="serviceD">
                    <h3>URBAN</h3>
                </a>
                <a href="#remoteService" id="serviceD">
                    <h3>REMOTE</h3>
                </a>
                <a href="#ruralService" id="serviceD">
                    <h3>RURAL</h3>
                </a>
            </div>
            <p id="responsiveText">
                At DSTUDIO, we believe that architecture is for everyone. Whether you’re looking for a trendy urban
                design, a cost-effective rural home, or an innovative international solution, we are here to deliver.
                With our digital-first approach, we make your dream space a reality—no matter where you are.
            </p>
        </section>
    </div>
    <div style="background-color: white; padding: 4%;"></div>

    @include('components.about', ['aboutData' => $aboutData])

    <!-- Who We Are -->
    <section id="who-we-are"
        style="padding: 5%; background-color: white; text-align: end; border-bottom: 2px solid #2f3543; padding-top: 0px; padding-bottom: 24px;">
        <h1 class="who-we-are-title" style="font-size: 18px;font-weight: 600;padding-bottom: 8px;margin-right: 58px;">
            Who We Are</h1>
        <p class="who-we-are-text" style="text-align: justify;width:1013px;">
            {{ $whoAreWeData->details }}
        </p>
    </section>

    <!-- Who We Are -->

    @include('components.urbanService')
    @include('components.ruralService')
    @include('components.remoteService')
    @include('components.upIdea')
    @include('components.blog')

    <!--<section id="fixed-section"-->
    <!--    style="position: absolute; top: 823%; left: 0; width: 100%; height: 7%; background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(10px); z-index: 999; color: white; display: flex; justify-content: center; align-items: center; border-top: 2px solid black;">-->
    <!--</section>-->
    @include('components.network')

    @include('components.contact')
    @include('partials.footer')



    <script>
        const openModalBtns = document.querySelectorAll('.open-modal');
        const modal = document.getElementById('imageModal');
        const closeModalBtn = document.getElementById('closeModal');
        const modalImg = document.getElementById('modalImg');

        openModalBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                const imgSrc = btn.getAttribute('data-img-src');

                modalImg.src = imgSrc;
                modal.classList.remove('hidden');
            });
        });

        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                const scrollToTarget = () => {
                    const targetPosition = targetElement.offsetTop;
                    const currentPosition = window.scrollY;
                    const distance = targetPosition - currentPosition;
                    const step = distance / 100; // Adjust the divisor for smoother/rougher scroll

                    const smoothScroll = () => {
                        const newPosition = window.scrollY + step;
                        if ((step > 0 && newPosition < targetPosition) || (step < 0 && newPosition > targetPosition)) {
                            window.scrollTo(0, newPosition);
                            requestAnimationFrame(smoothScroll);
                        } else {
                            window.scrollTo(0, targetPosition); // Final scroll position
                        }
                    };

                    smoothScroll();
                };

                scrollToTarget();
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
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('hidden');
            }
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
