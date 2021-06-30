$(document).ready(function () {
$(document).on("click","#sowbtn",function () {
	$("#formAdd").show(2000)
	$(this).hide(1000)
})


	$("body").on("click","#add",function (event) {
		//alert("fdgfd")

		event.preventDefault()

		let nom = $("#nom").val()
		let desc = $("#descs").val()

		console.log(nom,desc)
    //New  Ajax 
    $.ajax({
        url: 'doneAjax.php',
        type: 'POST',
        data: {nom:nom,descs:desc}

    }).done(function (r) {
    	if (r ==1 ) {
    		$('#ok').show(3000).delay(1000).hide(2000)
    	}else {
    		alert("Noooo")
    	}
    }).fail(function () {
    	console.log("errror")
    })



		//return false
	}) //on click


	//to delete 


	$("body").on("click",".btn-danger",function (event) {
		//alert("fdgfd")

		event.preventDefault()

	let cid = $(this).data('id')
		//console.log(nom,desc)
    //New  Ajax 



Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {

      /********************************/
       $.ajax({
        url: 'delCat.php',
        type: 'POST',
        data: {ecoin:cid}

    }).done(function (r) {
    	if (r ==200) {
    		 Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )

    	}else {
    		alert("Noooo")
    	}
    }).fail(function () {
    	console.log("errror")
    })
      /********************************/

  

   
  }
})


   



		//return false
	}) //on click

})






// Sweet Alert





