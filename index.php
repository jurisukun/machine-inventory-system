<?php
require "./ajax/dbconfig.php";
if ($conn->connect_error) {
    echo '<script> alert("Connection to database failed")</script>';
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--modal-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script src="./scripts/suggestWhileTyping.js" defer> </script>
    <script src="./scripts/selectFromResults.js" defer> </script>
    <script src="./scripts/manualSearch.js" defer> </script>
    <script src="./scripts/back.js" defer> </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>

<body>
    <div class="container">
        <div class="nav-bar">
            <img src="Logoo.png" class="logo">
            <div class="info">
                <img src="telephone.png" class="imgg">
                <div class="description">
                    <h1>Telford Svc. Phils. Inc.</h1>
                    <p>Linares St. Gateway Business Park,</p>
                    <p>Special Export Processing Zone, Brgy. Javalera,</p>
                    <p>Gen. Trias, Cavite, 4107, Philippines</p>
                    <p>Tel: (63) (46) 433 0524 to 36</p>
                    <p>Fax: (63) (46) 433 0529 </p>
                </div>
            </div>

            <div class="info">
                <img src="calllog.png" class="imggg">
                <div class="description">
                    <h1>Another Contact for Machine</h1>
                    <p>+639 (Number)</p>
                    <p>(email).astip</p>
                </div>
            </div>
        </div>
        <div class="buttons">
            <button class="machine active-btn" id="mach1" value="1">HOME</button>
            <button class="machine" id="mach2" value="2">TAPE AND REEL</button>
            <button class="machine" id="mach3" value="3">BRANDING</button>
            <button class="machine" id="mach4" value="4">OVEN</button>
            <button class="machine" id="mach5" value="5">CONVERSION KITS</button>
        </div>
        <div class="slide-image">
            <div id="slider">
                <ul id="slideWrap">
                    <<<<<<< HEAD <li><img src="at128home.png"></li>
                        <li><img src="at468home.png"></li>
                        <li><img src="hexahome.png"></li>
                        <li><img src="g6lhome.png"></li>
                        <li><img src="hsihome.png"></li>
                        <li><img src="vitroxhome.png"></li>
                        =======
                        <li><img src="g6lhome.png"></li>
                        <li><img src="at468home.png"></li>
                        <li><img src="vitroxhome.png"></li>
                        <li><img src="at468.png"></li>
                        <li><img src="at468.jpg"></li>
                        <li><img src="at468.png"></li>
                        >>>>>>> 9798252692ba415f98f4f5a3723fd7c24a3438e9
                </ul>
                <a id="prev" href="#">&#8810;</a>
                <a id="next" href="#">&#8811;</a>
            </div>
        </div>
        <div class="content">
            <div class="side-buttons">
                <button class="side-btn" value="gravity" class="side-btn">GRAVITY</button>
                <button class="side-btn" value="tray" class="side-btn">TRAY</button>
                <button class="side-btn" value="turret" class="side-btn">TURRET</button>
            </div>
            <div class="summary" id="summary1">
            </div>
            <div class="summary" id="summary2">
            </div>

            <div class="display">
                <div class="top-bar">
                    <div class="search">
                        <input id="item_search" name="item_search" type="text">
                        <img id="search" src="search.png" name="search" type="submit">
                    </div>
                    <div id="suggestion-box" class="suggest"></div>
                    <!--<button id="search" name="search"> Search </button>-->
                    <div class="category">
                        <select id="type">
                            <option value="0" class="opt">All </option>
                            <option value="machine_id" class="opt">Machine ID</option>
                            <option value="description" class="opt">Description</option>
                            <option value="platform" class="opt">Platform</option>
                            <option value="manufacturer" class="opt">Manufacturer</option>
                            <option value="model_num" class="opt">Model Number </option>
                            <option value="serial_num" class="opt">Serial Number</option>
                            <option value="pkg" class="opt">PKG Config</option>
                            <option value="pl_owner" class="opt">PL Owner</option>
                            <option value="loc" class="opt">Location</option>
                            <option value="ownership" class="opt">Ownership </option>
                            <option value="area" class="opt">Area</option>
                            <option value="pm_interval" class="opt">PM Interval</option>
                            <option value="control_num" class="opt">Control Number</option>
                            <option value="status" class="opt">Status</option>
                            <option value="remarks" class="opt">Remarks </option>

                        </select>
                    </div>

                    <div class="add">
                        <button class="add-btn"> <a href="#ex1" rel="modal:open">ADD </a></button>
                    </div>

                    <!-- Modal HTML embedded directly into document -->
                    <div id="ex1" class="modal">
                        <h3 id="head">Add Machine</h3>
                        <form>
                            <p id="warn"></p>
                            <p>Machine ID: </p>
                            <input class="fields" id="add-machine-id" type="text" placeholder="Enter item name" required="">
                            <br>
                            <!-- <p>Item Type: </p>
                        <select id="add-type">
                                <option value="1">TYPE1</option>
                                <option value="2">TYPE2</option>
                                <option value="3">TYPE3</option>
                                <option value="4">TYPE4</option>
                                
                        </select> -->
                            <br>
                            <p> Description: </p>
                            <input class="fields" type="text" id="add-desc" required="">
                            <p> Platform: </p>
                            <input class="fields" type="text" id="add-platform" required="">
                            <p> Manufacturer: </p>
                            <input class="fields" type="text" id="add-manufac" required="">
                            <p> Model Number: </p>
                            <input class="fields" type="text" id="add-model-num" required="">
                            <p> Serial Number: </p>
                            <input class="fields" type="text" id="add-serial-num" required="">
                            <p> Date Qualified: </p>
                            <input type="date" id="add-date-quali" class="kahitano">
                            <p> Date Enrolled: </p>
                            <input class="fields" type="date" id="add-date-enroll" required="">
                            <p> PKG Config: </p>
                            <input type="text" id="add-pkg-conf" class="kahitano">
                            <p> PL Owner: </p>
                            <input type="text" id="add-pl-owner" class="kahitano">
                            <p> Location: </p>
                            <input class="fields" type="text" id="add-loc" required="">
                            <p> Ownership: </p>
                            <input class="fields" type="text" id="add-ownership" required="">
                            <p> Area: </p>
                            <input class="fields" type="text" id="add-area" required="">
                            <p> PM Interval: </p>
                            <input class="fields" type="text" id="add-pm-interval" required="">
                            <p> Control Number: </p>
                            <input class="fields" type="text" id="add-control-num" required="">
                            <p> PM Due Date: </p>
                            <input class="fields" type="date" id="add-due-date" required="">
                            <p> Date Done: </p>
                            <input class="fields" type="date" id="add-date-done" required="">
                            <p> Status: </p>
                            <input class="fields" type="text" id="add-status" required="">
                            <p> Remarks: </p>
                            <input class="fields" type="text" id="add-remarks" required="">
                            <br>
                            <button id="add-bttn" name="add-bttn"> Add </button>
                        </form>


                    </div>

                    <!-- Link to open the modal -->
                    <!-- <p><a href="#ex1" rel="modal:open">Open Modal</a></p> -->

                </div>
                <div class="list-result">

                </div>


            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                <p>Copyright ©️ 2022 | #ShaneC#DonB | Version 1</p>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                prevItem = "";
                prevType = "";
                $(".content").css("display", "none")

                //display slide-image
                $("#mach1").click(function() {
                    $("#mach2").removeClass("active-btn");
                    $(this).addClass('active-btn');

                    $(".content").hide();
                    $(".slide-image").show();
                })
                // var buttons = $('.buttons').find('.machine');
                // $(buttons).addClass('active-btn').siblings().removeClass('active-btn');
                // console.log(buttons);

                // $('#machine').each(function(index){
                //     $(this).addClass('active-btn');
                // })
                // hide suggestions on outside click
                $(document).mouseup(function(e) {
                    var container = $("#suggestion-box");

                    // if the target of the click isn't the container nor a descendant of the container
                    if (!container.is(e.target) && container.has(e.target).length === 0) {
                        container.empty();
                    }
                });
                //on type change
                $("#type").change(function() {
                    $(".list-result").empty();
                    //item=$("#item_search").val();
                    $("#suggestion-box").empty()
                    whileTyping();
                    manual();
                })


                //                



                $("#search").click(function() {
                    if ($("#item_search").val() != null && $("#item_search").val().trim() != "") {
                        let itm = $("#item_search").val();

                        //alert ('search');
                        $.ajax({
                            type: "POST",
                            url: "./ajax/search-item.php",
                            data: {
                                item: itm,
                                type: $("#type").val(),

                            },
                            success: function(data) {
                                //console.log(data);
                            }

                        })
                    }


                })












                //adding machine              
                $("#add-bttn").click(function() {
                    let comp = 0;
                    $(".fields").each(function() {
                        $(this).val() && $(this).val().trim() != '' ? $("#add-machine-id").val() : comp = 1;


                    })


                    if (comp === 1) {
                        alert("Please fill in all fields");
                        alert($("#add-date-enroll").val());
                    } else {
                        $.ajax({
                            url: "./ajax/add-machine.php",
                            method: "POST",
                            data: {
                                mach_id: $("#add-machine-id").val().trim(),
                                //mach_type: $("#add-type").val().trim(),
                                mach_desc: $("#add-desc").val().trim(),
                                mach_platform: $("#add-platform").val().trim(),
                                mach_manufact: $("#add-manufac").val().trim(),
                                mach_model: $("#add-model-num").val().trim(),
                                mach_serial: $("#add-serial-num").val().trim(),
                                mach_datequali: $("#add-date-quali").val().trim(),
                                mach_dateenroll: $("#add-date-enroll").val().trim(),
                                mach_pkg: $("#add-pkg-conf").val().trim(),
                                mach_plowner: $("#add-pl-owner").val().trim(),
                                mach_loc: $("#add-loc").val().trim(),
                                mach_ownership: $("#add-ownership").val().trim(),
                                mach_area: $("#add-area").val().trim(),
                                mach_pminterval: $("#add-pm-interval").val().trim(),
                                mach_controlnum: $("#add-control-num").val().trim(),
                                mach_due: $("#add-due-date").val().trim(),
                                mach_done: $("#add-date-done").val().trim(),
                                mach_status: $("#add-status").val().trim(),
                                mach_remarks: $("#add-remarks").val().trim(),

                            },
                            async: false,
                            success: function(result) {
                                if (result == "1") {
                                    location.reload;
                                    alert("Added succesfully");
                                } else if (result == "-1") {
                                    alert("Failed to add");
                                    //location.reload;

                                } else {
                                    alert(result);
                                }
                            },
                            error: function() {
                                alert("An error occured")
                            }

                        })
                    }

                })
                //whileTyping
                function addWhileTyping() {
                    document.getElementById("item_search").addEventListener("keyup", function() {
                        whileTyping()
                        $(document).on("keypress", function(e) {
                            if (e.which == 13) {
                                $("#item_search").off("keyup");
                                manual();
                                //document.getElementById("item_search").removeEventListener("keyup")
                                $("#suggestion-box").empty();
                                $("#item_search").blur();
                            }


                        })
                    })

                }

                $("#item_search").on("focus", addWhileTyping()
                    // whileTyping()
                    // $(document).on("keypress", function(e){
                    //     if (e.which==13){
                    //         $("#item_search").off();
                    //         manual();
                    //         //document.getElementById("item_search").removeEventListener("keyup")
                    //         $("#suggestion-box").empty();



                    //     }
                )


            })



            //manual searching
            $("#search").click(function() {
                manual()
            })

            // toggle content
            $("#mach2").click(function() {
                $("#mach1").removeClass("active-btn");
                $(this).addClass('active-btn');
                $(".slide-image").hide();
                $(".content").show();
            })
            // $("#mach1").click(function() {
            //     if ($(this).css("backgroundColor") == "rgb(0, 0, 255)") {
            //         $(this).css("backgroundColor", "rgb(81, 88, 86)");
            //     } else {
            //         $(this).css("backgroundColor", "#189ab4");
            //         //console.log($(this).css("backgroundColor"));
            //     }

            // })

            //side buttons function
            $(".side-buttons").find(".side-btn").each(function() {
                $(this).click(function() {
                    $(".side-btn").css("backgroundColor", "grey");
                    if ($(this).css("backgroundColor") == "rgb(128, 128, 128)") {
                        $(this).css("backgroundColor", "#189ab4");
                    } else {
                        $(this).css("backgroundColor", "grey");
                        //console.log($(this).css("backgroundColor"));
                    }
                    $("#suggestion-box").empty();
                    bttn = $(this).val();
                    prevType = bttn;
                    prevItem = "fromSideButtons"
                    //console.log(bttn);
                    $.ajax({
                        url: "./ajax/fromSideButtons.php",
                        method: "POST",
                        data: {
                            bttnValue: bttn
                        },
                        aync: false,
                        success: function(data) {
                            $(".list-result").html(data);

                            sel();

                        },
                        error: function() {
                            alert("Cannot complete request")
                        }

                    }).then(() => {
                            $.ajax({
                                url: "./ajax/displaySumm.php",
                                method: "GET",
                                data: {
                                    btnVal: bttn
                                },
                                dataType: "json",
                                success: function(data) {
                                    res = data;
                                    percent = (res[0] / res[1]) * 100;
                                    percent = Math.round(percent);
                                    percent2 = (100 - percent);
                                    console.log(data);
                                    const ins = $(".content").find(".summary")
                                    $(".summary").empty()
                                    $(ins[0]).append("<h1 class= sum1>High Risk</h1>")
                                    $(ins[1]).append("<h1 class=sum2>TNR Modernization</h1>")
                                    //const ins = $(".content").find(".summary")
                                    console.log(res);
                                    $(ins[1]).append("<div class='summ'><img class='pic' src='" + res[4] + "'  ></img><p class='perItem'>" + res[2] + "</p><p class='total' >" + (res[0]) +
                                        " machines</p><p class='perText' >" + percent + "% </p></div>")
                                    $(ins[0]).append("<div class='summ'><img class='pic' src='" + res[5] + "' ></img><p class='perItem'>" + res[3] + "</p>" + "<p class='total' >" + (res[1] - res[0]) + " machines</p>" + " <p class = 'perText' > " + percent2 + "% </p></div > ")
                                    // $(".summary").append(data[0]);
                                }

                            })
                        }

                    )




                })



            })

            var responsiveSlider = function() {

                var slider = document.getElementById("slider");
                var sliderWidth = slider.offsetWidth;
                var slideList = document.getElementById("slideWrap");
                var count = 1;
                var items = slideList.querySelectorAll("li").length;
                var prev = document.getElementById("prev");
                var next = document.getElementById("next");

                window.addEventListener('resize', function() {
                    sliderWidth = slider.offsetWidth;
                });
                var nextSlide = function() {
                    if (count < items) {
                        slideList.style.left = "-" + count * sliderWidth + "px";
                        count++;
                    } else if (count = items) {
                        slideList.style.left = "0px";
                        count = 1;
                    }
                };

                var prevSlide = function() {
                    if (count > 1) {
                        count = count - 2;
                        slideList.style.left = "-" + count * sliderWidth + "px";
                        count++;
                    } else if (count = 1) {
                        count = items - 1;
                        slideList.style.left = "-" + count * sliderWidth + "px";
                        count++;
                    }
                };
                next.addEventListener("click", function() {
                    nextSlide();
                });
                prev.addEventListener("click", function() {
                    prevSlide();
                });
                setInterval(function() {
                    nextSlide()
                }, 8000);

            };
            window.onload = function() {
                responsiveSlider();
            }
        </script>
</body>

</html>