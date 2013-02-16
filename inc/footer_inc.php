<div class="footer">
	<p>TEST</p>
</div>

<script type="text/javascript">
$(document).ready(function(e){
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