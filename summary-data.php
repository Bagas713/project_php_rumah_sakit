<?php
  if(!$id_user){
    header("location:index.php?page=user-access/login");
  }
?>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

<div class="container-content">
  <!-- export button start -->
  <div class="export data">
    <a href="export-csv.php" class="btn btn-info btn-lg">
      <span class="glyphicon glyphicon-export"></span> Export as Excel
    </a>
  </div>
  <!-- export button end -->

  <div class="container-sum" id="example">
    <div class="row">
      <br/>
      <div class="col text-center">
        <div class="title-row">
          <h2>Summary Data</h2>
        </div>
      </div> 
    </div>

    <div class="row-text-center">

    <?php

      $data = mysqli_query($conn, "SELECT * FROM kategori_ill");
      $icon = ["fa-viruses", "fa-virus-covid", "fa-shield-virus", "fa-lungs-virus", 
                "fa-bacteria", "fa-disease", "fa-head-side-virus", "fa-square-virus"];
      while($dta = mysqli_fetch_array($data)){
        $id_kategori = $dta['id_kategori'];
        $nama_kategori = $dta['nama_kategori'];
        $jumlah = mysqli_query($conn, "SELECT * FROM data_pasien WHERE type_ill = '$nama_kategori'");
        $jumlah = mysqli_num_rows($jumlah);
        ?>

        <div class="col">
          <div class="counter">
            <i class="fa fa-solid <?php echo $icon[$id_kategori-1]; ?> fa-2x"></i>
            <h2 class="timer count-title count-number" data-to="<?php echo $jumlah; ?>" data-speed="1500"></h2>
            <p class="count-text "><?php echo $nama_kategori; ?></p>
          </div>
        </div>

        <?php
      }
    ?>
      
    </div>
  </div>

</div>

<script>
  // show data start
  (function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
    $.fn.countTo.defaults = {
      from: 0,               // the number the element should start at
      to: 0,                 // the number the element should end at
      speed: 1000,           // how long it should take to count between the target numbers
      refreshInterval: 100,  // how often the element should be updated
      decimals: 0,           // the number of decimal places to show
      formatter: formatter,  // handler for formatting the value before rendering
      onUpdate: null,        // callback method for every time the element is updated
      onComplete: null       // callback method for when the element finishes updating
    };
    
    function formatter(value, settings) {
      return value.toFixed(settings.decimals);
    }
  }(jQuery));

  jQuery(function ($) {
    // custom formatting example
    $('.count-number').data('countToOptions', {
    formatter: function (value, options) {
      return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
    });
    
    // start all the timers
    $('.timer').each(count);  
    
    function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    $this.countTo(options);
    }
  });

  // show data end
</script>