// 検索フォーム展開ボタン
const openSearchFieldButtons = document.getElementsByClassName("openSearchFieldButton");


// 検索フォームDOM
const searchfield = document.getElementById("searchfield");
const searchfieldclose = document.getElementById("searchfieldclose");


// 検索フォーム展開処理
for (let i = 0; i < openSearchFieldButtons.length; i++) {
  openSearchFieldButtons[i].onclick = function () {
    searchfield.classList.toggle("hidden");
  }  
}

searchfieldclose.onclick = function () {
  searchfield.classList.toggle("hidden");
}
