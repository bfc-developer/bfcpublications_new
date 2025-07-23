// $("#contact_us_form").validate({
//   rules: {
//     inputname: "required",
//     inputemail: "required",
//     // subject: "required",
//     // message: "required",
//     inputnumber: {
//       required: true,
//       minlength: 10,
//       maxlength: 10,
//     },
//   },

//   // messages: {
//   //     name: "Name field is required.",
//   //     email: "Email field is required.",
//   //     mobile: "Mobile field is required.",
//   // },
// });
$(document).ready(function() {
  $("#contact_us_form").validate({
    rules: {
      inputname: "required",
      inputemail: "required",
      checkbox: "required",
      // subject: "required",
      // message: "required",
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
});
$("#contact_us_form").on("submit", function (e) {
  e.preventDefault();
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });
  $.ajax({
    url: host + "/send_contact_us_mail",
    type: "POST",
    data: new FormData(this),
    contentType: false,
    processData: false,
    success: function (msg) {
      if (msg.status_code == 200) {
        // toastr["success"](msg.message);
        $("#contact_us_form").trigger("reset");
        window.location.href = "/thank-you";
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
