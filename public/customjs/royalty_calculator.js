$("#noofpage").on("keyup", function (e) {
  var noofpage = $("#noofpage").val();
  if (noofpage < 49) {
    $("#error_no_of_page").html("Number of pages should be more than 49.");
    $("#production_cost").html(0);
    $("#recommended_cost").html(0);
  } else {
    $("#error_mrp").html("");
    $("#error_no_of_page").html("");
  }
});

function book_calculate() {
  var book_size = $("#book_size").val();
  var noofpage = $("#noofpage").val();
  var book_type = $("#book_type").val();
  if (noofpage < 49) {
    $("#error_no_of_page").html("Number of pages should be more than 49.");
  } else {
    $("#error_no_of_page").html("");
    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
    });
    $.ajax({
      url: "/royalty_calculate_data",
      type: "post",
      data: {
        book_size: book_size,
        noofpage: noofpage,
        book_type: book_type,
      },
      success: function (res) {
      // alert(res);
        var obj = JSON.parse(res);
     //   console.log(obj);
        $("#error_mrp").html("");
        $("#subsidisedPrice").html("₹" + obj.subsidisedPrice.toFixed(0));
        $("#production_cost").html(obj.production_cost.toFixed(0));
        $("#recommended_cost").html((Number(obj.production_cost.toFixed(0))*1.7).toFixed(0));
      },
    });
  }
}
function mrpcalculate() {
  var book_size = $("#book_size").val();
  var noofpage = $("#noofpage").val();
  var mrp = $("#mrp").val();
  var book_type = $("#book_type").val();
  var production_cost = $("#production_cost").html();
  var recommended_cost = $("#recommended_cost").html();
  if (recommended_cost == "0") {
    $("#error_mrp").html("you have to first calculate production cast");
  } else {
    if (mrp == "") {
      $("#error_mrp").html("MRP should be more than recommended price");
    } else if (Number(recommended_cost) <= Number(mrp)) {
      $("#error_mrp").html("");
      $.ajax({
        url: "/mrp_calculate_data",
        type: "post",
        data: {
          mrp: mrp,
          book_size: book_size,
          noofpage: noofpage,
          book_type: book_type,
          production_cost: production_cost,
          recommended_cost: recommended_cost,
        },
        success: function (res) {
          console.log(res);
          var obj = JSON.parse(res);
          $("#setbfcprice").html(obj.setbfcprice.toFixed(0));
          $("#setohterprice").html(obj.setohterprice.toFixed(0));
          $("#subsidisedPrice").html("₹" + obj.subsidisedPrice.toFixed(0));
        },
      });
    } else {
      $("#error_mrp").html("MRP should not be less than recommended price");
    }
  }
}
function isNumber(evt) {
  evt = evt ? evt : window.event;
  var charCode = evt.which ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    return false;
  }
  return true;
}
