<div class="footer">
	<p>This is a footer</p>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('.item').click(function (e){
        if($(this).next('.item-data').css('display') != 'block'){
            $('.active').slideUp('fast').removeClass('active');
            $(this).next('.item-data').addClass('active').slideDown('slow');
        } else {
            $('.active').slideUp('fast').removeClass('active');
        }
    });
});
</script>
</body>
</html>