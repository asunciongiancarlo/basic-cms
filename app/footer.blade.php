<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$('#addbtn').on('click',function(){
		$('#addModal').modal('show');  
	});
	$('#save').on('click',function(){
		if($('#addfrm').parsley().validate()){
			$.ajax({
				type: 'POST',
				url: '{{ action("messages.store") }}',
				data: $('form#addfrm').serialize(),
				dataType:'json',
				success: (function(data){
					console.log(data);
					//CLEAR DATA FIEL AFTER SAVING
					$('#addMsgName, #addMsgEmail, #addMsgCPNum, #addMsgCommentMsg').val('');
				}),
				complete: (function(){
					$('#addModal').modal('hide');
					//RELOAD DATA TABLES
					alert('Thank you for your message, we will get back to you really soon!');
				})
			});
		}
	});
</script>
<footer>
	<p class="pull-right"> 
		Globe:     <b>0927-7485-129</b> · <br/>
		Facebook: <b> <a href="https://www.facebook.com/loida.asuncion.9" target="_new">Loida Zapatero Asuncion</a></b> 
	 </p>
	 <p>	
	 	Loida's Sidecar © {{ date('Y') }} Company, Inc.
	 </p>
</footer>