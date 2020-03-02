$("#sb").click(function () {
  if ($("#detail").val() && $("#onlineTime").val() && $("#company").val() && $("#contact").val()) {
    console.log($("#detail").val())
    $.ajax({
      type: "POST",
      url: "http://localhost:10002/submit-form",
      data: $('#cusform').serialize(),
      success: function (data) {
        alert(data)
        $("#detail").val("")
        $("#onlineTime").val("")
        $("#company").val("")
        $("#contact").val("")
      },
      error: function (err) {
        alert(err)
      }
    })
  } else {
    alert("请补充完整信息")
  }
})