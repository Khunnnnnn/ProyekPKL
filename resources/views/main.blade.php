<!DOCTYPE html>
<html lang="en">
@include('layoutslanding.head')
@include('layoutslanding.navbar')

<body>
    <!-- Header Image -->
    <section class="header" id="home">
        <div data-bs-spy="scroll" data-bs-target="#Navbarnav" data-bs-offset="0" class="scrollspy-example" tabindex="0" class="container-fluid " id="con1">
            <div class="row">
                <div class="col-md-6">
                    <img src="/image/bg.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-4 mx-auto" >
                    <p class="h1" id="judul1">Selamat Ujian ! </p>
                    <p class="caption-header">"Banyak dari kegagalan hidup adalah orang-orang yang tidak menyadari betapa dekatnya mereka dengan kesuksesan ketika mereka menyerah."</p>
                    <a href="#" class=" btn btn-lg btn-starter">Ayo Mulai ! </a>
                </div>

            </div>
        </div>
    </section>
    <!-- END -->
    <!-- Content1 -->
    <section id="keunggulan">
        <div class="container-fluid" id="con2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="wave1">
                <path fill="#6f4c5b" fill-opacity="1" d="M0,288L14.1,266.7C28.2,245,56,203,85,181.3C112.9,160,141,160,169,176C197.6,192,226,224,254,197.3C282.4,171,311,85,339,85.3C367.1,85,395,171,424,197.3C451.8,224,480,192,508,165.3C536.5,139,565,117,593,117.3C621.2,117,649,139,678,122.7C705.9,107,734,53,762,69.3C790.6,85,819,171,847,202.7C875.3,235,904,213,932,213.3C960,213,988,235,1016,213.3C1044.7,192,1073,128,1101,101.3C1129.4,75,1158,85,1186,101.3C1214.1,117,1242,139,1271,144C1298.8,149,1327,139,1355,154.7C1383.5,171,1412,213,1426,234.7L1440,256L1440,0L1425.9,0C1411.8,0,1384,0,1355,0C1327.1,0,1299,0,1271,0C1242.4,0,1214,0,1186,0C1157.6,0,1129,0,1101,0C1072.9,0,1045,0,1016,0C988.2,0,960,0,932,0C903.5,0,875,0,847,0C818.8,0,791,0,762,0C734.1,0,706,0,678,0C649.4,0,621,0,593,0C564.7,0,536,0,508,0C480,0,452,0,424,0C395.3,0,367,0,339,0C310.6,0,282,0,254,0C225.9,0,198,0,169,0C141.2,0,113,0,85,0C56.5,0,28,0,14,0L0,0Z"></path>
            </svg>
            <div class="row text-center">
                <div class="col">
                    <h1 class="display-4" id="judul2">Keunggulan</h1>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner mx-auto shadow-lg">
                        <div class="carousel-item active" id="card1">
                            <img src="/image/1.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption card d-none d-md-block shadow" id="caption1">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/image/2.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption card d-none d-md-block" id="caption1">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/image/3.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption card d-none d-md-block" id="caption1">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section id="fitur">
        <div class="container-fluid" id="about">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="wave1">
                <path fill="#f5e8c7" fill-opacity="1" d="M0,224L13.3,208C26.7,192,53,160,80,170.7C106.7,181,133,235,160,234.7C186.7,235,213,181,240,181.3C266.7,181,293,235,320,218.7C346.7,203,373,117,400,106.7C426.7,96,453,160,480,197.3C506.7,235,533,245,560,245.3C586.7,245,613,235,640,202.7C666.7,171,693,117,720,112C746.7,107,773,149,800,154.7C826.7,160,853,128,880,138.7C906.7,149,933,203,960,234.7C986.7,267,1013,277,1040,261.3C1066.7,245,1093,203,1120,197.3C1146.7,192,1173,224,1200,208C1226.7,192,1253,128,1280,133.3C1306.7,139,1333,213,1360,256C1386.7,299,1413,309,1427,314.7L1440,320L1440,0L1426.7,0C1413.3,0,1387,0,1360,0C1333.3,0,1307,0,1280,0C1253.3,0,1227,0,1200,0C1173.3,0,1147,0,1120,0C1093.3,0,1067,0,1040,0C1013.3,0,987,0,960,0C933.3,0,907,0,880,0C853.3,0,827,0,800,0C773.3,0,747,0,720,0C693.3,0,667,0,640,0C613.3,0,587,0,560,0C533.3,0,507,0,480,0C453.3,0,427,0,400,0C373.3,0,347,0,320,0C293.3,0,267,0,240,0C213.3,0,187,0,160,0C133.3,0,107,0,80,0C53.3,0,27,0,13,0L0,0Z"></path>
            </svg>
            <div class="row text-center">
                <h1 class="display-4" id="judul2">Fitur</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <img src="/image/4-modified.png" class="img-fluid mx-auto" alt="">
                </div>
                <div class="col-md-6">
                    <ul class="list-group list-group-flush list1" id="card2">
                        <li class="list-group-item" id="card2"><img src="/image/check.png" alt="..." width="25" height="26">
                            <span class="mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa voluptatum quam neque?</span>
                        </li>
                        <li class="list-group-item" id="card2"><img src="/image/check.png" alt="..." width="25" height="26">
                            <span class="mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa voluptatum quam neque?</span>
                        </li>
                        <li class="list-group-item" id="card2"><img src="/image/check.png" alt="..." width="25" height="26">
                            <span class="mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa voluptatum quam neque?</span>
                        </li>
                        <li class="list-group-item" id="card2"><img src="/image/check.png" alt="..." width="25" height="26">
                            <span class="mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa voluptatum quam neque?</span>
                        </li>
                        <li class="list-group-item" id="card2"><img src="/image/check.png" alt="..." width="25" height="26">
                            <span class="mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa voluptatum quam neque?</span>
                        </li>
                        <li class="list-group-item" id="card2"><img src="/image/check.png" alt="..." width="25" height="26">
                            <span class="mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa voluptatum quam neque?</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <section id="testimoni">
        <div class="container-fluid" id="contact">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="wave1">
                <path fill="#deba9d" fill-opacity="1" d="M0,256L17.1,245.3C34.3,235,69,213,103,213.3C137.1,213,171,235,206,224C240,213,274,171,309,165.3C342.9,160,377,192,411,213.3C445.7,235,480,245,514,224C548.6,203,583,149,617,128C651.4,107,686,117,720,128C754.3,139,789,149,823,154.7C857.1,160,891,160,926,160C960,160,994,160,1029,176C1062.9,192,1097,224,1131,218.7C1165.7,213,1200,171,1234,160C1268.6,149,1303,171,1337,192C1371.4,213,1406,235,1423,245.3L1440,256L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z"></path>
            </svg>
            <div class="row justify-content-center text-center">
                <div class="col">
                    <h1 class="display-4" id="judul2">Testimoni</h1>
                </div>
            </div>
            <div class="swiper mySwiper ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide shadow " id="card3"><img src="/image/test1.png" alt=""></div>
                    <div class="swiper-slide shadow" id="card3"><img src="/image/test2.png" alt=""></div>
                    <div class="swiper-slide shadow" id="card3"><img src="/image/test1.png" alt=""></div>
                    <div class="swiper-slide shadow" id="card3"><img src="/image/test2.png" alt=""></div>
                    <div class="swiper-slide shadow" id="card3"><img src="/image/test1.png" alt=""></div>
                    <div class="swiper-slide shadow" id="card3"><img src="/image/test2.png" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>