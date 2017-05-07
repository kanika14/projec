$(document).ready(function(){
	$(".dropdown-button").dropdown({
	  inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
	});
})


  $(document).ready(function() {
    $('select').material_select();

     $('.modal').modal();


     $('.datepicker').pickadate({
       selectMonths: false, // Creates a dropdown to control month
       selectYears: 15 // Creates a dropdown of 15 years to control year
     });
  });
    


function searchStudents(){
    $('.searchhsn').addClass('loading');
      var level1hsn = document.getElementById('search').value;
      $(".resultsdiv").html('');
      
      var ref = "search";
      $.ajax({
      type: "POST",
      url: "fetchhsn.php",
      data: {
        level1hsn: level1hsn
      }
    }).done(function(res) {

      $('.searchboxhsn, .searchsac, .searchhsn').removeClass('loading');
        //document.getElementById('hsndiv').innerHTML = res;
        $(".resultsdiv").html(res);
      });
    }


$(function() {
  $("[name=toggler]").click(function(){
      $('.toHide').hide();
        var abc = $("#blk-1").show();
        $(".resultsdiv").html('');
        $(".searchboxhsn input").val('');
        if (($(this).val()) == '2') {
        $("#search_hsn").attr({
          id: 'search_sac',
          placeholder: 'Search SAC',
          onKeyup: 'sacsearch()'
        });
          $('.hsnhead').text("SAC");
       }

       else{
         $(".searchboxhsn input").attr({
          id: 'search_hsn',
          placeholder: 'Search HSN',
          onKeyup: 'hsnsearch()'
        });
          $('.hsnhead').text("HSN");
       } 
    });
 });


$(document).ready(function(){
  
  var show_per_page = 10; 

  var number_of_items = $('#content').children().length;

  var number_of_pages = Math.ceil(number_of_items/show_per_page);
  
  $('#current_page').val(0);
  $('#show_per_page').val(show_per_page);
  
  var navigation_html = '<a class="previous_link ui button blue large" href="javascript:previous();">Prev</a>';
  var current_link = 0;
  while(number_of_pages > current_link){
    navigation_html += '<a class="page_link ui button white" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a>';
    current_link++;
  }
  navigation_html += '<a class="next_link ui button blue" href="javascript:next();">Next</a>';
  
  $('#page_navigation').html(navigation_html);
  
  $('#page_navigation .page_link:first').addClass('active_page');
  
  $('#content').children().css('display', 'none');
  
  $('#content').children().slice(0, show_per_page).css('display', 'block');
  
});

function previous(){
  
  new_page = parseInt($('#current_page').val()) - 1;

  if($('.active_page').prev('.page_link').length==true){
    go_to_page(new_page);
  }
}

function next(){
  new_page = parseInt($('#current_page').val()) + 1;

  if($('.active_page').next('.page_link').length==true){
    go_to_page(new_page);
  }
  
}
function go_to_page(page_num){
  var show_per_page = parseInt($('#show_per_page').val());
  
  start_from = page_num * show_per_page;
  
  end_on = start_from + show_per_page;
  
  $('#content').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');
  
  
  $('.page_link[longdesc=' + page_num +']').addClass('active_page').siblings('.active_page').removeClass('active_page');
  
  $('#current_page').val(page_num);
}



