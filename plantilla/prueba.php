<?php
$titulo = 'prueba';
include_once '../plantilla/encabezado.php';
include_once './navbar.php';
?>



<style>
    .thumb {
        height: 300px;
        border: 1px solid #000;
        margin: 10px 5px 0 0;
    }
</style>


<div class="row">
    <form action="#">
        <div class="file-field input-field">
            <div class="btn">
                <span>File</span>
                <input type="file">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="file" id="files">
            </div>
        </div>
    </form>
</div>

<input type="file" id="files" name="files[]" />


<br />
<output id="list"></output>

<script>
    function archivo(evt) {
        var files = evt.target.files; // FileList object

        // Obtenemos la imagen del campo "file".
        for (var i = 0, f; f = files[i]; i++) {
            //Solo admitimos imágenes.
            if (!f.type.match('image.*')) {
                continue;
            }

            var reader = new FileReader();

            reader.onload = (function (theFile) {
                return function (e) {
                    // Insertamos la imagen
                    document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
                };
            })(f);

            reader.readAsDataURL(f);
        }
    }

    document.getElementById('files').addEventListener('change', archivo, false);
</script>

<?php
include_once './cierre.php';
?>

<!--

        <div class="row">
            <form action="#">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="file" id="files">
                    </div>
                </div>
            </form>
        </div>





        <br />
        <output id="list"></output>-->
