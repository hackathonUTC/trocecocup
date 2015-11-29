<div id="grid" class="row-fluid">

	<span>Filter :</span> 
	<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Asso
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <?php
    afficherAsso();
    ?>
  </ul>
</div>

	<?php
	afficherCups();
	?>

</div>

<script>
$(document).ready(function() {
  var $grid = $('#grid'),
      $sizer = $grid.find('.shuffle__sizer');

  $grid.shuffle({
    itemSelector: '.picture-item',
    sizer: $sizer
  });
});

// Sorting options
$('.sort-options').on('change', function() {
  var sort = this.value,
      opts = {};

  // We're given the element wrapped in jQuery
  if ( sort === 'date-created' ) {
    opts = {
      reverse: true,
      by: function($el) {
        return $el.data('date-created');
      }
    };
  } else if ( sort === 'title' ) {
    opts = {
      by: function($el) {
        return $el.data('title').toLowerCase();
      }
    };
  }

  // Filter elements
  $grid.shuffle('sort', opts);
});
</script>