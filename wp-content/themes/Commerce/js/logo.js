jQuery(document).ready(function($) {
   
// FORM1 add logo
var imageLoader = document.getElementById('filePhoto');
    imageLoader.addEventListener('change', handleImage, false);

function handleImage(e) {
    var reader = new FileReader();
    reader.onload = function (event) {
        
        $('.uploader img').attr('src', event.target.result);
        $('#logo_name').attr('value', event.target.result);
    }

    reader.readAsDataURL(e.target.files[0]);
}

// Перше фото
var imageLoader1 = document.getElementById('filePhoto1');
    imageLoader1.addEventListener('change', handleImage1, false);

function handleImage1(e) {
    if (filePhoto1.files && filePhoto1.files[0]) {
        var i = 1;
        $(filePhoto1.files).each(function () {
            var reader1 = new FileReader();
            reader1.readAsDataURL(this);
            reader1.onload = function (event) {
                
                $('#links').append("<a href='" + event.target.result + "'><img id='show_remove_" + i + "' class='view_images' src='" + event.target.result + "' ><img class='remove_image' src='http://commercia/wp-content/themes/Commerce/images/delete.png'></a>");
                // $('.first_photo img').attr('src', event.target.result);
                $('#send_image').append("<input name='photo_number_" + i + "' type='hidden' value='" + event.target.result + "'>");
                i++;  

           $('#show_remove_1').mouseover(
                function() {
                    $('#show_remove_1').next().removeClass('remove_image');
                });
            $('#show_remove_1').mouseout(
                function() {
                    $('#show_remove_1').next().addClass('remove_image');
                });
            
            }
        });
        
        if (parseInt($('#filePhoto1').get(0).files.length)>10){
                    alert("You can only upload a maximum of 10 photos");
                } 
    }
}

// Перше відео
// var videoLoader = document.getElementById('fileVideo1');
//     videoLoader.addEventListener('change', handleVideo, false);

// function handleVideo(e) {
//     if (fileVideo1.files && fileVideo1.files[0]) {
//         var i = 1;
//         $(fileVideo1.files).each(function () {
//         var reader4 = new FileReader();
//         reader4.readAsDataURL(this);
//         reader4.onload = function (event) {
        
//             // $('#video_src').attr('src',event.target.result);
//             $('#send_image').append("<input name='video_number_" + i + "' type='hidden' value='" + event.target.result + "'>");
//                 i++;
//         }

    
//         });
//     }
// }
// $('#utube_btn').click(function() {
//     var link = $('#utube_link').val();
//     $('#video_src').attr('src', link);
// });

// ІМЕНА КАРТИНОК ЩО ПЕРЕДАЮТЬСЯ У VIEW
function PhotosName() {
    for (i = 1; i < 11; i++) {
        $('#send_image input').attr('name', "photo_number_" + i);
    }
}

// var imageLoader2 = document.getElementById('filePhoto2');
//     imageLoader2.addEventListener('change', handleImage2, false);
// // Друге фото
// function handleImage2(e) {
//     var reader2 = new FileReader();
//     reader2.onload = function (event) {
//         $('#a_photo_2').attr('href',event.target.result);
//         $('.uploader_photo2 img').attr('src',event.target.result);
//     }

//     reader2.readAsDataURL(e.target.files[0]);
// }
// // Третє фото
// var imageLoader3 = document.getElementById('filePhoto3');
//     imageLoader3.addEventListener('change', handleImage3, false);

// function handleImage3(ev) {
//     var reader3 = new FileReader();
//     reader3.onload = function (event) {
//         $('#a_photo_3').attr('href',event.target.result);
//         $('.uploader_photo3 img').attr('src',event.target.result);
//     }

//     reader3.readAsDataURL(ev.target.files[0]);
// }
// // Четверте фото
// var imageLoader4 = document.getElementById('filePhoto4');
//     imageLoader4.addEventListener('change', handleImage4, false);

// function handleImage4(ev) {
//     var reader4 = new FileReader();
//     reader4.onload = function (event) {
        
//         $('.uploader_photo4 img').attr('src',event.target.result);
//     }

//     reader4.readAsDataURL(ev.target.files[0]);
// }


});

