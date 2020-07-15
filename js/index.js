$(document).ready(function(){
    getBand()
    getData() 
    function getData() {
        let band = $('#band').val()
        let model = $('#model').val()
        let year = $('#year').val()
        $.ajax({
            type: "post",
            url: "./backend/car.php",
            data: {
                action: 'getData',
                band: band,
                model: model,
                year: year,
            },
            success: function (data) {
                // console.log(data);
                $('#div_data').html(data);
            }
        });
    }

    function getBand() {
        $.ajax({
            type: "post",
            url: "./backend/car.php",
            data: {action: 'getBand'},
            success: function (data) {
                $('#band').html(data);
                getData()
            }
        });
    }

    $('#band').change(function () { 
        let band = $('#band').val()
        $.ajax({
            type: "post",
            url: "./backend/car.php",
            data: {
                action: 'getModel',
                getModel_band: band
            }, 
            success: function (data) {
                $('#model').html(data);
                getData()
            }
        });
    });

    $('#model').change(function () { 
        let band = $('#band').val()
        let model = $('#model').val()
        $.ajax({
            type: "post",
            url: "./backend/car.php",
            data: {
                action: 'getYear',
                getYear_band: band,
                getYear_model: model
            },
            success: function (data) {
                $('#year').html(data);
                getData()
            }
        });
    });

    $('#year').change(function (e) { 
        getData()
    });
})