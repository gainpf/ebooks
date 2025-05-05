import $ from 'jquery';
import PDFObject from 'pdfobject';


$(function(){
    alert("ll")
     PDFObject.embed($("#pdf_path").data("path"), "#myebook");
});