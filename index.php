
<!DOCTYPE html>
<html>
<head>
	<title>BLACK pizza</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
  <div class="left">
    <h2>Котики</h2>
    <p>Здесь можно посмотреть на котиков</p>
    <div class="buttons">
      <button id="food-menu">Испуганный котик</button>
      <button id="drinks-menu">Три кота</button>
      <button id="takeaway-menu">Милый котик</button>
    </div>
  </div>
  <div class="right">
    <img src="https://avatars.mds.yandex.net/i?id=9534cf6576eaaebb9e18a630c914c8f17e9b52d2-9231706-images-thumbs&n=13" alt="Menu Image">
  </div>
</div>


</body>
</html>

<script>
const buttons = document.querySelectorAll('.buttons button');
const images = document.querySelector('.right img');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Сначала снимаем выделение со всех кнопок
    buttons.forEach(button => {
      button.classList.remove('active');
    });
    // Затем выделяем только нужную кнопку
    button.classList.add('active');
    // И меняем картинку в зависимости от нажатой кнопки
    if (button.id === 'food-menu') {
      images.src = 'https://avatars.mds.yandex.net/i?id=9534cf6576eaaebb9e18a630c914c8f17e9b52d2-9231706-images-thumbs&n=13';
    } else if (button.id === 'drinks-menu') {
      images.src = 'https://avatars.mds.yandex.net/i?id=436d1c98798760b39a649dc80ebc7f87977bd5b9-8750570-images-thumbs&n=13';
    } else if (button.id === 'takeaway-menu') {
      images.src = 'https://avatars.mds.yandex.net/i?id=7722d26fb40964f6b402a3d4e0e43f8cd0194863-8972142-images-thumbs&n=13';
    }
  });
});


</script>
