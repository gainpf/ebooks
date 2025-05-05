import $ from 'jquery';
import PDFObject from 'pdfobject';


$(function(){
     PDFObject.embed($("#pdf_path").data("path"), "#myebook");
});