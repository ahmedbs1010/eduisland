/*=============JsGrid Basic Scenario Table==========================*/

var clients = [
    { "Name": "Otto Clay", "Age": 25, "Country": 1, "Address": "Ap #897-1459 Quam Avenue", "Married": false },
    { "Name": "Timothy Henson", "Age": 56, "Country": 1, "Address": "911-5143 Luctus Ave", "Married": true },
    { "Name": "Ramona Benton", "Age": 32, "Country": 3, "Address": "Ap #614-689 Vehicula Street", "Married": false },
    { "Name": "Otto Clay", "Age": 25, "Country": 1, "Address": "Ap #897-1459 Quam Avenue", "Married": false },
    { "Name": "Connor Johnston", "Age": 45, "Country": 2, "Address": "Ap #370-4647 Dis Av.", "Married": true },
    { "Name": "Lacey Hess", "Age": 29, "Country": 3, "Address": "Ap #365-8835 Integer St.", "Married": false },
    { "Name": "Timothy Henson", "Age": 56, "Country": 1, "Address": "911-5143 Luctus Ave", "Married": true },
    { "Name": "Ramona Benton", "Age": 32, "Country": 3, "Address": "Ap #614-689 Vehicula Street", "Married": false },
    { "Name": "Otto Clay", "Age": 25, "Country": 1, "Address": "Ap #897-1459 Quam Avenue", "Married": false },
    { "Name": "Connor Johnston", "Age": 45, "Country": 2, "Address": "Ap #370-4647 Dis Av.", "Married": true },
    { "Name": "Lacey Hess", "Age": 29, "Country": 3, "Address": "Ap #365-8835 Integer St.", "Married": false },
    { "Name": "Timothy Henson", "Age": 56, "Country": 1, "Address": "911-5143 Luctus Ave", "Married": true },
    { "Name": "Ramona Benton", "Age": 32, "Country": 3, "Address": "Ap #614-689 Vehicula Street", "Married": false }
];

var countries = [
    { Name: "", Id: 0 },
    { Name: "United States", Id: 1 },
    { Name: "Canada", Id: 2 },
    { Name: "United Kingdom", Id: 3 }
];

$("#jsGrid").jsGrid({
    width: "100%",
    height: "500px",

    inserting: true,
    editing: true,
    sorting: true,
    paging: true,

    data: clients,

    fields: [
        { name: "Name", type: "text", width: 150, validate: "required" },
        { name: "Age", type: "number", width: 50 },
        { name: "Address", type: "text", width: 200 },
        { name: "Course", type: "select", items: countries, valueField: "Id", textField: "Name" },
        { name: "Level", type: "text", width: 200 },
        { name: "Married", type: "checkbox", title: "Is Married", sorting: false },
        { type: "control" }
    ]
});

/*============JsGrid Basic Scenario Table==========================*/


/*===========JsGrid sorting Table ================================*/

$("#jsGrid2").jsGrid({
    height: "500px",
    width: "100%",

    autoload: true,
    selecting: false,

    //controller: db,
    data: clients,

    fields: [
        { name: "Name", type: "text", width: 150, validate: "required" },
        { name: "Age", type: "number", width: 50 },
        { name: "Address", type: "text", width: 200 },
        { name: "Course", type: "select", items: countries, valueField: "Id", textField: "Name" },
        { name: "Level", type: "text", width: 200 },
        { name: "Married", type: "checkbox", title: "Is Married", sorting: false },

        { type: "control" }
    ]
});


$("#sort").click(function() {
    var field = $("#sortingField").val();
    $("#jsGrid2").jsGrid("sort", field);
});
/*===========JsGrid sorting Table ================================*/


/*===========JsGrid field Validation ================================*/

$("#jsGrid3").jsGrid({
    height: "500px",
    width: "100%",
    filtering: true,
    editing: true,
    inserting: true,
    sorting: true,
    paging: true,
    autoload: true,
    pageSize: 15,
    pageButtonCount: 5,
    deleteConfirm: "Do you really want to delete the client?",

    //controller: db,
    data: clients,

    fields: [
        { name: "Name", type: "text", width: 150, validate: "required" },
        { name: "Age", type: "number", width: 50, validate: { validator: "range", param: [18, 80] } },
        { name: "Address", type: "text", width: 200, validate: { validator: "rangeLength", param: [10, 250] } },
        {
            name: "Country",
            type: "select",
            items: countries,
            valueField: "Id",
            textField: "Name",
            validate: { message: "Country should be specified", validator: function(value) { return value > 0; } }
        },
        { name: "Course", type: "text", width: 150, validate: "required" },
        { name: "Level", type: "text", width: 150, validate: "required" },
        { name: "Married", type: "checkbox", title: "Is Married", sorting: false },
        { type: "control" }
    ]
});

/*===========JsGrid field Validation ================================*/
$(document).ready(function() {
    $('#saveDataBtn').click(function() {
        // Récupérer les données du tableau JSGrid
        var data = $('#jsGrid').jsGrid('option', 'data');

        // Envoyer les données au serveur via AJAX
        $.ajax({
            type: 'POST',
            url: 'insert_data.php', // L'URL de votre fichier PHP d'insertion
            data: { data: JSON.stringify(data) }, // Convertir les données en JSON et les envoyer au fichier PHP
            success: function(response) {
                // Afficher la réponse du serveur (par exemple, un message de succès ou d'erreur)
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Gérer les erreurs en cas d'échec de la requête AJAX
                console.error(xhr.responseText);
            }
        });
    });
});