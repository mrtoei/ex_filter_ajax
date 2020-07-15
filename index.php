<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="  crossorigin="anonymous"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
       
       
        
        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form id="form_filter">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="">Band</label>
                            <select class="form-control" name="band" id="band"></select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Model</label>
                            <select class="form-control" name="model" id="model"></select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Year</label>
                            <select class="form-control" model="year" id="year"></select>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Band</th>
                                <th scope="col">Model</th>
                                <th scope="col">Year</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody id="div_data">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <script src="./js/index.js"></script>
</html>