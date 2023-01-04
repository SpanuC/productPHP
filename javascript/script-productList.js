var checkbox = $(".delete-checkbox"),
  submitButton = $("#MASS_DELETE");

checkbox.change(function () {
  submitButton.attr("disabled", checkbox.is(":not(:checked)"));
  if (checkbox.is(":not(:checked)")) {
    $("#MASS_DELETE").css("background-color", "#bf0603");
  } else {
    $("#MASS_DELETE").css("background-color", "#383838");
  }
});

// $(document).ready(function () {
//   var checkbox = $(".delete-checkbox");
//   checkbox.click(function () {
//     if ($(this).is(":checked")) {
//       $("#MASS_DELETE").removeAttr("disabled");
//       $("#MASS_DELETE").css("background-color", "#bf0603");
//     } else {
//       $("#MASS_DELETE").attr("disabled", "disabled");
//       $("#MASS_DELETE").css("background-color", "#383838");
//     }
//   });
// });
