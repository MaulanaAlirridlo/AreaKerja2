( function ( $ ) {
    "use strict";


// const brandPrimary = '#20a8d8'
const brandSuccess = '#4dbd74'
const brandInfo = '#63c2de'
const brandDanger = '#f86c6b'

function convertHex (hex, opacity) {
  hex = hex.replace('#', '')
  const r = parseInt(hex.substring(0, 2), 16)
  const g = parseInt(hex.substring(2, 4), 16)
  const b = parseInt(hex.substring(4, 6), 16)

  const result = 'rgba(' + r + ',' + g + ',' + b + ',' + opacity / 100 + ')'
  return result
}

function random (min, max) {
  return Math.floor(Math.random() * (max - min + 1) + min)
}

    var elements = 27
    var data1 = []
    var data2 = []
    var data3 = []

    for (var i = 0; i <= elements; i++) {
      data1.push(random(50, 200))
      data2.push(random(80, 100))
      data3.push(65)
    }


    //Traffic Chart
    var ctx = document.getElementById( "trafficChart" );
    //ctx.height = 200;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S'],
            datasets: [
            {
              label: 'My First dataset',
              backgroundColor: convertHex(brandInfo, 10),
              borderColor: brandInfo,
              pointHoverBackgroundColor: '#fff',
              borderWidth: 2,
              data: data1
          },
          {
              label: 'My Second dataset',
              backgroundColor: 'transparent',
              borderColor: brandSuccess,
              pointHoverBackgroundColor: '#fff',
              borderWidth: 2,
              data: data2
          },
          {
              label: 'My Third dataset',
              backgroundColor: 'transparent',
              borderColor: brandDanger,
              pointHoverBackgroundColor: '#fff',
              borderWidth: 1,
              borderDash: [8, 5],
              data: data3
          }
          ]
        },
        options: {
            //   maintainAspectRatio: true,
            //   legend: {
            //     display: false
            // },
            // scales: {
            //     xAxes: [{
            //       display: false,
            //       categoryPercentage: 1,
            //       barPercentage: 0.5
            //     }],
            //     yAxes: [ {
            //         display: false
            //     } ]
            // }


            maintainAspectRatio: true,
            legend: {
                display: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                  gridLines: {
                    drawOnChartArea: false
                  }
                }],
                yAxes: [ {
                      ticks: {
                        beginAtZero: true,
                        maxTicksLimit: 5,
                        stepSize: Math.ceil(250 / 5),
                        max: 250
                      },
                      gridLines: {
                        display: true
                      }
                } ]
            },
            elements: {
                point: {
                  radius: 0,
                  hitRadius: 10,
                  hoverRadius: 4,
                  hoverBorderWidth: 3
              }
          }


        }
    } );


} )( jQuery );
$(function () {
  $("body").addClass("js-enabled");
  $("thead input[type=checkbox]").focus(function () {
    $(this).closest(".block-label").addClass("focused");
          })
          $("thead input[type=checkbox]").focusout(function () {
              $(this).closest(".block-label").removeClass("focused");
          })
          $("input[type=checkbox]").focus(function () {
              $(this).closest("tr").addClass("focused");
          })
          $("input[type=checkbox]").blur(function () {
                  $(this).closest("tr").removeClass("focused");
              })
              /* Checkbox, set classes to apply styles */
          $("input[type=checkbox]").click(function () {
              if ($(this).closest("tr").hasClass("head")) return;
              if ($(this).is(":checked")) {
                  $(this).closest("tr").addClass("row-selected");
                  $(this).closest(".selection-button-checkbox").addClass('selected');
              }
              else {
                  $(this).closest("tr").removeClass("row-selected");
                  $(this).closest(".selection-button-checkbox").removeClass('selected');
              }
          });
          $("#toggleAll").click(function () {
              if ($(this).hasClass("all-selected")) {
                  $(this).removeClass("all-selected");
                  $("input[type=checkbox]").each(function () {
                      $(this).closest(".selection-button-checkbox").removeClass('selected');
                      $(this).closest("tr").removeClass("row-selected");
                      $(this).attr("checked", false);
                  })
              }
              else {
                  $(this).addClass("all-selected");
                  $("input[type=checkbox]").each(function () {
                      $(this).closest(".selection-button-checkbox").addClass('selected');
                      if ($(this).attr("id") != "toggleAll") $(this).closest("tr").addClass("row-selected");
                      $(this).attr("checked", true);
                  })
              }
          })
          $(".row-select tbody tr").click(function (e) {
              selectRowChange($(this));
          })
          $("input[type=checkbox]").keyup(function (e) {
              if (e.which == 13) boxPressed($(this));
          })

          function selectRowChange(row) {
              if (row.find("select").is(":focus")) return;
              if (row.hasClass("row-selected")) {
                  row.removeClass("row-selected");
                  row.find("input[type=checkbox]").first().attr("checked", false);
                  row.find(".selection-button-checkbox").first().removeClass("selected");
              }
              else {
                  row.addClass("row-selected");
                  row.find("input[type=checkbox]").first().attr("checked", true);
                  row.find(".selection-button-checkbox").first().addClass("selected");
              }
          }

          function boxPressed(cbox) {
              if (cbox.closest("select").is(":focus")) return;
              if (cbox.closest("tr").hasClass("row-selected")) {
                  cbox.closest("tr").removeClass("row-selected");
                  cbox.attr("checked", false);
                  cbox.closest("label").removeClass("selected");
              }
              else {
                  cbox.closest("tr").addClass("row-selected");
                  cbox.attr("checked", true);
                  cbox.closest("label").addClass("selected");
              }
          }
})