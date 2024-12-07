
$(function() {
  // Define cut grades and labels
  var cutGrades = ['VG-', 'VG+', 'EX-', 'EX', 'EX+', 'Ideal'];

  // Initialize jQuery UI slider for cut range
  $("#cutRange").slider({
    range: true,
    min: 0,
    max: cutGrades.length - 1,
    step: 1,
    values: [2, 5], // Initial values (default to 'EX-' to 'Ideal')
    slide: function(event, ui) {
      $("#selectedCutMin").val(cutGrades[ui.values[0]]);
      $("#selectedCutMax").val(cutGrades[ui.values[1]]);
      updateTooltip($("#cutTooltip"), ui.values, cutGrades);
    }
  });

  // Create cut range labels
  var cutLabelContainer = $(".cut-labels");
  cutGrades.forEach(function(cut, index) {
    var label = $("<span>").text(cut).css("left", (index / (cutGrades.length - 1)) * 100 + "%");
    cutLabelContainer.append(label);
    
    // Add gap separator "|" for intermediate grades
    if (index !== cutGrades.length - 1) {
      var gapLabel = $("<span>|</span>").css("left", ((index + 0.5) / (cutGrades.length - 1)) * 100 + "%");
      cutLabelContainer.append(gapLabel);
    }
  });

  // Initial display of selected cut range
  $("#selectedCutMin").val(cutGrades[$("#cutRange").slider("values", 0)]);
  $("#selectedCutMax").val(cutGrades[$("#cutRange").slider("values", 1)]);

  // Create tooltip for cut range
  var cutTooltip = $("<div id='cutTooltip' class='ui-tooltip'></div>").appendTo("#cutRange");

  // Update tooltip position and display on slide
  function updateTooltip(tooltip, values, labels) {
    var tooltipText = labels ? labels[values[0]] + " - " + labels[values[1]] : cutGrades[values[0]] + " - " + cutGrades[values[1]];
    tooltip.text(tooltipText).css({
      left: $(".ui-slider-handle").first().position().left + $(".ui-slider-handle").width() / 2 - tooltip.width() / 2,
      top: $(".ui-slider-handle").first().position().top - 30
    }).fadeIn();
  }

  // Initial positioning of tooltip
  updateTooltip($("#cutTooltip"), $("#cutRange").slider("values"), cutGrades);
});










      // THIS IS FOR CUT RANGE GIVE

          // Initialize the range slider for cut quality
          const cutSlider = document.getElementById('cutRange');

          noUiSlider.create(cutSlider, {
              start: [5, 6], // Start from 'Excellent' (index 4) to 'Ideal' (index 6)
              connect: true,
              range: {
                  'min': 1,  // '3EX'
                  'max': 6   // 'Ideal'
              },
              step: 1, // Ensure the slider moves between whole number labels
              tooltips: [true, true],
              format: {
                  to: function(value) {
                      // Define an array for cut quality labels from '3EX' to 'Ideal'
                      const cuts = ['3EX', 'EX-', 'VG+', 'VG-', 'Excellent', 'Ideal'];
                      return cuts[Math.round(value) - 1]; // Display the cut label based on the slider value
                  },
                  from: function(value) {
                      return Number(value);
                  }
              }
          });
              
                  // Selecting the necessary elements for the cut slider
          var startCut = document.getElementById('startCut');
          var endCut = document.getElementById('endCut');
          var cutStartLabel = document.getElementById('cut-start');
          var cutEndLabel = document.getElementById('cut-end');

          // Adding 'update' event listener to the cut slider
          cutSlider.noUiSlider.on('change', function (values, handle) {
              if (handle === 0) {
                  // Update start cut label and hidden input
                  cutStartLabel.innerHTML = values[0];
                  startCut.value = values[0];
                  startCut.setAttribute('data-id', values[0]); // Update data-id as well
              } else {
                  // Update end cut label and hidden input
                  cutEndLabel.innerHTML = values[1];
                  endCut.value = values[1];
                  endCut.setAttribute('data-id', values[1]); // Update data-id as well
              }

              // Store the new selections for cut range in the newSelections object
              newSelections['cutStart'] = values[0];
              newSelections['cutEnd'] = values[1];

              console.log(newSelections);

              const queryParam = newBuildQueryParams(); // Build query params dynamically
              console.log(queryParam);

              // Fetch products based on the new cut range selection
              newFetchProducts(queryParam);
          });