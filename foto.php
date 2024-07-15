<div class="content">
    <video autoplay="true" id="webcam"></video>
 
    <button type="button" onclick="foto()" class="btn">Tirar foto e salvar</button>
         
    <div class="image">
        <img src="person.svg" id="foto">
    </div>
    <form method="POST" action="imagem.php">
        <textarea name="image_base64" id="base64"></textarea>
             
        <button type="submit" class="btn">Enviar Imagem</button>
    </form>
</div>

document.addEventListener( 'DOMContentLoaded', function(){
    let video = document.querySelector("#webcam");
         
    if (navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({audio: false, video: {facingMode: 'user'}})
        .then( function(stream) {
            video.srcObject = stream;
        })
        .catch(function(error) {
            alert("Não foi possível iniciar a webcam.");
        });
    }
});