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
})

dropzone.on('sending', function(fle, xhr, formData){
    
});

dropzone.on('succes', function(fle, response){
    
});

dropzone.on('error', function(fle, message){
    
});

dropzone.on('removedfile', function(){
    
});