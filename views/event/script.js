/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$('#event-nama_lokasi').change( function (){
    var x = $('#event-nama_lokasi').find(':selected').val();
    $('#event-id_lokasi').val(x);
});