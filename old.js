window.addEventListener('scroll', function() {
  var parent1 = document.querySelector('.parent1');
  var child = document.getElementById('child');
  var parent1Rect = parent1.getBoundingClientRect();
  var childHeight = child.offsetHeight;
  var viewportHeight = window.innerHeight;

  if (parent1Rect.top <= 0 && parent1Rect.bottom >= childHeight) {
      child.style.position = 'fixed';
      child.style.top = '0';
      child.style.bottom = 'auto';
  } else if (parent1Rect.bottom < childHeight) {
      child.style.position = 'absolute';
      child.style.top = 'auto';
      child.style.bottom = '0';
  } else {
      child.style.position = 'absolute';
      child.style.top = '0';
      child.style.bottom = 'auto';
  }
});
