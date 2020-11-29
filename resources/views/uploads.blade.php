<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
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
            <div class="d-flex p-5  justify-content-center flex-column">
                <h3 class="row justify-content-center">STEP-2</h3>
                <h6 class="row justify-content-center text-muted">Upload game related files</h6>
            </div>
            <hr>
            <form id="form1">
                <div class="row no-gutters justify-content-center ">
                    <div class="col-lg-10 col-12 pl-1 pr-1">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-12">
                                <div class="row no-gutters">
                                    <p class="InputLabel">Build Files</p>
                                </div>
                                <div class="row no-gutters mb-1">
                                    <input type="file" name="Build" multiple>
                                </div>
                                <div class="row no-gutters mb-3">
                                    <small class="text-muted">*Upload Build Files</small>
                                </div>
                                <div class="row no-gutters">
                                    <p class="InputLabel">Template Files</p>
                                </div>
                                <div class="row no-gutters mb-1">
                                    <input type="file" name="template" multiple>
                                </div>
                                <div class="row no-gutters mb-3">
                                    <small class="text-muted">*Upload Template Files</small>
                                </div>
                                <div class="row no-gutters">
                                    <p class="InputLabel">Html files</p>
                                </div>
                                <div class="row no-gutters mb-1">
                                    <input type="file" name="html" accept=".html" multiple>
                                </div>
                                <div class="row no-gutters mb-3">
                                    <small class="text-muted">*Upload HTML files</small>
                                </div>
                                <div class="row no-gutters">
                                    <p class="InputLabel">Preview Images</p>
                                </div>
                                <div class="row no-gutters mb-1">
                                    <input type="file" name="image" accept=".jpeg,.png,.jpg" multiple>
                                </div>
                                <div class="row no-gutters mb-3">
                                    <small class="text-muted">*Upload multiple images</small>
                                </div>
                                <div class="row no-gutters">
                                    <p class="InputLabel">Game Icon</p>
                                </div>
                                <div class="row no-gutters mb-1">
                                    <input type="file" name="icon" onchange='loadFile(event)' accept=".jpeg,.png,.jpg">
                                </div>
                                <div class="row no-gutters mb-3">
                                    <small class="text-muted">*For vest results upload 640 x 854 px image</small>
                                </div>
                                <div class="row no-gutters mb-3">
                                    <button class="btn btn-dark" type="button">SUBMIT</button>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="row no-gutters">
                                    <p class="InputLabel">Game Cover preview</p>
                                </div>
                                <img id="output" class="border rounded p-1" src="{{ asset('/images/no-preview-available.png') }}"
                                    width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

</body>

<script>

    var loadFile = function (event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };

</script>

</html>