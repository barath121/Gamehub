@extends('layout')

@section('body')
<div class="container p-lg-4 ">
    <div class="text-white box" style="">
        <div class="d-flex p-5  justify-content-center flex-column">
            <h3 class="row justify-content-center">STEP-2</h3>
            <h6 class="row justify-content-center text-muted">Upload game related files</h6>
        </div>
        <hr>
        <form id="uploadform" enctype="multipart/form-data" action="/uploadgame" method="POST" >
            <div class="row no-gutters justify-content-center ">
                <div class="col-lg-10 col-12 pl-1 pr-1">
                @if(request()->get('game_id'))
                    <input type="hidden" name="game_id" value={{request()->get('game_id') }}>
                @endif
                    <div class="row no-gutters">
                        <div class="col-lg-8 col-12">
                            <div class="row no-gutters">
                                <p class="InputLabel">Build Files</p>
                            </div>
                            <div class="row no-gutters mb-1">
                                <input type="file" name="build" multiple class="form-control-file">
                            </div>
                            <div class="row no-gutters mb-3">
                                <small class="text-muted">*Upload Build Files</small>
                            </div>
                            <div class="row no-gutters">
                                <p class="InputLabel">Template Files</p>
                            </div>
                            <div class="row no-gutters mb-1">
                                <input type="file" name="template" multiple class="form-control-file">
                            </div>
                            <div class="row no-gutters mb-3">
                                <small class="text-muted">*Upload Template Files</small>
                            </div>
                            <div class="row no-gutters">
                                <p class="InputLabel">Html files</p>
                            </div>
                            <div class="row no-gutters mb-1">
                                <input type="file" name="html" accept=".html" multiple class="form-control-file"> 
                            </div>
                            <div class="row no-gutters mb-3">
                                <small class="text-muted">*Upload HTML files</small>
                            </div>
                            <div class="row no-gutters">
                                <p class="InputLabel">Preview Images</p>
                            </div>
                            <div class="row no-gutters mb-1">
                                <input type="file" name="image" accept=".jpeg,.png,.jpg" multiple class="form-control-file">
                            </div>
                            <div class="row no-gutters mb-3">
                                <small class="text-muted">*Upload multiple images</small>
                            </div>
                            <div class="row no-gutters">
                                <p class="InputLabel">Game Icon</p>
                            </div>
                            <div class="row no-gutters mb-1">
                                <input type="file" name="icon" onchange='loadFile(event)' accept=".jpeg,.png,.jpg,.webp" class="form-control-file">
                            </div>
                            <div class="row no-gutters mb-3">
                                <small class="text-muted">*For vest results upload 640 x 854 px image</small>
                            </div>
                            <div class="row no-gutters mb-3">
                                <button class="btn btn-dark" type="submit" >SUBMIT</button>
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
<script>

    var loadFile = function (event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };

</script>
</script>

@endsection
