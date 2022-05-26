function HTMLtoPDF(){
// Default export is a4 paper, portrait, using millimeters for units
var doc = new jsPDF();
var HTMLelement = $('#content').html();
var specialElementHandlers = {
	'#elementH':function(element, renderer){return true;}
}

doc.fromHTML(HTMLelement, 15, 15{
	'width' : 170,
	'elementHandlers': specialElementHandlers
});
//doc.text("Hello world!", 10, 10);
doc.save("test.pdf");

}

