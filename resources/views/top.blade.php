<x-layout>
    <!-- 結婚式の写真 -->
    <div id="wedding_photos_slider" class="position-relative">
        <div id="main" class="h-100 w-100 position-absolute"></div>
        <div id="sub" class="h-100 w-100 position-absolute"></div>
    </div>

        <!-- 引き出物 -->
    <h1 class="text-center middle-heading">Regalos</h1>
    <div class="col-md-12 image3">
        <div class="text-center p-5 background-opacity fw-bold">
            <div class="font-shadow">
                <h1 class="mb-5">様へ</h1>
                <p class="font-shadow">
                    本日は遠方よりお越しくださり誠に有り難うございました。<br>
                    ささやかながら、私たちで引き出物を準備いたしました。
                </p>
                <p class="mb-5 font-shadow">
                    パラグアイの神聖な木「パロサント」で作られた品々です。<br><br>
                    ぜひこの機会に、私たちの第二の故郷、南米諸国の雰囲気を味わっていただけるとありがたいです。
                </p>
                <p class="w-75 text-end font-shadow">
                    Esposo y esposa
                </p>
            </div>
            <a href="catalogList" type="button" class="mt-5 btn btn-secondary btn-lg">引き出物をみる</a>
        </div>
    </div>

    <!-- コンテンツ -->
    <h1 class="text-center middle-heading">Contenidos</h1>
    <p class="text-center">引き出物を提供してくださったパラグアイブランド MIDORI と 私たちの紹介ページです</p>
    <div id="test" class="row w-100 m-0"></div>

    @vite([
        'resources/js/wedding_photos_slider.js', 
        'resources/js/image_button.js'
    ]);
</x-layout>