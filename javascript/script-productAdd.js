$(document).ready(function () {
  $("#productType").change(load_new_content());
});

function load_new_content() {
  var value = $("#productType option:selected").val();

  $.post(
    "../classes/typeSwitcher.php",
    {
      Type: value,
    },
    function (data) {
      if (data == "Size") {
        $(".Type-1").css("display", "flex");
        $(".Type-2").hide();
        $(".Type-3").hide();
      } else if (data == "Dimension") {
        $(".Type-1").hide();
        $(".Type-2").css("display", "flex");
        $(".Type-3").hide();
      } else if (data == "Weight") {
        $(".Type-1").hide();
        $(".Type-2").hide();
        $(".Type-3").css("display", "flex");
      }
    }
  );
}
