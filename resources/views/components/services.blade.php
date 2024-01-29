<div class="container flex justify-center flex-col items-center mx-auto xl:mt-36 mt-16" >
    <div class="xl:w-2/3 ">
        <div class="grid grid-cols-6 gap-5">
            <div class="text-white xl:col-span-3 col-span-6 flex items-center">
                <img src="{{ asset('/images/figure1.png')}}" class="object-cover" alt="">
            </div>
            <div class="text-white xl:col-span-3 col-span-6 py-8">
                <div class="">
                    <span class="text-sm text-blue-500">Proyectos 100% basados en código</span>
                    <h1 class="my-5 text-3xl">Te ayudamos a generar el impacto <br>
                    que necesitas
                    </h1>
                    <span class="text-white opacity-50">Las ventajas que te  genera que tu proyecto sea empezado
                        bajo tecnologías de código o lenaguajes de programación es
                        la escalabilidad, no hay límites de crecimiento y nada te podrá
                        detener cuando desees agregar nuevos fixtures.</span>
                    {{-- <a href="" class="mt-5 underline block hover:text-blue-500 transition ease">Leer:  "¿Por qué es importante elegir la tecnología de acuerdo a tu negocio?"</a> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="xl:w-2/3  h-[50vh] xl:h-[90vh]  mt-48 gradient1 rounded-lg" id="services">
        <div class="w-full h-full flex justify-center items-center">
            <img class="w-[80%] h-2/3 object-contain rounded-lg" id="picture" src="{{ asset('/images/workcontact.png') }}" alt="">
        </div>
    </div>
    <div class="w-2/3">
        <div class="grid grid-cols-6 gap-5 text-white mt-5">
            <div class="xl:col-span-2 col-span-6  p-5 rounded-lg bg-gray-900 bg-opacity-50">
                <h2 class="text-1xl font-semibold mb-5">Diseño UI</h2>
                <span class="text-sm text-gray-100 text-opacity-55">Empezamos desarrollando el prototipo o mockup de su página o aplicación web con ayuda de herramientas de diseño como FIGMA.</span>
            </div>
            <div class="xl:col-span-2 col-span-6  p-5 rounded-lg bg-gray-900 bg-opacity-50">
                <h2 class="text-1xl font-semibold mb-5">Desarrollo y deploy del proyecto.</h2>
                <span class="text-sm text-gray-100 text-opacity-55">En esta segunda etapa es donde nos ponemos manos a la obra  a ejecutar el proyecto bajo tecnologías modernas.</span>
            </div>
            <div class="xl:col-span-2 col-span-6  p-5 rounded-lg bg-gray-900 bg-opacity-50">
                <h2 class="text-1xl font-semibold mb-5">Atención 24/7</h2>
                <span class="text-sm text-gray-100 text-opacity-55">Sabemos lo importante que es tener una presencia digital o canal tecnológico hoy en día, por ello damos soporte personalizado 24/7.</span>
            </div>
        </div>
    </div>
</div>

<script>
    // querySelector with id picture
    const picture = document.querySelector('#picture');
    const imagesArr = [
        "https://res.cloudinary.com/da0d2neas/image/upload/v1703911927/landing3.png",
        "https://res.cloudinary.com/da0d2neas/image/upload/v1703911919/landing.png",
        "https://res.cloudinary.com/da0d2neas/image/upload/v1706482901/simple.png",
        "https://res.cloudinary.com/da0d2neas/image/upload/v1706482901/jornadas.png",
        "https://res.cloudinary.com/da0d2neas/image/upload/v1703911923/lading2.png",
        "https://res.cloudinary.com/da0d2neas/image/upload/v1703911911/homesecperu-production.up.railway_1.png"
    ]

    // function to change the image every 3 seconds but add a transition or animation with smooth
    function changeImage() {
        let i = 0;
        setInterval(() => {
            picture.style.transition = "all 1s ease";
            picture.style.opacity = "0";
            setTimeout(() => {
                picture.src = imagesArr[i];
                picture.style.opacity = "1";
                i++;
                if (i == imagesArr.length) {
                    i = 0;
                }
            }, 1000);
        }, 3000);
    }


    // call the function
    changeImage();
</script>
