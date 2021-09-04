'use strict';
(function() {
    var db = {
        loadData: function(filter) {
            return $.grep(this.clients, function(client) {
                return (!filter.Name || client.Name.indexOf(filter.Name) > -1)
                    && (!filter.Action || client.Action === filter.Action)
                    && (!filter.Addedby || client.Addedby.indexOf(filter.Addedby) > -1)
                    && (!filter.vendortype || client.vendortype === filter.vendortype)
                    && (filter.Married === undefined || client.Married === filter.Married);
            });
        },
        insertItem: function(insertingClient) {
            this.clients.push(insertingClient);
        },
        updateItem: function(updatingClient) { },

        deleteItem: function(deletingClient) {
            var clientIndex = $.inArray(deletingClient, this.clients);
            this.clients.splice(clientIndex, 1);
        }
    };
    window.db = db;
    db.countries = [
        { Name: "India", Id: 0 },
        { Name: "United States", Id: 1 },
        { Name: "Canada", Id: 2 },
        { Name: "United Kingdom", Id: 3 },
        { Name: "France", Id: 4 },
        { Name: "Brazil", Id: 5 },
        { Name: "China", Id: 6 },
        { Name: "Russia", Id: 7 }
    ];
    db.clients = [
        {
            "تصویر": "../assets/images/digital-product/logo.jpg",
            "نام": "طراحی آرم",
            "قیمت": "500.000 تومان",
            "وضعیت": "<i class=\"fa fa-circle font-warning f-12\"></i>",
            "زیر مجموعه": "دیجیتال",
        },
        {
            "تصویر": "../assets/images/digital-product/php.png",
            "نام": "پی اچ پی",
            "قیمت": "500.000 تومان",
            "وضعیت": "<i class=\"fa fa-circle font-danger f-12\"></i>",
            "زیر مجموعه": "دیجیتال",
        },
        {
            "تصویر": "../assets/images/digital-product/html.png",
            "نام": "Html",
            "قیمت": "500.000 تومان",
            "وضعیت": "<i class=\"fa fa-circle font-success f-12\"></i>",
            "زیر مجموعه": "دیجیتال",
        },
        {
            "تصویر": "../assets/images/digital-product/css.jpg",
            "نام": "Css",
            "قیمت": "500.000 تومان",
            "وضعیت": "<i class=\"fa fa-circle font-success f-12\"></i>",
            "زیر مجموعه": "دیجیتال",
        },
        {
            "تصویر": "../assets/images/digital-product/web-element.jpg",
            "نام": "عنصر وب",
            "قیمت": "500.000 تومان",
            "وضعیت": "<i class=\"fa fa-circle font-danger f-12\"></i>",
            "زیر مجموعه": "دیجیتال",
        },
        {
            "تصویر": "../assets/images/digital-product/wordpress.jpg",
            "نام": "وردپرس",
            "قیمت": "500.000 تومان",
            "وضعیت": "<i class=\"fa fa-circle font-danger f-12\"></i>",
            "زیر مجموعه": "دیجیتال",
        },
        {
            "تصویر": "../assets/images/digital-product/3d-design.jpg",
            "نام": "طراحی سه بعدی",
            "قیمت": "500.000 تومان",
            "وضعیت": "<i class=\"fa fa-circle font-success f-12\"></i>",
            "زیر مجموعه": "دیجیتال",
        },
    ];
    db.users = [
        {
            "ID": "x",
            "Account": "A758A693-0302-03D1-AE53-EEFE22855556",
            "نام": "Carson Kelley",
            "RegisterDate": "2002-04-20T22:55:52-07:00"
        },
        {
            "Account": "D89FF524-1233-0CE7-C9E1-56EFF017A321",
            "نام": "Prescott Griffin",
            "RegisterDate": "2011-02-22T05:59:55-08:00"
        }
      
    ];
}());
