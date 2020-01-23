this.ajaxGetPostMonthlyData();

 

    ajaxGetPostMonthlyData: function () {
    var urlPath =  BASE_URL + 'cms/ajax-orders';
    var request = $.ajax( {
    method: 'GET',
    url: urlPath
    } );

    request.done( function ( response ) {
    console.log( response );
    charts.createCompletedJobsChart( response );
    });
    },
