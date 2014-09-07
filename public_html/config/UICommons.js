/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



var FOOTER = "";

function getHeader(id,link){
    var HEADER = "<header><div class='head'><div class='logo' ><a href='#'><img src='"+link+"images/website_icon.png' width='500' height='150' /</div></div></header>";
    document.getElementById(id).innerHTML = HEADER;
   
}

function getFooter(){
    document.getElementById(id).innerHTML = FOOTER;
    
}
