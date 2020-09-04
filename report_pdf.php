<?php 
/*
** Zabbix
** Copyright (C) 2001-2020 Zabbix SIA
** 
** Edited By Gabriel Da Silva Souza
**
*/
?>

<script>
	function printPdf() {
		
		var divContents = $(".table-forms-container").html();
		var ScreenName = $( "span.selected" ).text();
		var ServerName = $("span.subfilter-enabled").text();
		var DateFrom = $("#from").val();
		var DateTo = $("#to").val();
		var data = new Date();
		
		if( ServerName == "")
		{
			ServerName = ".Exemplo"
		}

		var printWindow = window.open('', '', 'height=800,width=800');
		printWindow.document.write('<html><head><title>Tipmon PDF Report</title>');
		printWindow.document.write('<link rel="stylesheet" type="text/css" href="assets/styles/pdf-theme.css">');
		printWindow.document.write('</head><body><main><center><h2 style="border-top:150px solid #FFFFFF;">&nbsp;</h2><br><div class="PdfReport-logo"></div>');
		printWindow.document.write('<h2 style="border-bottom:37px solid #FFFFFF;font-size:400%;">Tipmon Report</h2>');
		printWindow.document.write('</br><h2>Servidor: ');
		printWindow.document.write(ServerName);
		printWindow.document.write('</h2</br><h2 style="border-bottom:190px solid #FFFFFF;">Relatório: ');
		printWindow.document.write(ScreenName);
		printWindow.document.write('</h2></center><br>');
		printWindow.document.write('<h2 style="border-left:25px solid #FFFFFF;">	Filtro de data inicio: ');
		printWindow.document.write(DateFrom);
		printWindow.document.write('</h2><br>');
		printWindow.document.write('<h2 style="border-left:25px solid #FFFFFF;">	Filtro de data fim: ');
		printWindow.document.write(DateTo);
		printWindow.document.write('</h2><br>');
		printWindow.document.write('<h2 style="border-left:25px solid #FFFFFF;border-bottom:50px solid #FFFFFF;">	Data do Relatório: ');
		printWindow.document.write(data.getDate() + '/' + (data.getMonth()+1) + '/' + data.getFullYear());
		printWindow.document.write('</h2><br>');
		printWindow.document.write('<div style="page-break-after: always"></div>');
		printWindow.document.write(divContents);
		printWindow.document.write('</main></body></html>');
		printWindow.document.close();
		printWindow.focus();
		setTimeout(function (){
			printWindow.print();
			printWindow.close();
		}, 3000);

		return true;
	}
</script>
