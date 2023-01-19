<?php

  if($id_user){
      
  } else {
    header("location:index.php?page=user-access/login");
  }

?>

<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

<div class="container-content">
  <!-- export button start -->
  <div class="export data">
    <a href="#" class="btn btn-info btn-lg">
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
      <div class="col">
        <div class="counter">
          <i class="fa fa-solid fa-viruses fa-2x"></i>
          <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
          <p class="count-text ">Esofagus</p>
        </div>
      </div>

      <div class="col">
        <div class="counter">
          <i class="fa fa-solid fa-virus-covid fa-2x"></i>
          <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
          <p class="count-text ">Gaster</p>
        </div>
      </div>

      <div class="col">
        <div class="counter">
          <i class="fa fa-solid fa-shield-virus fa-2x"></i>
          <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
          <p class="count-text ">Duodenum - Jejunum - Ileum</p>
        </div>
      </div>

      <div class="col">
        <div class="counter">
          <i class="fa fa-solid fa-lungs-virus fa-2x"></i>
          <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
          <p class="count-text ">Kolon - Rektum</p>
        </div>
      </div>

      <div class="col">
        <div class="counter">
          <i class="fa fa-solid fa-bacteria fa-2x"></i>
          <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
          <p class="count-text ">Anus</p>
        </div>
      </div>

      <div class="col">
        <div class="counter">
          <i class="fa fa-solid fa-disease fa-2x"></i>
          <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
          <p class="count-text ">Hepatobiliar</p>
        </div>
      </div>

      <div class="col">
        <div class="counter">
          <i class="fa fa-solid fa-head-side-virus fa-2x"></i>
          <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
          <p class="count-text ">Pankreas</p>
        </div>
      </div>

      <div class="col">
        <div class="counter">
          <i class="fa fa-solid fa-square-virus fa-2x"></i>
          <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
          <p class="count-text ">GIST</p>
        </div>
      </div>

      
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