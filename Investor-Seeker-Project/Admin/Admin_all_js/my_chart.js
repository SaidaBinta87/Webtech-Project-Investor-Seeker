
// chartFunction(15,19);

function chartFunction( inv,entro)
{

const ctx = document.getElementById('myChart');
const investing = document.getElementById('invest');
const visits = document.getElementById('visits');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Investor', 'Entreprenure'],
      datasets: [{
        label: 'Ratio of Investor and Entreprenure',
        data: [inv,entro],
        backgroundColor: [
          'rgb(60, 228, 243)',
          'rgb(127, 242, 61)'
          ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });



  
  
  new Chart(investing, {
     type: 'line',
    data: {
      labels: ['January', 'Fabruary', 'March'],
      datasets: [{
        label: 'Investing Rate Per Month',
        data: [1255, 1922,456],
        backgroundColor: [
          'rgb(243, 61, 60)',
          'rgb(127, 242, 61)',
          'rgba(255, 206, 86, 0.2)'
          ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });
  

   
 

  new Chart(visits, {
     type: 'bar',
    data: {
      labels: ['January', 'Fabruary', 'March'],
      datasets: [{
        label: 'Website Traffic Per Month',
        data: [1255, 1922,456],
        backgroundColor: [
          'rgb(127, 242, 61)',
          'rgb(127, 242, 61)',
          'rgba(255, 206, 86, 0.2)'
          ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
    }
  });
}