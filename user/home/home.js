
$(document).ready(function(){
    $('.writespace').scroll(function() {
        
        if( $('.writespace').scrollTop() + $('.writespace').innerHeight() == $('.writespace').get(0).scrollHeight )  {
            
        }
     //console.log($('.writespace').scrollTop());

     //console.log($('.writespace').get(0).scrollHeight);

     //console.log($('.writespace').innerHeight());
     
     });
    $('article').readmore({
        speed: 60000,
        collapsedHeight: 400,
        heightMargin: 26,
        moreLink: '<a href = "" id="readmorelink" style = "position: relative; right: -400px;">....Read more</a>',
        lessLink: '<a href="#"></a>',
        beforeToggle: function() {
            expanded: false,
            $('#readmorelink').on('click',function(){
                $post_id = $(this).parent('.area').attr('id');
                window.open("../blog/blog.php?id="+$post_id,"_self");
            });
        }
    });

    $('.bigheart-container').on('click',function(){
        $post_id = $(this).parent('.area').attr('id');
        window.open("../blog/blog.php?id="+$post_id,"_self");
    });
    $('.share').on('click',function(){
        $post_id = $(this).parents('.area').attr('id');
        $('.copylink').val("https://sphoot.com/user/blog/blog.php?id=" + $post_id);    
    });
    $('#copy').on('click',function(){
        $('.copylink').select(); 
        document.execCommand("copy"); 
        $('#copy').addClass('copied');  
        setTimeout(removeheart,2000);
        function removeheart(){
            $('#copy').removeClass('copied'); 
        }     
    });

    $('.bookmark').on('click',function(){
        $('.test').addClass('active');
        
    });

    $('.heart').on('click',function(){
        $post_id = $(this).parents('.area').attr('id');
        
        $.ajax({
            url: "../../resources/config_files/likepost.php",
            type: "POST",
            data: {"post_id":$post_id},
            success: function(data){
                $value = data.split(",");
                if($value[0]==1){
                    $('#'+$post_id).find('#bigheart').addClass('showheart');
                    $('#'+$post_id).find('#fillh').removeClass('hideh');
                    $('#'+$post_id).find('#blankh').addClass('hideh');
                    setTimeout(removeheart,1500);
                    function removeheart(){
                        $('#'+$post_id).children('#bigheart').removeClass('showheart');
                    }
                }
                if($value[0]==0){
                    $('#'+$post_id).find('#bigheart').removeClass('showheart');
                    $('#'+$post_id).find('#blankh').removeClass('hideh');
                    $('#'+$post_id).find('#fillh').addClass('hideh');
                }
                $('#'+$post_id).find('#likenum').text($value[1]);
            }
        });
    });
    
});