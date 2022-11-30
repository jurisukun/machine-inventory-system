function sel() {
  $(".list-result")
    .find("div .search_result")
    .each(function () {
      $(this).click(function () {
        manual_searc_id = this.getAttribute("id");
        console.log("clicked");
        console.log($(this));
        $.ajax({
          url: ".//ajax/click-from-search.php",
          method: "POST",
          data: {
            clickedID: manual_searc_id,
          },
          async: false,
          success: function (data) {
            $(".list-result").html(data);
          },
          error: function () {
            alert("Cannot complete request");
          },
        }).then(
          //Go back function
          $("#back").click(function () {
            console.log(prevItem);
            console.log(prevType);
            backFunc();
          })
        );
      });
    });
}
