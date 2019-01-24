// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["腾－创造101","腾－明日之子","爱－偶像练习生","爱－中国新说唱","腾－幸福三重奏","腾－心动的信号","爱－奇葩说第五季","腾－奇遇人生", "爱－Hi室友"],
    datasets: [{
      label: "Accelerated View Counts",
      backgroundColor: "orange",
      borderColor: "orange",
      data: [5070000,4890000,3590000,1360000,1130000,900000,800000,190000,0],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: false
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit:100
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 5500000,
          maxTicksLimit: 10
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
