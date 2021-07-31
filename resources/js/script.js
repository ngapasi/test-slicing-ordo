$(document).ready(function () {
  $("#myTab a").on("click", function (event) {
    event.preventDefault();
    $(this).tab("show");
  });
  $(".dropdown-toggle").dropdown();
});
