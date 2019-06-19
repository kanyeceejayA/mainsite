<script>
$(function()
{
    function after_form_submitted(data)
    {
        if(data.result == 'success')
        {
            $('form#reused_form').hide();
            $('#success_message').show();
            $('#error_message').hide();
        }
        else
        {
            $('#error_message').append('<ul></ul>');

            jQuery.each(data.errors,function(key,val)
            {
                $('#error_message ul').append('<li>'+key+':'+val+'</li>');
            });
            $('#success_message').hide();
            $('#error_message').show();

            //reverse the response on the button
            $('input[type="submit"]', $form).each(function()
            {
                $btn = $(this);
                label = $btn.prop('orig_label');
                if(label)
                {
                    $btn.prop('type','submit' );
                    $btn.text(label);
                    $btn.prop('orig_label','');
                }
            });

        }//else
    }
    $('#reused_form').submit(function(e){
        e.preventDefault();

        $form = $(this);
        //show some response on the button
        $('input[type="submit"]', $form).each(function()
        {
            $btn = $(this);
            $btn.prop('type','input' );
            $btn.prop('orig_label',$btn.text());
            $btn.text('Sending ...');
        });

$('form.ajax').on('submit',function() {
  var that = $(this),
  url = that.attr('action'),
  type = that.attr('method'),
  data = ();

  that.find('[name]').each(function(index, value){
        var that = $(this),
         name = that.attr('name'),
         value = that.val();
        data[name] = value;

  });
  $.ajax({
     url: url,
     type: type,
     data: data,
     success: function(after_form_submitted){
     	console.log(after_form_submitted);
     }
  });

  return false;
	
});