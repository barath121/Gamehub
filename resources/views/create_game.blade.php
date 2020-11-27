<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"  href="{{ asset('/css/style.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <script src="https://use.fontawesome.com/38d6db4b58.js"></script>
</head>

<body>

    <div class="container p-lg-4 ">
        <div class="text-white box" style="">
            <div class="d-flex p-5 justify-content-center">
                <h3>Create a new project </h3>
            </div>
            <hr>
            <form id="form1">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row no-gutters justify-content-center ">
                    <div class="col-lg-8 pl-1 pr-1">
                        <div class="row no-gutters">
                            <p class="InputLabel">Title</p>
                        </div>
                        <div class="row no-gutters mb-3">
                            <input type="text" class="form-control" name="title" placeholder = "Title of your game">
                        </div>
                        <div class="row no-gutters">
                            <p class="InputLabel">Description</p>
                        </div>
                        <div class="row no-gutters mb-3">
                            <textarea class="form-control" type="description" placeholder = "something about your game" ></textarea>
                        </div>
                        <div class="row no-gutters">
                            <p class="InputLabel">Youtube Video link</p>
                        </div>
                        <div class="row no-gutters mb-3">
                            <input type="text" name="yt_video" placeholder="Enter the youtube video of your game"
                                class="form-control ">
                        </div>
                        <div class="row no-gutters">
                            <p class="InputLabel">Tags</p>
                        </div>
                        <div class="row no-gutters mb-3">
                            <div class="col">
                                <input style="border-radius: 0.25rem 0 0 0.25rem" list="tagList" type="text"
                                    class="form-control d-inline-block" id="tagListInp" name="tags"
                                    placeholder="Enter the tags" >
                                <datalist id="tagList">
                                    <option value="HORROR"></option>
                                    <option value="ADVENTURE"></option>
                                    <option value="ACTION"></option>
                                    <option value="SIMULATION"></option>
                                    <option value="ROLE PLAY"></option>
                                    <option value="OPEN WORLD"></option>
                                </datalist>
                            </div>
                            <div class="col-auto">
                                <button type="button" style="
                                              background-color: #e9ecef;
                                              /* border: 1px solid; */
                                              border-radius: 0 5px 5px 0;
                                              box-shadow: 0 0 0px 0;
                                              box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1);
                                            " class="btn d-inline-block">
                                    <i class="fa fa-arrow-right" onclick="addTags()"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col">
                                <div class="mb-3 w-100">
                                    <ul id="tags" style="border: 1px solid white;
                                   width: 100%;
                                   padding: 4px 2px;
                                   margin: 0;
                                   transition: 0.3s;
                                   min-height: 125px;"></ul>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters mb-3">
                            <button class="btn btn-dark"  type="button" onclick = "createGame()">SUBMIT</button>
                        </div>
                    </div>                    
                </div>
            </form>

        </div>
    </div>

</body>

<script>

    var tags = []
    var tags_string = "";

    var headers = {
        "Content-Type": "application/json",
        "Access-Control-Origin": "*"
    }

    function addTags() {

        let inp = document.getElementById("tagListInp").value;

        var TagParent = document.getElementById("tags"),
            tagchip = document.createElement("LI"),
            tagchipName = document.createElement("SPAN"),
            tagchipX = document.createElement("SPAN"),
            xicon = document.createElement("I");

        tagchip.className = "tagBox"
        tagchipName.innerHTML = inp;
        tagchipX.className = "ml-2"
        xicon.className = "fa fa-times"
        xicon.style.cursor = "pointer"

        if (tags.includes(inp) == false && inp != "") {
            tags.push(inp);
            tags_string=="" ? tags_string = inp:tags_string = tags_string+"," + inp;
            TagParent.appendChild(tagchip);
            tagchip.appendChild(tagchipName);
            tagchipName.appendChild(tagchipX);
            tagchipX.appendChild(xicon);
        }

        tagchipX.onclick = function () {
            tagchipName.parentElement.remove();
            var item = tags.indexOf(tagchipName.innerText);
            tags.splice(item, 1);
            console.log(tags)
        }

        document.getElementById("tagListInp").value = null;
        console.log(tags)

    }

    function createGame() {

        var data = new FormData(document.getElementById('form1'));
        data.delete("tags")
        data.set("tags",tags_string);
        console.log("data", data)
        
        fetch("http://localhost:8000/creategame", {
            method: "POST",
            headers: headers,
            body: JSON.stringify(data)
        })
            .then(function (response) {
                console.log("done")
                return response.json();
            })
            .then(function (data) {
                console.log(data)
            });
    }

</script>

</html>