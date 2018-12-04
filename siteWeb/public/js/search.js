function findById(id)
{
	$.ajax(
	{
	    url : '/api/pictures/1',
	    type : 'POST',
	    contentType : "json",
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	}).done(function(pictures)
	{
	    console.log(pictures);
	})
}

function findByLetter(letters)
{
	
}