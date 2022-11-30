function backFunc() {
  // prev=$(".list-result").find("div .select-from-click");
  // prevItem=prev[0].innerText;
  // console.log(prevItem);
  //  $.ajax();

  $.ajax({
    url: ".//ajax/manual-search.php",
    method: "POST",
    data: {
      search_type: prevType,
      item: prevItem,
    },
    async: false,
    success: function (data) {
      $(".list-result").html(data);
      // prevItem=item_to_search;
      // prevType=type;
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
