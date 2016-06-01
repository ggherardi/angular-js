(function(){
    var app = angular.module('store', []);
    
    app.controller("StoreController", function(){
        this.product = gem;
    });
    
    var gem = {
        name: "Rubino",
        price: 5.45,
        description: "E' rosso"
    };
    
})();
