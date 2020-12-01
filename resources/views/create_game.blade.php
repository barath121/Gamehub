@extends('layout')

@section('body')

<section id="newgame">
    <div class="d-flex justify-content-center p-3">
        <form class="rounded p-4 mt-5 mb-5"  style="background-color: #202020;">
            <div class="text-center">
              <h2 class="text-white Do">Create a New Project</h2>
            </div> <br>
            <div class="form-group">
              <label class="text-white small" for="title">Title</label>
              <input class="form-control" name="title" id="title" placeholder="Title" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label class="text-white small" for="title">Description</label>
                <textarea class="form-control" name="description" id="description" type="description" placeholder = "Description" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label class="text-white small" for="title">Youtube Video Link</label>
                <input type="text" class="form-control" name="yt_video" id="yt_video" placeholder="Enter the youtube video for your game" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <p class="text-white small">Tags</p>
            </div>
            <div class="row no-gutters form-group">
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
            
            <div class="form-group">
                <ul id="tags" style="border: 1px solid white; 
               width: 100%;
               padding: 10px 5px;
               margin: 0;
               transition: 0.3s;
               min-height: 125px;"></ul>
            </div>
            
            <div class="form-group">
                <button class="btn btn-dark w-100"  type="button" onclick = "createGame()">NEXT</button>
            </div>
          </form>
    </div>
</section>

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

        tagchip.className = "bg-success text-white rounded shadow small font-weight-bold"
        tagchip.style.width = "fit-content"
        tagchip.style.display = "inline"
        tagchip.style.padding = "5px"
        tagchip.style.margin = "5px"
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

        // var data = new FormData(document.getElementById('form1'));
        // data.delete("tags")
        // data.set("tags",tags_string);
        // console.log("data", data)
        var data = {};
        console.log(document.getElementById('title'))
        data.title = document.getElementById('title').value;
        data.description = document.getElementById('description').value;
        data.yt_video = document.getElementById('yt_video').value;
        data.tags = tags_string;
        console.log(data)
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
                window.location.href = `/uploadView?game_id=${data.gamedetails.id}`
            });
    }

</script>
@endsection


