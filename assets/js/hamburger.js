document.addEventListener('DOMContentLoaded', function () {
  
  const hamburgerBtn = document.querySelector('.hamburger-wrap');
  const navList = document.querySelector('.header-nav-list');
  const navItem = document.querySelector('.header-nav-item');

  // ボタン押下時にメニューを開閉
  if (hamburgerBtn && navList) {
    hamburgerBtn.addEventListener('click', () => {
      hamburgerBtn.classList.toggle('is-open');
      navList.classList.toggle('is-open');
    });
  }

  // ナビ選択時にもメニューを閉じる
  if (navItem) {
    navItem.addEventListener('click', () => {
      hamburgerBtn.classList.remove('is-open');
      navList.classList.remove('is-open');
    });
  }

  // 現在位置に応じて選択クラスを付け替え

  
});