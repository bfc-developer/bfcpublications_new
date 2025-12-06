
// $(document).ready(function() {
//   $("#contact_us_form").validate({
//     rules: {
//       inputname: "required",
//       inputemail: "required",
//       checkbox: "required",
//       inputnumber: {
//         required: true,
//         minlength: 10,
//         maxlength: 10,
//       },
//     },

//     messages: {
//       checkbox: "Checkbox required.",
//     },
//     errorPlacement: function(error, element) {
//       if (element.attr("name") == "checkbox") {
//           error.appendTo("#check_box_err");
//       } else {
//           error.insertAfter(element);
//       }
//     }
//   });
// });
// $("#contact_us_form").on("submit", function (e) {
//   e.preventDefault();
//   $.ajaxSetup({
//     headers: {
//       "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//     },
//   });
//   $.ajax({
//     url: host + "/send_contact_us_mail",
//     type: "POST",
//     data: new FormData(this),
//     contentType: false,
//     processData: false,
//     success: function (msg) {
//       if (msg.status_code == 200) {
//         // toastr["success"](msg.message);
//         $("#contact_us_form").trigger("reset");
//         window.location.href = "/thank-you";
//       } else if (msg.status_code == 301) {
//         $.each(msg.message, function (k, v) {
//           toastr["error"](v);
//         });
//       } else {
//         console.log(msg.message);
//       }
//     },
//   });
// });
$(document).ready(function () {
  // 🚫 Prevent space as first character
  $("input, textarea").on("keypress", function (e) {
    if (this.value.length === 0 && e.which === 32) e.preventDefault();
  });
$('input[name="inputnumber"]').on("input", function () {
    // allow only digits & limit to 10 digits
    this.value = this.value.replace(/\D/g, "").substr(0, 10);

    let mobile = this.value;

    // Live validity check
    if (mobile.length === 10 && /^[6-9]\d{9}$/.test(mobile)) {
        $(this).removeClass("is-invalid").addClass("is-valid");
    } else {
        $(this).removeClass("is-valid").addClass("is-invalid");
    }
});


// 🔹 Add custom phone validation for jQuery validate
$.validator.addMethod("indianMobile", function (value, element) {
    return this.optional(element) || /^[6-9]\d{9}$/.test(value);
}, "Enter a valid 10-digit Indian phone number starting with 6,7,8 or 9.");


  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });

  // ✅ Form validation
  $("#contact_us_form").validate({
      rules: {
        inputname: "required",
        inputemail: "required",
        checkbox: "required",
        inputnumber: {
          required: true,
          minlength: 10,
          maxlength: 10,
          indianMobile: true,
        },
      },
    messages: {
      checkbox: "Checkbox required.",
    },
    errorPlacement: function (error, element) {
      if (element.attr("name") == "checkbox") {
        error.appendTo("#check_box_err");
      } else {
        error.insertAfter(element);
      }
    },

    submitHandler: function (form) {
      $("#formError").addClass("d-none").html("");

      $.ajax({
        url: host + "/send_contact_us_mail",
        type: "POST",
        data: new FormData(form),
        contentType: false,
        processData: false,
        success: function (res) {
          // ✅ Success
          if (res.status_code == 200) {
            $(form).trigger("reset");
            window.location.href = "/thank-you";
          }

          // ⚠️ Validation/logic errors (301)
          else if (res.status_code == 301) {
            let messageText = Array.isArray(res.message)
              ? res.message.join("<br>")
              : res.message;

            $("#formError")
              .removeClass("d-none alert-success")
              .addClass("alert alert-danger")
              .html(messageText)
              .fadeIn();

            // ⏳ Auto-hide + reset after 15 seconds
            setTimeout(() => {
              $("#formError").fadeOut("slow", function () {
                $(this).addClass("d-none").show().html("");
                $("#contact_us_form").trigger("reset");
              });
            }, 15000);
          }
        },

        error: function (xhr) {
          // ⛔ Too many attempts
          if (xhr.status === 429) {
            $("#formError")
              .removeClass("d-none alert-success")
              .addClass("alert alert-danger")
              .html(
                "Too many attempts! Please wait a minute before trying again."
              )
              .fadeIn();

            // ⏳ Auto-hide + clear form after 15 seconds
            setTimeout(() => {
              $("#formError").fadeOut("slow", function () {
                $(this).addClass("d-none").show().html("");
                $("#contact_us_form").trigger("reset");
              });
            }, 15000);
          } else {
            console.warn("Mail sending failed or SMTP issue.");
          }
        },
      });

      return false;
    },
  });
});

$("#career_page_form").validate({
  rules: {
    inputname: "required",
    inputEmail: "required",
    inputPost: "required",
    file: "required",
    checkbox: "required",
    inputnumber: {
      required: true,
      minlength: 10,
      maxlength: 10,
    },
  },
  messages: {
    checkbox: "Checkbox required.",
  },
  errorPlacement: function(error, element) {
    if (element.attr("name") == "checkbox") {
        error.appendTo("#check_box_err");
    } else {
        error.insertAfter(element);
    }
  }
});

$("#career_page_form").on("submit", function (e) {
  e.preventDefault();
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });
  $.ajax({
    url: host + "/send_mail_hr_user",
    type: "POST",
    data: new FormData(this),
    contentType: false,
    processData: false,
    success: function (msg) {
      if (msg.status_code == 200) {
        // toastr["success"](msg.message);
        window.location.href = "/thank-you";
        $("#career_page_form").trigger("reset");
      } else if (msg.status_code == 301) {
        $.each(msg.message, function (k, v) {
          // toastr["error"](v);
        });
      } else {
        console.log(msg.message);
      }
    },
  });
});
