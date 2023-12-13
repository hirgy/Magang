
@include('layouts.main')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Data warga</title>

    <link href="../../assets/styles.css" rel="stylesheet" />

    <style>
      
        .row {
      overflow: hidden;
      max-width: 890px;
      margin: 30px auto;
      display: flex;
    }
    
    .col-md-4 {
      width: 33.33%;
      padding: 0 25px;
    }
    
    table {
      width: 100%;
    }
    
    tbody tr {
      border-top: 1px solid #e7e7e7;
    }
    
    th {
      font-weight: bold;
      font-family: Helvetica;
      padding-bottom: 20px;
    }
    td, th {
      width: 25%;
      text-align: center;
      height: 65px;
    }
    
    td div {
      margin: 0 auto;
    }
    
    .left {
      float: left;
    }
    
    .right {
      float: right;
    }
    
    @media only screen and (max-width: 480px) {
      th:first-child, td:first-child {
        display: none;
      }
      .row {
        display: block;
      }
      .col-md-4 {
        padding: 0;
        width: 100%;
      }
    }
      
    </style>

    <script>
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
        )
    </script>

    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    

    <script>
      // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
      // Based on https://gist.github.com/blixt/f17b47c62508be59987b
      var _seed = 42;
      Math.random = function() {
        _seed = _seed * 16807 % 2147483647;
        return (_seed - 1) / 2147483646;
      };
    </script>

    <script>
  window.Apex = {
    stroke: {
      width: 3
    },
    markers: {
      size: 0
    },
    tooltip: {
      fixed: {
        enabled: true,
      }
    }
  };
  
  var randomizeArray = function (arg) {
    var array = arg.slice();
    var currentIndex = array.length,
      temporaryValue, randomIndex;
  
    while (0 !== currentIndex) {
  
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
  
      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
    }
  
    return array;
  }
  
  // data for the sparklines that appear below header area
  var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41,];
  </script>
  </head>

  <body>
     <div>
        <div class="row">
          <div class="col-md-4">
            <div id="chart-spark1"></div>
          </div>
          <div class="col-md-4">
            <div id="chart-spark2"></div>
          </div>
          <div class="col-md-4">
            <div id="chart-spark3"></div>
          </div>
        </div>
      
        <div class="row">
          <table>
            <thead>
              <th>Data Warga</th>
              <th>Data Aset</th>
              <th>Data pinjaman</th>
              <th>Bantuan sosial</th>
            </thead>
            <tbody>

              <tr>
                <td>
                  <div id="chart-7"></div>
                </td>
                <td>
                  <div id="chart-3"></div>
                </td>
                <td>
                  <div id="chart-4"></div>
                </td>
                <td>
                  <div id="chart-5"></div>
                </td>
              </tr>


              <tr>
                <td>
                  <div id="chart-7"></div>
                </td>
                <td>
                  <div id="chart-3"></div>
                </td>
                <td>
                  <div id="chart-4"></div>
                </td>
                <td>
                  <div id="chart-5"></div>
                </td>
              </tr>


              <tr>
                <td>
                  <div id="chart-7"></div>
                </td>
                <td>
                  <div id="chart-3"></div>
                </td>
                <td>
                  <div id="chart-4"></div>
                </td>
                <td>
                  <div id="chart-5"></div>
                </td>
              </tr>


              <tr>
                <td>
                  <div id="chart-7"></div>
                </td>
                <td>
                  <div id="chart-3"></div>
                </td>
                <td>
                  <div id="chart-4"></div>
                </td>
                <td>
                  <div id="chart-5"></div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>

    <script>
      
        var options = {
          series: [{
          data: randomizeArray(sparklineData)
        }],
          chart: {
          type: 'area',
          height: 160,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'straight'
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0
        },
        colors: ['#DCE6EC'],
        title: {
          text: '3230',
          offsetX: 0,
          style: {
            fontSize: '24px',
          }
        },
        subtitle: {
          text: 'Kepala keluarga',
          offsetX: 0,
          style: {
            fontSize: '14px',
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart-spark1"), options);
        chart.render();
      
        var optionsSpark2 = {
          series: [{
          data: randomizeArray(sparklineData)
        }],
          chart: {
          type: 'area',
          height: 160,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'straight'
        },
        fill: {
          opacity: 0.3,
        },
        yaxis: {
          min: 0
        },
        colors: ['#DCE6EC'],
        title: {
          text: '314',
          offsetX: 0,
          style: {
            fontSize: '24px',
          }
        },
        subtitle: {
          text: 'Ibu Hamil',
          offsetX: 0,
          style: {
            fontSize: '14px',
          }
        }
        };

        var chartSpark2 = new ApexCharts(document.querySelector("#chart-spark2"), optionsSpark2);
        chartSpark2.render();
      
        var optionsSpark3 = {
          series: [{
          data: randomizeArray(sparklineData)
        }],
          chart: {
          type: 'area',
          height: 160,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'straight'
        },
        fill: {
          opacity: 0.3
        },
        xaxis: {
          crosshairs: {
            width: 1
          },
        },
        yaxis: {
          min: 0
        },
        title: {
          text: '200',
          offsetX: 0,
          style: {
            fontSize: '24px',
          }
        },
        subtitle: {
          text: 'Balita',
          offsetX: 0,
          style: {
            fontSize: '14px',
          }
        }
        };

        var chartSpark3 = new ApexCharts(document.querySelector("#chart-spark3"), optionsSpark3);
        chartSpark3.render();
      
       
        var options3 = {
          series: [43, 32, 12, 21, 25, 31, 11],
          chart: {
          type: 'pie',
          width: 40,
          height: 40,
          sparkline: {
            enabled: true
          }
        },
        stroke: {
          width: 1
        },
        tooltip: {
          fixed: {
            enabled: false
          },
        }
        };

        var chart3 = new ApexCharts(document.querySelector("#chart-3"), options3);
        chart3.render();
      
        var options4 = {
          series: [43, 32, 23, 55, 43],
          chart: {
          type: 'donut',
          width: 40,
          height: 40,
          sparkline: {
            enabled: true
          }
        },
        stroke: {
          width: 1
        },
        tooltip: {
          fixed: {
            enabled: false
          },
        }
        };

        var chart4 = new ApexCharts(document.querySelector("#chart-4"), options4);
        chart4.render();
      
        var options5 = {
          series: [{
          data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
        }],
          chart: {
          type: 'bar',
          width: 100,
          height: 35,
          sparkline: {
            enabled: true
          }
        },
        plotOptions: {
          bar: {
            columnWidth: '80%'
          }
        },
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: {
          crosshairs: {
            width: 1
          },
        },
        tooltip: {
          fixed: {
            enabled: false
          },
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function (seriesName) {
                return ''
              }
            }
          },
          marker: {
            show: false
          }
        }
        };

        var chart5 = new ApexCharts(document.querySelector("#chart-5"), options5);
        chart5.render();
      
        
        var options7 = {
          series: [95,34,23],
          chart: {
          type: 'radialBar',
          width: 50,
          height: 50,
          sparkline: {
            enabled: true
          }
        },
        dataLabels: {
          enabled: false
        },
        plotOptions: {
          radialBar: {
            hollow: {
              margin: 0,
              size: '50%'
            },
            track: {
              margin: 0
            },
            dataLabels: {
              show: false
            }
          }
        }
        };

        var chart7 = new ApexCharts(document.querySelector("#chart-7"), options7);
        chart7.render();
      
        
    </script>

    
  </body>
</html>


    <script>
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
        )
    </script>

    

    <script>
      var _seed = 42;
      Math.random = function() {
        _seed = _seed * 16807 % 2147483647;
        return (_seed - 1) / 2147483646;
      };
    </script>


  <body>
     <div id="chart"></div>

    <script>
      
        var options = {
          series: [44, 55, 41],
          chart: {
          width: 350,
          type: 'donut',
        },
        plotOptions: {
          pie: {
            startAngle: -90,
            endAngle: 270
          }
        },
        dataLabels: {
          enabled: false
        },
        fill: {
          type: 'gradient',
        },
        legend: {
          formatter: function(val, opts) {
            return val + " - " + opts.w.globals.series[opts.seriesIndex]
          }
        },
        title: {
          text: 'Data Warga'
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
      
      
    </script>
  </body>

    
  




     <script>
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
        )
    </script>

    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


  <body>
     <div id="chart"></div>

    <script>
      
        var options = {
          series: [{
          data: [40, 43, 44, 47, 54, 58, 69, 11, 12, 23]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            borderRadiusApplication: 'end',
            horizontal: true,
          }
        },
        title: {
          text: 'Bantuan sosial'
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories: ['BLTPusat', 'BLTDesa', 'BPNT', 'BPUM', 'BST', 'PKH', 'Sembako',
            , 'KIP', 'KIS'
          ],
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
      
      
    </script>


