// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["腾－张雨绮", "腾－杨超越", "爱－蔡徐坤", "腾－吴宣仪", "腾－孟美岐", "爱－张艺兴", "腾－杨幂", "爱－陈立农", "爱－吴亦凡", "爱－范丞丞","腾－华晨宇","腾－陈建斌","腾－吴青峰","腾－黄子韬"],
    datasets: [{
      label: "During Program - Baidu Trends",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [426938, 289950, 143688, 132911, 125373, 97519, 91284, 63485, 61539, 52000, 51122, 47994, 47359,41938],
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
          maxTicksLimit: 14
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 450000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
