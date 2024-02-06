const IMAGE_URL = "";
let buttonList = [ 
    {
       "url"   : IMAGE_URL + "accesorios_b.jpg", 
       "grid"  : 4,
       "href"  : "profile",
       "title" : "アクセサリーセットB",
       "comment": "神秘の香りのアクセサリー",
       "id"   : 1,
   },
   {
       "url"  : IMAGE_URL + "aroma.jpg", 
       "grid" : 4,
       "href" : "profile",
       "title" : "Aromaセット",
       "comment": "聖なる深緑の香りを堪能",
       "id"   : 2,
   },
   {
       "url"  : IMAGE_URL + "cocina_a.jpg", 
       "grid" : 4,
       "href" : "profile",
       "title" : "CocinaセットA",
       "comment": "丁寧な食事、丁寧な手仕事",
       "id"   : 3,
   },
   {
       "url"  : IMAGE_URL + "cocina_b.jpg", 
       "grid" : 4,
       "href" : "profile",
       "title" : "CocinaセットB",
       "comment": "晩酌のお供に。乾杯",
       "id"   : 4,
   },
   {
       "url"  : IMAGE_URL + "accessories_a.jpeg", 
       "grid" : 4,
       "href" : "profile",
       "title" : "アクセサリーセットA",
       "comment": "さり気ないアクセントにいかが？",
       "id"   : 5,
   },
   {
       "url"  : IMAGE_URL + "grooming.jpeg", 
       "grid" : 4,
       "href" : "profile",
       "title" : "身だしなみセット",
       "comment": "毎日の仕事に心強い味方",
       "id"   : 6,
   },
   {
       "url"  : IMAGE_URL + "office.jpg", 
       "grid" : 4,
       "href" : "profile",
       "title" : "オフィス用品セット",
       "comment": "大人のデスクに香りのアクセント",
       "id"   : 7,
   },

];

class CardButton
{
    constructor(elementsList){
        this.elementsList = elementsList;
    }

    printCardButtons(){
        let parent = document.getElementById("catalog-list");
        this.elementsList.forEach(elements => {
            parent.append(this.generateCardButton(elements))
        });
        
        return parent;
    }

    generateCardButton(elements) {
        let parent   = document.createElement("div");
        let div      = document.createElement("div");
        let img      = document.createElement("img");
        let cardBody = document.createElement("div");
        let a        = document.createElement("a");

        //属性値追加
        parent.classList.add("col-md-3", "col-12", "p-2");
        div.classList.add("card", "position-relative");
        img.src = elements["url"];
        img.classList.add("card-img-top");
        cardBody.classList.add("card-body");
        cardBody.innerHTML = "<h5>" + elements["title"] + "</h5>" + "<p class='text-secondary'>" + elements["comment"] + "</p>";
        a.classList.add("top-0", "start-0", "w-100", "h-100", "position-absolute");
        a.href = "product?product_id=" + elements["id"];

        //要素追加
        div.append(img);
        div.append(cardBody);
        div.append(a);
        parent.append(div);
        return parent;
    }
}

const cardButton = new CardButton(buttonList);
cardButton.printCardButtons();