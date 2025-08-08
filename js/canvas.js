
function qrcode() {

	// $("#genQR").attr("disabled", "disabled");
					iziToast.success({
                        title: 'Success',
                        message: 'QR Code Generated',
                        position: 'topCenter',
                        animateInside: true,
                    });
		$.ajax({
			url:'generate-code.php',
			type:'POST',
			data: {formData:$("#unique_id").val(), ecc:"H", size:"5"},
			success: function(response) {
				
				$("#response").html(response);
				
				$("#genQR").html("Click to Insert");
				drawQRCode(response) 
			},
		 });
}


const canvas = document.getElementById('canvas')
const ctx = canvas.getContext('2d')
const downloadBtn = document.getElementById('download-btn')
const unique = document.getElementById('unique_id')



const image = new Image()
image.src = ''
image.onload = function () {
	var data = $("#response").html();
	drawQRCode(data);
}


function drawQRCode(data) {

	const qr = new Image()
	qr.src = data
	ctx.drawImage(qr,2, 1)

}






downloadBtn.addEventListener('click', function () {

	// const dataUrl = document.getElementById('canvas').toDataURL('image/jpeg', 1.0); 

	downloadBtn.href = canvas.toDataURL('image/jpg', 1.0)
	downloadBtn.download = 'Drug-'+unique.value


	
})


