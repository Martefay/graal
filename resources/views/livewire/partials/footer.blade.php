<footer class="px-2">
    <div class="py-[50px] border-y border-[#FFDBA9]">
        <div class="container mx-auto">
            <div class="flex justify-center max-md:w-[100%]">
                <div style="position:relative;overflow:hidden;">
                    <a href="https://yandex.ru/maps/org/graal/1088271299/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Грааль</a><a href="https://yandex.ru/maps/38/volgograd/category/restaurant/184106394/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Ресторан в Волгограде</a>
                    <a href="https://yandex.ru/maps/38/volgograd/category/banquet_hall/184108315/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Банкетный зал в Волгограде</a>
                    <iframe class="max-md:w-[100%]" src="https://yandex.ru/map-widget/v1/org/graal/1088271299/?ll=44.534098%2C48.762365&z=15" width="1700" height="500" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="py-[15px]">
        <div class="container mx-auto">
            @foreach ($copyrights as $copyright)
            <span class="text-[14px]">{{ $copyright['text'] }}</span>
            @endforeach
        </div>
    </div>
</footer>
