
<canvas id="linechart" width="700" height="350"></canvas>


<script  type="text/javascript">
    var berat = <?php echo $berat ?>;
    var bulan = <?php echo $bulan ?>;
    var ctx = document.getElementById("linechart").getContext("2d");
    var data = {
              labels: bulan,
              datasets: [
                    {
                      label: "Berat",
                      fill: false,
                      lineTension: 0.1,
                      backgroundColor: "#29B0D0",
                      borderColor: "#29B0D0",
                      pointHoverBackgroundColor: "#29B0D0",
                      pointHoverBorderColor: "#29B0D0",
                      data: berat
                    }
                    ]
            };

    var myBarChart = new Chart(ctx, {
              type: 'line',
              data: data,
              options: {
              legend: {
                display: true
              },
              barValueSpacing: 20,
              scales: {
                yAxes: [{
                    ticks: {
                        min: 0,
                    }
                }],
                xAxes: [{
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)",
                            }
                        }]
                }
            }
          });
  </script>
