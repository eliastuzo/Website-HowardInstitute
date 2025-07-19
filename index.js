$(document).ready(function () {
    $(".home").click(function () {
        window.location.replace("https://selisar.com/portfolio/howard");
    });

    $(".banner-button").click(function () {
        window.location.replace("https://selisar.com/portfolio/howard/contacto.html");
    });

    $(".invite-button").click(function () {
        window.location.replace("https://selisar.com/portfolio/howard/contacto.html");
    });

     $(".nosotros-btn").click(function () {
        window.location.replace("https://selisar.com/portfolio/howard/ace.html");
    });

    $(".oferta-button").click(function () {
        window.location.replace("https://wa.link/i0euxk");
    });


  $("#contactForm").submit(function(e){
    e.preventDefault(); // prevent normal form submit

    $.ajax({
      url: "php/process_form.php",
      type: "POST",
      data: $(this).serialize(), // serialize form fields
      success: function(response){
        alert(response);
        $("#contactForm")[0].reset(); // reset form
      },
      error: function(xhr, status, error){
        console.error(error);
        alert("Ocurrió un error al enviar el formulario.");
      }
    });
  });
});
