
let buttons = [ 
    {
       "url"  : "", 
       "grid" : 6,
       "href" : "lp",
       "title" : "MIDORI について",
   },
   {
       "url"  : "", 
       "grid" : 6,
       "href" : "profile",
       "title" : "私たち について",
   },
];

class ImageButton
{
   constructor(elementsList) {
       this.elementsList = elementsList;
   }

   // 配列にある分のイメージリストを生成する
   printImageButtons() {
       //追加する親div取得
       let parent = document.getElementById("test"); //idを決めておく。
       this.elementsList.forEach(elements => {
           parent.append(this.generateImageButton(elements, elements["grid"]));
       });
   }

   //配列で取得したイメージボタン要素からボタンを生成する。
   generateImageButton(elements, grid) {
       //初期化
       let div1   = document.createElement("div");
       let div2   = document.createElement("div");
       let imgDiv = document.createElement("div");
       let coverA = document.createElement("a");

       //必要な属性値を追加
       div1.classList.add("col-md-" + grid, "col-12");
       div2.classList.add("p-2", "position-relative");

       //イメージボタンのスタイル追加
       imgDiv.style.backgroundImage    = "url('" + elements["url"] + "')";
       imgDiv.style.backgroundPosition = "center center";
       imgDiv.style.backgroundSize     = "cover";
       imgDiv.style.width              = "100%";
       imgDiv.classList.add("border", "border-3", "button-size");

       //aタグの属性値など追加
       coverA.classList.add("top-0", "start-0", "w-100", "h-100", "position-absolute");
       coverA.href = elements["href"];

       //各要素をdiv1に格納
       imgDiv = (elements["title"]) ? this.addTitleAndComment(imgDiv, elements) : imgDiv;

       //各要素に追加する
       div2.append(imgDiv);
       div2.append(coverA);
       div1.append(div2);

       return div1;
   }

   //タイトルとコメントをイメージボタンに追加する
   addTitleAndComment(imgDiv, elements) {
       let div   = document.createElement("div");
       let title = document.createElement("h1");
       let p     = document.createElement("p");     

       //属性値追加
       div.classList.add("p-5", "h-100", "d-flex", "justify-content-center", "align-items-center");
       title.classList.add("font-shadow", "text-center", "btn-lg", "btn-light","p-3", "background-opacity", "fw-bold");
       title.innerHTML = elements["title"];

       //要素追加
       div.append(title);
       
       //コメントの値がある場合は、追加する。
       if(elements["comment"]) {
           let commentDiv = document.createElement("div");
           let comment    = document.createElement("p"); 
           commentDiv.classList.add("p-3", "font-shadow");
           comment.innerHTML = elements["comment"];
           commentDiv.append(comment);
           div.append(commentDiv);
       }
       imgDiv.append(div);
       return imgDiv;
   }
}

//これを各ページで読み込めるようにしたい
//Node.js が１つの手らしいので、Qiitaなど読んで理解する。
const test = new ImageButton(buttons);
test.printImageButtons();