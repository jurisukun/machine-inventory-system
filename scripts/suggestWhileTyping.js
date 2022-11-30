//sugestion while typing
function whileTyping() {
  $.ajax({
    type: "POST",
    url: ".//ajax/suggest-item.php",
    data: {
      keyword: $("#item_search").val(),
      type: $("#type").val(),
    },
    async: false,
    beforeSend: function () {
      $("#item_search").css(
        "background",
        "#FFF url(search.png) no-repeat 165px"
      );
    },
    success: function (data) {
      // $("#suggesstion-box").show();
      $("#suggestion-box").html(data);
      $("#item_search").css("background", "#FFF");
    },
  }).then(
    //select from suggestions
    $("#machine-list")
      .find("li")
      .each(function () {
        $(this).click(function () {
          $("#suggestion-box").empty();
          a = $(this).find("div");
          //atxt=$(a)[0].innerText;
          console.log(a);
          atxt = a[0].children[1].innerText;
          atype = $("#type").val();
          //console.log(this.innerText);
          //$("#item_search").val(atxt);
          // mac_id=this.getAttribute('id');
          //console.log(mac_id);

          //select from suggestions

          // $.ajax({
          //     url: "select-from-suggestion.php",
          //     method: "POST",
          //     data: {
          //         sel_mach:atxt,
          //         type: atype

          //     },
          //     async: false,
          //     success: function(data){

          //         $(".list-result").html(data);
          //     },
          //     error: function(){
          //         alert("An error occured")
          //     }
          // }).then(
          //     $("#back").click(()=>{
          //         back();
          //     })
          // )

          type = $("#type").val();
          item_to_search = $("#item_search").val().trim();
          //item_to_search !='' ? isEmpty=0 : isEmpty=1;
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
              sel();
            },
            error: function () {
              alert("An error occured");
            },
          }).then();

          //clicked on manual search result
          //sel()
        });
      })
  );
}
