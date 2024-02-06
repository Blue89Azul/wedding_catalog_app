<x-layout>
    <h1 class="middle-heading text-center">Profiles</h1>
    <div>
        <div class="d-md-flex justify-content-md-between bg-light">
        <div class="col-sm-6 col-12">
            <div class="h-100 w-100">
                <img class="h-100 w-100" src="" alt="">
            </div>
        </div>
            <div class="col-12 col-md-6 p-5">
                <div>
                    <h3>NOMBRE</h3>
                    <p>EDAD</p>
                    <p>DE DONDE</p>
                    <span>LOS QUE MEGUSTAN</span>
                    <ul>
                        <li></li>
                    </ul>
                    <span>CARRERAS</span>
                    <ul>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-md-flex justify-content-md-between bg-light">
        <div class="col-sm-6 mobile-image col-12">
            <div class="h-100 w-100">
                <img class="h-100 w-100" src="" alt="">
            </div>
        </div>
            <div class="col-12 col-md-6 p-5">
                <div>
                    <h3>ESPOSA</h3>
                    <p>EDAD</p>
                    <p>DE DONDE</p>
                    <span>LOS QUE ME GUSTAN</span>
                    <ul>
                        <li></li>
                    </ul>
                    <span>CARRERAS</span>
                    <ul>
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 pc-image col-12">
            <div class="h-100 w-100">
                <img class="h-100 w-100" src="" alt="">
            </div>
        </div>
        </div>
    </div>

    <h1 class="middle-heading text-center">Q & A</h1>
    @include('components.elements.chat');
    @vite(['resources/js/card_button.js']);
</x-layout>