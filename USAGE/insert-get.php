<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
	<form class="form" id="my_form" >
		<input type="text" id="name" name="name">
		<input type="text" id="detail" name="detail">
		<button type="submit" class="btn btn-success" id="submit_form">Submit</button>
	</form>
					
	<button id="get_data">Get Data</button>
	<div id="result"></div>
    <span id="Error" style="color:red"></span>
</body>
</html>
<script type="text/javascript">

$(document).ready(function () {  
	
	// POST
    $("#submit_form").click(function() {   
        var loginForm = $("#my_form");
        loginForm.submit(function(e){
        e.preventDefault();
        var formData = loginForm.serialize();

            $.ajax({
                url:'http://localhost/api_passport_laravel56/api/products',
                type:'POST',
				headers: {
				'Accept':'application/json',
				'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImYzN2Y3YjI4ZWM5MjBhYjg3ZTEwOWRhYjhmOTg3YmFiOWYxNTczMmRkMTY5MWExZWMzZWY3ZGVmNWU5OWEyNjc0NjM4YjMwYjQwY2Q5ZGE4In0.eyJhdWQiOiIyIiwianRpIjoiZjM3ZjdiMjhlYzkyMGFiODdlMTA5ZGFiOGY5ODdiYWI5ZjE1NzMyZGQxNjkxYTFlYzNlZjdkZWY1ZTk5YTI2NzQ2MzhiMzBiNDBjZDlkYTgiLCJpYXQiOjE1MjM0MjQ2NTYsIm5iZiI6MTUyMzQyNDY1NiwiZXhwIjoxNTU0OTYwNjU2LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.A2BS2b7jhJK_UOP8MJzvlkCvt5H4tRyYItTRlJfzm81rykSQ0SA7SMUiW2phE8muDgvYGKtJLR4MUJ9JOgSbzxbh_SgfEE7PRkTrWeU-xE0-2Bv8pOlSsGgTbHLd0bdeV5FICD3yNo4e12Nc4cKkXE0gSeppsSpw2RPWeF4nVYSOwbG3KV_Xl-tdEt1a6I-A9uPIy0sJbILPakXW8g50LIWo0i_DzCMRZemsl1a3f-G7HcEu5BnbGaflKi2u5e1lTo6tWGsKcnjOvdDrRwnM7laJcN45NVxYjrSB9vUhHTExw9r6TV7EVE-aBnKL_bXGpwjbv0h1rLaRfucZCwWGiLiBUS4CNCTpmJaqMTqMYWTQ4LFxmNhn7wfZXwTkDrpH91ObLdYpZmGyfO6NR3WMYeeONUTUNMkVX55VB5-8NhB7E4ild9R6BABjjVyysMaFpueyS7Yud3c6FJZ3VxyB8fPu6d0Kx85QBN5edYnWSjpSPkTz6Zh-pFCCoFQvAzOk21J7_FKhvxc0c2H532Wj1VPb9_bXmS79IHKAucTqI50SWR3LTKdZkv8WxPl8xFA8Q_366-Difu7B2yQX0NBQ5e426B3YZEmu_qPmwLyipgQBfHAc9MKBJWgg6iTZy-pxiaKwNAL7gX3qiyGLjlppWc9cg4kDySocbQ4sv7qrH2k',
				'Content-Type':'application/x-www-form-urlencoded'
				},
                data:formData,
                success:function (returnedData){
                    //alert(data.message);
                    $('#name').val('');
                    $('#detail').val('');
                    alert(returnedData.message);
                },
                error: function (returnedData) {
                    $('#Error').text('Error occured.');
                }
            });
        });
    });
	
    // INDEX
    $( "#get_data" ).click(function() {

		$.ajax({
			url:'http://localhost/api_passport_laravel56/api/products',
			type:'GET',
			headers: {
	        'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImYzN2Y3YjI4ZWM5MjBhYjg3ZTEwOWRhYjhmOTg3YmFiOWYxNTczMmRkMTY5MWExZWMzZWY3ZGVmNWU5OWEyNjc0NjM4YjMwYjQwY2Q5ZGE4In0.eyJhdWQiOiIyIiwianRpIjoiZjM3ZjdiMjhlYzkyMGFiODdlMTA5ZGFiOGY5ODdiYWI5ZjE1NzMyZGQxNjkxYTFlYzNlZjdkZWY1ZTk5YTI2NzQ2MzhiMzBiNDBjZDlkYTgiLCJpYXQiOjE1MjM0MjQ2NTYsIm5iZiI6MTUyMzQyNDY1NiwiZXhwIjoxNTU0OTYwNjU2LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.A2BS2b7jhJK_UOP8MJzvlkCvt5H4tRyYItTRlJfzm81rykSQ0SA7SMUiW2phE8muDgvYGKtJLR4MUJ9JOgSbzxbh_SgfEE7PRkTrWeU-xE0-2Bv8pOlSsGgTbHLd0bdeV5FICD3yNo4e12Nc4cKkXE0gSeppsSpw2RPWeF4nVYSOwbG3KV_Xl-tdEt1a6I-A9uPIy0sJbILPakXW8g50LIWo0i_DzCMRZemsl1a3f-G7HcEu5BnbGaflKi2u5e1lTo6tWGsKcnjOvdDrRwnM7laJcN45NVxYjrSB9vUhHTExw9r6TV7EVE-aBnKL_bXGpwjbv0h1rLaRfucZCwWGiLiBUS4CNCTpmJaqMTqMYWTQ4LFxmNhn7wfZXwTkDrpH91ObLdYpZmGyfO6NR3WMYeeONUTUNMkVX55VB5-8NhB7E4ild9R6BABjjVyysMaFpueyS7Yud3c6FJZ3VxyB8fPu6d0Kx85QBN5edYnWSjpSPkTz6Zh-pFCCoFQvAzOk21J7_FKhvxc0c2H532Wj1VPb9_bXmS79IHKAucTqI50SWR3LTKdZkv8WxPl8xFA8Q_366-Difu7B2yQX0NBQ5e426B3YZEmu_qPmwLyipgQBfHAc9MKBJWgg6iTZy-pxiaKwNAL7gX3qiyGLjlppWc9cg4kDySocbQ4sv7qrH2k',
	        'Content-Type':'application/x-www-form-urlencoded',
			'Accept':'application/json'
			},
			data: {
			  format: 'json'
		    },
			dataType:'json',

			success:function (returnedData){
				$('#result').empty();
				$.each(returnedData.data, function(key, value){
					$('#result').append('<h4>'+returnedData.data[key]['name']+'</h4>');
					$('#result').append('<p>'+returnedData.data[key]['detail']+'</p>');
					$('#result').append('<hr>');
				});
			},

			error: function (returnedData) {
				$('#Error').text('Error occured.');
			}
		});
	});

});    
</script>