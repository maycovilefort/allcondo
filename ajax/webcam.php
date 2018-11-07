<div class="row">
    <div class="col-md-7">
        <div id="webcam"></div>

        <p><button class="btn btn-info btn-lg btn-block" id="btn1" onclick="base64_tofield()"><i class="fa fa-camera"></i> Capturar</button></p>

        <p><img style="margin-right: 5px" src="img/webcamlogo.png" /><select id="cameraNames" size="1" onChange="changeCamera()" style="width:295px;font-size:12px;height:25px;"></select></p>

    </div>
</div>

<script language="JavaScript">
    $(document).ready(function () {
        $("#webcam").scriptcam({
            showMicrophoneErrors: false,
            onError: onError,
            cornerRadius: 20,
            cornerColor: 'ffffff',
            onWebcamReady: onWebcamReady,
            onPictureAsBase64: base64_tofield_and_image
        });
    });

    function base64_tofield() {
        $('.content').find('#fotoBase64').val($.scriptcam.getFrameAsBase64());
        $('#mor_foto').attr("src", "data:image/png;base64," + $.scriptcam.getFrameAsBase64());
    }

    function base64_tofield_and_image(b64) {
        $('#formfield').val(b64);
        $('#image').attr("src", "data:image/png;base64," + b64);
    }

    function changeCamera() {
        $.scriptcam.changeCamera($('#cameraNames').val());
    }

    function onError(errorId, errorMsg) {
        $("#btn1").attr("disabled", true);
        $("#btn2").attr("disabled", true);
        alert(errorMsg);
    }

    function onWebcamReady(cameraNames, camera, microphoneNames, microphone, volume) {
        $.each(cameraNames, function (index, text) {
            $('#cameraNames').append($('<option></option>').val(index).html(text));
        });
        $('#cameraNames').val(camera);
    }
</script>