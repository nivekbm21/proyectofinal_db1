$(document).ready(
  /* se ejecuta hasta que este completo */
  function () {
    /* efectos de como aparece */
    $('.navul li').hover(
	function () { //aparece en hover
        $('ul', this).fadeIn();
      },
      function () { //desaparece en hover
        $('ul', this).fadeOut();
      }
    );
  }
);
