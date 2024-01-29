

<section id="indicators-carousel" class="h-[90vh] w-full  relative" data-carousel="static">

    <div class=" absolute top-10 left-0 right-0 flex justify-center text-center ">
        <div class="text-white  w-1/3 flex flex-col gap-5">
           <div class="">
             <h1 class="text-2xl xl:text-4xl font-semibold">Hola, Soy <span class="text-blue-500">Anthony S.</span>, desarrollador FullStack con +2 años de Experiencia creando productos digitales</h1>
            <span class="text-slate-300 xl:text-2xl">Mi trabajo ha impactado en el crecimiento de distintas empresas automatizando procesos y creando presencia digital</span>
           </div>
            <div class="">
                <button class="px-3 py-2 text-white font-semibold rounded-lg bg-blue-500 hover:bg-blue-700 transition ease">¡Empezemos!</button>
            </div>
        </div>
    </div>

    <img src="https://res.cloudinary.com/da0d2neas/image/upload/v1703917311/bg-blue.png" class="absolute w-full h-[350px] left-0 right-0 bottom-0" alt="">

    <div class=" absolute left-0 bottom-0 right-0 h-[400px]">
        <div class="w-full h-full relative">
            {{-- put 5 images --}}
            <div class="w-full absolute  h-full flex justify-center">
                <img class="h-[350px] xl:h-[430px] absolute bottom-0" src="https://res.cloudinary.com/da0d2neas/image/upload/v1703911927/landing3.png" id="image" alt="">
            </div>
        </div>
    </div>


     {{-- add code js --}}
    {{-- <script>
        const carousel = document.querySelector('[data-carousel="static"]')
        const imageContainer = document.querySelector('#image');
        const carouselImages = carousel.querySelectorAll('img')
        const images = [
            "https://res.cloudinary.com/da0d2neas/image/upload/v1703911927/landing3.png",
            "https://res.cloudinary.com/da0d2neas/image/upload/v1703911923/lading2.png",
            "https://res.cloudinary.com/da0d2neas/image/upload/v1703911935/portal.png",
            "https://res.cloudinary.com/da0d2neas/image/upload/v1703911915/hom6_1.png"
        ]
        // apply a foreach in a setInterval function
        let i = 0;
        setInterval(() => {
            if (i == images.length) {
                i = 0;
            }
            // added transition smoothing for each image
            imageContainer.style.transition = "all 1s ease-in-out"
            imageContainer.src = images[i]
            i++
        }, 2000);

    </script> --}}

</section>
