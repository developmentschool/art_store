// Показать меню при наведении
$(function($) {
	$('.header-vertical-menu').hover(function() {
		$(this).find('.dropdown-menu').addClass('show');
	}, function() {
		$(this).find('.dropdown-menu').removeClass('show');
	});
});


// Выбор количества
(function() {
  var quantity = document.querySelectorAll('._js_quantity');
  
  Array.prototype.forEach.call(quantity, function (container) {
    var input = container.querySelector('._js_input');
    input.addEventListener('change', fixInputValue);

    var subtractBut = container.querySelector('._js_minus');
    var addBut = container.querySelector('._js_plus');

    subtractBut.relatedInput = input;
    subtractBut.addEventListener('click', subtractOne);

    addBut.relatedInput = input;
    addBut.addEventListener('click', addOne);
  });

  function fixInputValue() {
    var min = this.dataset.min || 1;
    var max = this.dataset.max || Infinity;
    var val = +this.value;

    if (isNaN(val) || val < min) {
      this.value = min;
    } else if (val > max) {
      this.value = max
    }
  }

  function subtractOne() {
    this.relatedInput.value -= 1;
    fixInputValue.call(this.relatedInput);
  }

  function addOne() {
    this.relatedInput.value = +this.relatedInput.value + 1;
    fixInputValue.call(this.relatedInput);
  }
})();