'use strict'; /* 厳格にエラーをチェック */

document.addEventListener('DOMContentLoaded', () => {
    // ドロップダウンメニューの設定
  const selected = document.querySelector(".select-selected");
  const items = document.querySelector(".select-items");
  const options = document.querySelectorAll(".select-items div");

  if (selected && items && options.length > 0) {
    selected.addEventListener("click", function () {
      items.classList.toggle("select-hide");
      selected.classList.toggle("select-arrow-active");
    });

  options.forEach(function (option) {
    option.addEventListener("click", function () {
      selected.innerHTML = this.innerHTML;
      items.classList.add("select-hide");
      selected.classList.remove("select-arrow-active");
      selected.setAttribute("data-value", this.getAttribute("data-value"));
    });
  });
  

  document.addEventListener("click", function (e) {
    if (!e.target.matches(".select-selected")) {
      items.classList.add("select-hide");
      selected.classList.remove("select-arrow-active");
    }
  });
}


// --ハンバーガー-------------------------------------
  const hamburger = document.querySelector('.hamburger');
  const menuContent = document.getElementById('menuContent');
  const hamburgerText = document.querySelector('.hamburger__text');
  const hamburgerClose = document.querySelector('.hamburger__close');
  // これらの行は、ページ内の特定の要素を選択して変数に格納します。
  // HTMLの.hamburger、#menuContent、.hamburger__text、.hamburger__close というセレクタを使用しています。

  hamburger.addEventListener('click', () => {
    // hamburger要素（ハンバーガーメニューのアイコン）にクリックイベントリスナーを追記しています。クリックされると、次に定義されている関数が実行されます。
    hamburger.classList.toggle('change');
    // クラスリストにchangeクラスが存在する場合はそれを削除し、存在しない場合は追加します。
    hamburgerText.style.display = hamburger.classList.contains('change')
      ? 'none' 
      : 'block';
    // hamburgerText（通常は「MENU」と表示されるテキスト）を非表示にします（display: none）。changeクラスがない場合（メニューが閉じている場合）、hamburgerTextを表示します（display: block）。
    hamburgerClose.style.display = hamburger.classList.contains('change')
      ? 'block' 
      : 'none';
    // hamburgerClose（通常は「CLOSE」と表示されるテキスト）を表示します（display: block）。changeクラスがない場合、hamburgerCloseを非表示にします（display: none）。

    // .メニューの表示とアニメーションの制御
    // changeクラスの有無に応じてmenuContentの表示を制御します。
    // changeクラスがある場合は、メニューを表示し、slideDownアニメーションを適用します。
    // ない場合は、slideUpアニメーションを適用後、500ミリ秒後にメニューを非表示にします。
    if (hamburger.classList.contains('change')) {
      menuContent.style.display = 'block';
      menuContent.style.animation = 'slideDown 0.5s ease-out forwards';
    } else {
      menuContent.style.animation = 'slideUp 0.5s ease-out forwards';
      setTimeout(() => {
        menuContent.style.display = 'none';
      }, 500); // アニメーションの時間に合わせて非表示にする
    }
  }); 


// スクロールアニメーション
const aboutImgs = document.querySelectorAll(".js-img");
let windowHeight = window.innerHeight;

window.addEventListener('scroll', () => {
  aboutImgs.forEach((img) => {
    let imgTop = img.getBoundingClientRect().top;
    if (imgTop - windowHeight < 0) {
      img.classList.add("move");
    } else {
      img.classList.remove("move");
    }
  });
});

// アコーディオン実装------------------------------------------------------------------

   const faqTitles = document.querySelectorAll("#FAQ .FAQ-pull__title");
   if (faqTitles.length > 0) {
     const firstFaqPull = document.querySelector("#FAQ .FAQ-pull");
     if (firstFaqPull) {
       const firstFaqContent = firstFaqPull.querySelector(".FAQ-pull__text");
       if (firstFaqContent) {
         firstFaqPull.classList.add("active");
         firstFaqPull.querySelector(".toggle__group").classList.add("active");
         firstFaqPull.style.maxHeight = `${
           getResponsiveMaxHeight() + firstFaqContent.scrollHeight + 30
         }px`; // 余裕を持たせる
       }
     }
  
     faqTitles.forEach((title) => {
       title.addEventListener("click", function () {
         const parent = title.parentElement;
         const content = parent.querySelector(".FAQ-pull__text");
         const wasActive = parent.classList.contains("active");
  
         document.querySelectorAll(".FAQ-pull").forEach((pull) => {
           pull.classList.remove("active");
           pull.style.maxHeight = `${getResponsiveMaxHeight()}px`;
           const toggleGroup = pull.querySelector(".toggle__group");
           if (toggleGroup) {
             toggleGroup.classList.remove("active");
           }
         });
  
         if (!wasActive) {
           parent.classList.add("active");
           const toggleGroup = title.querySelector(".toggle__group");
           if (toggleGroup) {
             toggleGroup.classList.add("active");
           }
           const totalHeight =
             getResponsiveMaxHeight() +
             (content ? content.scrollHeight : 0) +
             30;
           parent.style.maxHeight = `${totalHeight}px`;
         }
       });
     });
   }
  
   function getResponsiveMaxHeight() {
     return window.innerWidth <= 768 ? 103 : 70;
   }

// ----タブメニュ-------------------------------
const tabButtons = document.querySelectorAll('.tab-button');
const tabTexts = document.querySelectorAll('.tab-text');
const swiperContainers = document.querySelectorAll('.swiper-container');

// スワイパーのインスタンスを格納するオブジェクト
const swipers = {};

// スワイパーの初期化関数
function initSwiper(swiperContainer) {
  return new Swiper(swiperContainer, {
    autoplay: {
      delay: 0,
    },
    loop: true,
    speed: 5000,
    slidesPerView: 1.5,
    centeredSlides: false,
    preventInteractionOnTransition: true,
    observer: true,
    observeParents: true,
    spaceBetween: 24,
    breakpoints: {
      670: {
        slidesPerView: 2,
      },
      820: {
        slidesPerView: 2.5,
      },
      1025: {
        slidesPerView: 3.4,
      },
      1640: {
        slidesPerView: 4.5,
      },
    },
  });
}

  // 初期化時に全てのスワイパーを設定
  swiperContainers.forEach((container) => {
    const id = container.getAttribute("id");
    swipers[id] = initSwiper(container);
  });

  tabButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const targetId = this.getAttribute("data-id");

      // 全てのタブボタンのアクティブ状態をリセット
      tabButtons.forEach((btn) => btn.classList.remove("active"));

      // クリックされたタブボタンをアクティブにする
      this.classList.add("active");

      // 全てのタブコンテンツを非表示にする
      tabTexts.forEach((text) => text.classList.remove("active"));

      // 対象のタブコンテンツを表示する
      document.getElementById(`${targetId}-text`).classList.add("active");

      // 全てのSwiperコンテナを非表示にする
      swiperContainers.forEach((container) => {
        container.classList.remove("active");
        swipers[container.getAttribute("id")].destroy(true, true); // スワイパーを破棄
      });

      // 対象のSwiperコンテナを表示する
      const activeContainer = document.getElementById(targetId);
      activeContainer.classList.add("active");
      swipers[targetId] = initSwiper(activeContainer); // スワイパーを再初期化
    });
  });



  // --------フォームバリデーション-----------------------
  const form = document.querySelector("form");
  if (form) {
    form.onsubmit = function (event) {
      event.preventDefault(); // フォームのデフォルトの送信を防ぐ
      let valid = true;

    // フォームフィールドの取得
    const pulldown = document.querySelector('.pulldown .select-selected');
    const name = document.getElementById('name');
    const email = document.getElementById('address');
    const message = document.getElementById('message');

    // エラーメッセージのリセット
    document.querySelector('.error__msg--pulldown').textContent = '';
    document.querySelector('.error__msg--name').textContent = '';
    document.querySelector('.error__msg--email').textContent = '';
    document.querySelector('.error__msg--message').textContent = '';

    // エラースタイルのリセット
    pulldown.style.border = '1px solid #93C572';
    name.style.border = '1px solid #93C572';
    email.style.border = '1px solid #93C572';
    message.style.border = '1px solid #93C572';

    // バリデーション
    if (pulldown.textContent  === '選択してください') {
        valid = false;
        document.querySelector('.error__msg--pulldown').textContent = 
        '入力は必須です';
        pulldown.style.border = '1px solid red';
    }

    if (name.value.trim() === '') {
        valid = false;
        document.querySelector('.error__msg--name').textContent = 
        '入力は必須です';
        name.style.border = '1px solid red';
    }

    if (email.value.trim() === '' || !validateEmail(email.value)) {
        valid = false;
        document.querySelector('.error__msg--email').textContent = 
        '正しいメールアドレスを入力してください';
        email.style.border = '1px solid red';
    }

    if (message.value.trim() === '') {
        valid = false;
        document.querySelector('.error__msg--message').textContent = 
        '入力は必須です';
        message.style.border = '1px solid red';
    }

    if (valid) {
        // バリデーションが成功した場合にのみページ遷移を行う
        window.location.href = 'form-kakunin.html';
    }
  };
}



// --お知らせ一覧タブ-------------------

const tabsContainer = document.querySelector(".news-list__tab");
if (tabsContainer) {
  tabsContainer.scrollLeft = 0; // スクロールを左端に設定

const tabs = document.querySelectorAll(".news-list__tab--button");
const cards = document.querySelectorAll(".card-detail");

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      // タブのアクティブ状態をリセット
      tabs.forEach(t => t.classList.remove("active"));
      tab.classList.add("active");

      // スクロール位置をクリックしたタブに設定
      const offsetLeft = tab.offsetLeft;
      tabsContainer.scrollTo({
        left: offsetLeft,
        behavior: "smooth"
      });

      const category = tab.getAttribute("data-id");

      // カードの表示/非表示を切り替え
      cards.forEach(card => {
        if (category === "all" || card.id === category) {
          card.style.display = "flex";
        } else {
          card.style.display = "none";
        }
      });
    });
  });
  }
});
