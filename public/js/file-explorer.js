$(document).ready(function() {
   $(".year_fol_btn").click(function() {
     var year_id = $(this).data('id');
     // console.log(year_id);
     var url = $('meta[name="url"]').attr('content');
     var year = "<li class='breadcrumb-item active'>"+year_id+"</li>";
     $.ajax({
         url : url + '/user/get_month',
         data: {
           year: year_id,
         },
         success : function(data) {
             // console.log(data);
             $('#month_section').html(data);
             $('.breadcrumb').html("");
             $('.breadcrumb').html('<li class="breadcrumb-item active"><a href=""><i class="fas fa-images mr-2"></i>Explorer</a></li>');
             $('.breadcrumb').append(year);
         },
         error : function() {
             alert("Error");
         }
     });
   });
   });


$(document).on('click', '.month_fol_btn', function(){
  var month_id = $(this).data('id');
  var year_id = $(this).data('year');
  var month = "<li class='breadcrumb-item active'>"+year_id+"</li>"+"<li class='breadcrumb-item active'>"+month_id+"</li>";
  // console.log(month_id);
  var url = $('meta[name="url"]').attr('content');
  $.ajax({
      url : url + '/user/get_date',
      data: {
        month: month_id,
        year: year_id,
      },
      success : function(data) {
          // console.log(data);
          $('#dates_section').html(data);
          $('#files_section').html("");
          $('.breadcrumb').html("");
          $('.breadcrumb').html('<li class="breadcrumb-item active"><a href=""><i class="fas fa-images mr-2"></i>Explorer</a></li>');
          $('.breadcrumb').append(month);
      },
      error : function() {
          alert("Error");
      }
  });
});
$(document).on('click', '.date_fol_btn', function(){
var date_id = $(this).data('id');
var month_id = $(this).data('month');
var year_id = $(this).data('year');

var date = "<li class='breadcrumb-item active'>"+year_id+"</li>"+"<li class='breadcrumb-item active'>"+month_id+"</li>"+"<li class='breadcrumb-item active'>"+date_id+"</li>";
// console.log(date_id);
var url = $('meta[name="url"]').attr('content');
$.ajax({
   url : url + '/user/get_file',
   data: {
     date: date_id,
     month: month_id,
     year: year_id,
   },
   success : function(data) {
       console.log(data);
       $('#files_section').html(data);

       $('.breadcrumb').html("");
       $('.breadcrumb').html('<li class="breadcrumb-item active"><a href=""><i class="fas fa-images mr-2"></i>Explorer</a></li>');
       $('.breadcrumb').append(date);
   },
   error : function() {
       alert("Error");
   }
});
});
