const IMAGE_URL = "";

const imageList = [
 IMAGE_URL + "A4_Landscape_withoutPeople__otonoha-03.jpg",
 IMAGE_URL + "A4_Landscape__garden__extreme-long-shot-02.jpg",
 IMAGE_URL + "A4_Landscape__door__long-shot-01.jpg",
 IMAGE_URL + "A4_Landscape__rings__detail-shot-02.jpg",
 IMAGE_URL + "A4_Landscape__snowy-mt__long-shot-01.jpg",
 IMAGE_URL + "A4_Landscape_forest__bredge__long-shot-01.jpg",
 IMAGE_URL + "A4_Landscape_forest__sakura__medium-shot-06.jpg"
];

let index  = 0;
let next   = 1;
let parentDiv = document.getElementById("wedding_photos_slider");
let main      = document.getElementById("main");
let sub       = document.getElementById("sub");
main.style.animation = "fadeIn 2s linear forwards";
sub.style.animation  = "fadeIn 2s linear reverse forwards";

// 初期表示
main.style.backgroundImage = "url(" + imageList[index] + ")";
parentDiv.append(main);

const fadeInImages = () => {
    main.style.backgroundImage = "url(" + imageList[next] + ")";
    sub.style.backgroundImage  = "url(" + imageList[index] + ")";
    parentDiv.appendChild(main);
    parentDiv.appendChild(sub);

    // 現在表示されている画像 と 次の画像 の index を指定
    index = (index == imageList.length-1) ? 0 : index+1;
    next  = (index == imageList.length-1) ? 0 : index+1;
};

setInterval(fadeInImages, 5000);