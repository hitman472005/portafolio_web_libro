const card = document.querySelector('.card');

card.addEventListener('mouseover', function() {
  card.classList.add('card-expand');
});

card.addEventListener('mouseout', function() {
  card.classList.remove('card-expand');
});
