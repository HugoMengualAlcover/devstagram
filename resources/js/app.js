import './bootstrap';

import Dropzone from 'dropzone';
Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube tu imagen aquí',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Imagen',
    maxFiles: 1,
    uploadMultiple: false,

    init: function(){
        if(document.querySelector('[name="imagen"]').value.trim()){
            const imagenPublicada = {};
            imagenPublicada.size = 1234;
            imagenPublicada.name = document.querySelector('[name="imagen"]').value;
        
            this.options.addedfile.call(this, imagenPublicada);
            this.options.addedfile.call(this, imagenPublicada, '/upload/${imagenPublicada.name}');
        
            imagenPublicada.previewElement.classList.add(
                "dz-success",
                "dz-complete"
            );
        }
    },
})

dropzone.on('sending', function(fle, xhr, formData){
    console.log(formData);
});

dropzone.on('success', function(fle, response){
    document.querySelector('[name="imagen"]').value = response.imagen;
});

dropzone.on('error', function(fle, message){
    console.log(message);
});

dropzone.on('removedfile', function(){
    alert('Archvo eliminado');
    document.querySelector('[name="imagen"]').value = "";
});