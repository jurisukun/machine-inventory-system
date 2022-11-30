function manual() {
  isEmpty = "";
  type = $("#type").val();
  item_to_search = $("#item_search").val().trim();
  item_to_search != "" ? (isEmpty = 0) : (isEmpty = 1);

  if (isEmpty == 1) {
    //alert ("Please type something to search");
  } else if (isEmpty === 0) {
    $("#suggestion-box").empty();
    $.ajax({
      url: ".//ajax/manual-search.php",
      method: "POST",
      data: {
        search_type: type,
        item: item_to_search,
      },
      async: false,
      success: function (data) {
        $(".list-result").html(data);
        prevItem = item_to_search;
        prevType = type;
        //alert(prevItem);
        sel();
      },
      error: function () {
        alert("An error occured");
      },
    })
      .then

      //clicked on manual search result
      //sel(),
      ();
  }
}
