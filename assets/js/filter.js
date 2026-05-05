document.addEventListener('DOMContentLoaded', function () {

  const filterBtn = document.querySelector('.filter-title-wrap');
  const filterList = document.querySelector('.filter-list');

  // ボタン押下時にメニューを開閉
  if (filterBtn && filterList) {
    filterBtn.addEventListener('click', () => {
      filterBtn.classList.toggle('is-open');
      filterList.classList.toggle('is-open');
    });
  }



});