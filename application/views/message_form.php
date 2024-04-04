<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message</title>
</head>
<body>

<div>
    <input type="text" class="msg" /> <button class="send">SEND</button>
</div>
    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>


    $('.send').click(function(){
        let msg = $('.msg').val();

        $.ajax({
            type: "post",
            url: '<?php echo $_ENV['BASE_URL']."socketcontroller/new_message";?>',
            data: {'sender':'Yemliha', 'message': msg},
            success: function(response){
                console.log(response)
            }
        })


    })

</script>
</body>
</html>