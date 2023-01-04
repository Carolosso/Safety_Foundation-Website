
jQuery(document).ready(function($){

  //console.log("DZIALA");
  var $grid = $('.grid-filtr').isotope({
    itemSelector: '.col-xl-4',
  });
  // filter functions
  var filterFns = {
  };
  // bind filter button click
  $('.form-select').on( 'change', function() {
    var filterValue = $( this ).find(":selected").attr('data-filter');
    console.log(filterValue);
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    //console.log(filterValue);
    $grid.isotope({ filter: filterValue });
  });
  /* change is-checked class on buttons
  $('.filters-button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      //console.log("TEST");
      $buttonGroup.find('.btn-primary').removeClass('btn-primary');
      $( this ).addClass('btn-primary');
    });
  }); */
})

