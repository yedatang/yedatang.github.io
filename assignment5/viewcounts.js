$(document).ready(function(){
$("button#roll_up").click(function() {
       var table1_items = [];
       var i = 0;
       var airtable_read_endpoint = "https://api.airtable.com/v0/app4rsP3D3T0zzIEh/View%20Counts?api_key=keyE2Q3CSRHLNZqT8";
       var table1_dataSet = [];
       $.getJSON(airtable_read_endpoint, function(result) {
              $.each(result.records, function(key,value) {
                  table1_items = [];
                      table1_items.push(value.fields.Program________);
                      table1_items.push(value.fields.Genre);
                      table1_items.push(value.fields.Platform);
                      table1_items.push(value.fields.Highest_Daily_View_Counts_in_thousand);
                      table1_items.push(value.fields.Accelerated_View_Counts_in_thousand);
                      table1_items.push(value.fields.Launched_Period);
                      table1_items.push(value.fields.Average_View_Counts_Per_Day);
                      table1_dataSet.push(table1_items);
                      console.log(table1_items);
               }); // end .each
               console.log(table1_dataSet);

            $("#table1").DataTable( {
                data: table1_dataSet,
                retrieve: true,
                columns: [
                    { title: "Program________",
                      defaultContent:""},
                    { title: "Genre",
                        defaultContent:"" },
                    { title: "Platform",
                      defaultContent:"" },
                    { title: "Highest_Daily_View_Counts_in_thousand",
                      defaultContent:""},
                    { title: "Accelerated_View_Counts_in_thousand",
                        defaultContent:""},
                    { title: "Launched_Period",
                      defaultContent:""},
                    { title: "Average_View_Counts_Per_Day",
                        defaultContent:""},
                ]
            } ); // end dataTable
          }); // end .getJSON
       }); // end button
    }); // document ready
