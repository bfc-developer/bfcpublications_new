document.addEventListener("DOMContentLoaded", function () {
  // Get all menu items
  const menuItems = document.querySelectorAll(".menu-item");

  // Add click event listener to each menu item
  menuItems.forEach(function (item) {
      item.addEventListener("click", function () {
          // Remove active class from all menu items
          menuItems.forEach(function (item) {
              item.classList.remove("active");
          });

          // Add active class to the clicked menu item
          this.classList.add("active");
      });
  });
});
$(document).ready(function() {
  $("#publishing_start_form").validate({
      rules: {
          name: "required",
          email: "required",
          checkbox: "required",
          mobileno: {
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
// $("#publishing_start_form").validate({
//   rules: {
//     name: "required",
//     email: "required",

//     mobileno: {
//       required: true,
//       minlength: 10,
//       maxlength: 10,
//     },
//   },

//   // messages: {
//   //     name: "Name field is required.",
//   //     email: "Email field is required.",
//   //     mobileno: "Mobile field is required.",
//   // },
// });

$("#publishing_start_form").on("submit", function (e) {
  e.preventDefault();
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });
  $.ajax({
    url: host + "/save_data",
    type: "POST",
    data: new FormData(this),
    contentType: false,
    processData: false,
    success: function (msg) {
      if (msg.status_code == 200) {
        $("#publishing_start_form").trigger("reset");
        $("#lead_id").hide();
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
$("#payment_details_form").validate({
  rules: {
    name: "required",
    email: "required",
    checkbox: "required",
    mobile: {
      required: true,
      minlength: 10,
      maxlength: 10,
    },
  },
  messages: {
    checkbox: "Checkbox required",
  },
  errorPlacement: function(error, element) {
    if (element.attr("name") == "checkbox") {
        error.appendTo("#check_box_err_payment");
    } else {
        error.insertAfter(element);
    }
  }
});
// $("#payment_details_form").validate({
//   rules: {
//     name: "required",
//     email: "required",
//     mobile: {
//       required: true,
//       minlength: 10,
//       maxlength: 10,
//     },
//   },
//   // messages: {
//   //   name: "Name field is required.",
//   //   email: "Email field is required.",
//   //   mobile: "Mobile field is required.",
//   // },
// });

$("#payment_details_form").on("submit", function (e) {
  e.preventDefault();
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });
  $.ajax({
    url: host + "/save_payment_details",
    type: "POST",
    data: new FormData(this),
    contentType: false,
    processData: false,
    success: function (msg) {
      if (msg.status_code == 200) {
        $("#payment_details_form").trigger("reset");
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
