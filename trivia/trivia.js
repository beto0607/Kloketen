/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(".modal-wide").on("show.bs.modal", function() {
  var height = $(window).height() - 200;
  $(this).find(".modal-body").css("max-height", height);
});