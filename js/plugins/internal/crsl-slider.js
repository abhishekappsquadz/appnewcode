function loadCrslSlider(){
  $('.crsl-items').carousel({
    visible: 3,
    itemMinWidth: 180,
    itemEqualHeight: 370,
    itemMargin: 9,
  });
  
  $("a[href=#]").on('click', function(e) {
    e.preventDefault();
  });
  console.log('working');
};

$(".round10").click(function(){
  //alert('working');exit();
  var id= $(this).attr('data-id');
  //alert(id);
    jQuery.ajax({
        url: "http://www.new.appsquadz.com/porfolio_modal_box.php",
        method: 'POST',
        //dataType: 'json',
        data: {
            id: id
        },
        success: function (data) {
            if (data) {
              //alert(data);exit;
                $('#port_modal').html(data);
                $('#grid_Model').modal('toggle');
            } 
        }
    });
});

$(document).ready(() => {
  loadCrslSlider()
});

