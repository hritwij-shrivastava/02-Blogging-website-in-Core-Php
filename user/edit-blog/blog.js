CKEDITOR.disableAutoInline = true;

CKEDITOR.inline('area', {
sharedSpaces: {
    top: 'top',
    bottom: 'bottom'
}
});

$(document).ready( function(){

    $('#upnav').on('click' ,function(){
        $('.mynav').addClass('hideall');
        $('#downnav').addClass('showdown');
        $('#upnav').addClass('hideup');
        $('#top').addClass('sticky-top');
    });
    $('#downnav').on('click' ,function(){
        $('.mynav').removeClass('hideall');
        $('#upnav').removeClass('hideup');
        $('#downnav').removeClass('showdown');
        $('#top').removeClass('sticky-top');
    });
    $("#input-h").focusin(function() {
        $( "#title-h" ).addClass( "newone" );
    }).focusout(function () {
        $( "#title-h" ).removeClass( "newone" );
    });
    $('#area').keyup(function (){
        $.ajax({
            url: "../../resources/config_files/publish.php",
            type: "POST",
            data: {"title": $("#input-h").val(),"div":CKEDITOR.instances.area.getData(),"status":0},
            success: function (data) {
                console.log(CKEDITOR.instances.area.getData())
            }

        }); 
    });
    $('#input-h').keyup(function (){
        $.ajax({
            url: "../../resources/config_files/publish.php",
            type: "POST",
            data: {"title": $("#input-h").val(),"div":CKEDITOR.instances.area.getData(),"status":0},
            success: function (data) {
                console.log(CKEDITOR.instances.area.getData())
            }

        }); 
    });
    $('#publish').on('click',function (){
        $.ajax({
            url: "../../resources/config_files/publish.php",
            type: "POST",
            data: {"title": $("#input-h").val(),"div":CKEDITOR.instances.area.getData(),"status":1},
            success: function (data) {
                console.log(CKEDITOR.instances.area.getData())
            }

        }); 
    });
    CKEDITOR.on('dialogDefinition', function(e){
        dialogName = e.data.name;
        dialogDefinition = e.data.definition;
        //console.log(dialogName);
        //console.log(dialogDefinition);
        if(dialogName == 'image') {

            var dialog = CKEDITOR.dialog.getCurrent();

            var uploadTab = dialogDefinition.getContents('Upload');
            var uploadButton = uploadTab.get('uploadButton');
            console.log('uploadButton', uploadButton);

            uploadButton['onClick'] = function(evt){
                alert("Hello! I am an alert box!!");
            }



            dialogDefinition.dialog.resize( 300, 200 );
            dialogDefinition.resizable = CKEDITOR.DIALOG_RESIZE_NONE;
            dialogDefinition.removeContents('Link');
            dialogDefinition.removeContents('advanced');
            var infocontent = dialogDefinition.getContents('info');
            infocontent.remove('txtHSpace');
            infocontent.remove('txtVSpace');
            infocontent.remove('txtWidth');
            infocontent.remove('txtHeight');
            infocontent.remove('txtBorder');
            infocontent.remove('cmbAlign');
            infocontent.remove('ratioLock');
            infocontent.remove('htmlPreview');
            infocontent.remove('txtAlt');
        }
    })
});
function goBack() {
    window.history.back();
}
function mypost(){
    window.open("../post/post.php","_self")
}