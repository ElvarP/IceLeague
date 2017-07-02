//Loada Datatables fyrir tables
$(document).ready(function() {
  $('.leagues').dataTable( {
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Icelandic.json"
    },
    "iDisplayLength": 15,
    "lengthMenu": [10, 15, 25, 50, 100],
    //Raða DIVISION eftir RANK í LEAGUES table
    columnDefs: [
      {
        targets: [2],
        orderData: [0]
      }
    ],
    responsive: true,
  });
  $('.rankedstats').dataTable( {
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Icelandic.json"
    },
    "iDisplayLength": 15,
    "lengthMenu": [10, 15, 25, 50, 100],
    responsive: true,
  });
  $('.roles').dataTable( {
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Icelandic.json"
    },
    "iDisplayLength": 15,
    "lengthMenu": [10, 15, 25, 50, 100],
    "order": [[ 6, "desc" ]],
    responsive: true,
  });
  $('.championmastery').dataTable( {
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Icelandic.json"
    },
    "iDisplayLength": 15,
    "lengthMenu": [10, 15, 25, 50, 100],
    responsive: true,
  });
  $('#table_search').dataTable( {
    "language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Icelandic.json"
    },
    "iDisplayLength": 15,
    "lengthMenu": [10, 15, 25, 50, 100],
    responsive: true,
  });
  //Bæta við Index (númer) við Ranked stats og Champion Mastery tables
  $('.rankedstats').on( 'draw.dt', function () {
    $('tr').each(function (i) {
      $("td:first", this).html(i);
    });
  });
  $('.championmastery').on( 'draw.dt', function () {
    $('tr').each(function (i) {
      $("td:first", this).html(i);
    });
  });
});
//Breyta liti á KDA eftir hversu hátt KDA-ið er
$('.kda').each(function() {
  var $this = $(this);
  var value = $this.text();
  if(value >= 2) {
    $this.addClass('kda_green');
  }
  if (value >= 3) {
    $this.addClass('kda_blue');
  }
  if (value >= 4) {
    $this.addClass('kda_orange');
  }
});
