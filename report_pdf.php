<?php 

?>

<script>
	function printPdf() {
		
		var divContents = $(".table-forms-container").html();
		var printWindow = window.open('', '', 'height=800,width=800');
		printWindow.document.write('<html><head><title>Tipmon PDF Report</title>');
		printWindow.document.write('<link rel="stylesheet" type="text/css" href="assets/styles/dark-theme.css">');
		printWindow.document.write('</head><body >');
		printWindow.document.write(divContents);
		printWindow.document.write('</body></html>');
		printWindow.document.close();
		printWindow.focus();
		setTimeout(function (){
			printWindow.print();
			printWindow.close();
		}, 3000);

		return true;
	}
</script>
