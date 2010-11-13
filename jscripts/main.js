// JavaScript Document

function SelectAll(id)
{
    document.getElementById(id).focus();
    document.getElementById(id).select();
}


$(document).ready(function(){

   //Ajax draw preview
   $('#previewbutton').click(function(){ 
   
    var Firstname = $('#firstname').val();
    var Middlename = $('#middlename').val();
    var Lastname = $('#lastname').val();
    var Title = $('#title').val();
    var Organization = $('#organization').val();
    var Address = $('#address').val();
    var Phone = $('#phone').val();
    var Cell = $('#cell').val();
    var Email = $('#email').val();
    var Website = $('#website').val();
    $.get("preview.php", {firstname: Firstname, middlename: Middlename, lastname: Lastname, title: Title, organization: Organization, address: Address, phone: Phone, cell: Cell, email: Email, website: Website},
    function(data){
    $('div#preview').html(data);
    $("textarea#sourcearea").attr("value", data);
    });
  
   });
   
   //display login box
   $("#loginbutton").colorbox({width:"50%", inline:true, href:"#loginbox"});
   
   //highlight source textarea
   $('#copysourcebutton').click(function(){ 
      SelectAll('sourcearea');
   });

});