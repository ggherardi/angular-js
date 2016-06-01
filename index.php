<!DOCTYPE html>
<html ng-app="store">
    <script type="text/javascript" src="angular.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
    
    <head>
        <title>Learning PHP and JS!</title>
    </head>
    <body>
        <div>Primo div</div>    
        <p>
            I am {{4 + 6}}
            Hello {{"Gianmattia " + "Gherardi"}}
        </p>
        
        <div ng-controller="StoreController as negozio">
            <h1>{{negozio.product.name}}</h1>
            <h1></h1>
            <h1></h1>
        </div>
    </body>
</html>
