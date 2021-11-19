window.onload = function exampleFunction() { 
            $.ajax({
              type: "POST",
              url: "change.php",
              
              cache: false,
              success: function(arr){
                var data1=JSON.parse(arr);
                var html = '';
                for(i = 0; i < data1.length; i++){

                  
                  document.getElementById('demo'+i).innerHTML = '<div>'+data1[i]+'</div>';

                }

                document.getElementById('column_1').innerHTML = "Number of Employers";
                document.getElementById('column_2').innerHTML = "Number of Freelancers";
                document.getElementById('column_3').innerHTML = "Number of Jobs";
                document.getElementById('column_4').innerHTML = "Number of Applied Jobs";
                chartdata(data1);
              }
              });
        } 

function chartdata(data) {



var employers = data[0];

var freelancers = data[1];

var area = new Morris.Area({
    element   : 'graph-chart',
    resize    : true,
    data      : [
      { y: '2018 Q1', item1: data[0], item2: data[1] },
      { y: '2018 Q2', item1: data[2], item2: data[3] },
      
      { y: '2019 Q1', item1: data[2], item2: data[3] },
      { y: '2019 Q2', item1: data[0], item2: data[1] },
      { y: '2019 Q3', item1: data[2], item2: data[3] },
      { y: '2019 Q4', item1: data[0], item2: data[1] },
      
    ],
    xkey      : 'y',
    ykeys     : ['item1', 'item2'],
    labels    : ['Item 1', 'Item 2'],
    lineColors: ['#a0d0e0', '#3c8dbc'],
    hideHover : 'auto'
  });
  var line = new Morris.Line({
    element          : 'line-chart',
    resize           : true,
    data             : [
      { y: '2019 Q1', item1: 2666 },
      { y: '2011 Q2', item1: 2778 },
      { y: '2011 Q3', item1: 4912 },
      { y: '2011 Q4', item1: 3767 },
      { y: '2012 Q1', item1: 6810 },
      
    ],
    xkey             : 'y',
    ykeys            : ['item1'],
    labels           : ['Item 1'],
    lineColors       : ['#efefef'],
    lineWidth        : 2,
    hideHover        : 'auto',
    gridTextColor    : '#fff',
    gridStrokeWidth  : 0.4,
    pointSize        : 4,
    pointStrokeColors: ['#efefef'],
    gridLineColor    : '#efefef',
    gridTextFamily   : 'Open Sans',
    gridTextSize     : 10
  });

  // Donut Chart
  var donut = new Morris.Donut({
    element  : 'market-chart',
    resize   : true,
    colors   : ['#3c8dbc', '#f56954', '#00a65a'],
    data     : [
      { label: 'Employers', value: employers },
      { label: 'Freelancers', value: freelancers }
    ],
    hideHover: 'auto'
  });
}