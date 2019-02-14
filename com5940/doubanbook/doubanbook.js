$(document).ready(function(){
$("button#roll_up").click(function() {
       var table1_items = [];
       var i = 0;
       var airtable_read_endpoint = "https://api.airtable.com/v0/appdpYwhwy9iASz50/doubanbooks?api_key=keyE2Q3CSRHLNZqT8";
       var table1_dataSet = [];
       $.getJSON(airtable_read_endpoint, function(result) {
              $.each(result.records, function(key,value) {
                  table1_items = [];
                      table1_items.push(value.fields.title);
                      table1_items.push(value.fields.info);
                      table1_items.push(value.fields.intro);
                        table1_items.push(value.fields.url);
                      table1_dataSet.push(table1_items);
                      console.log(table1_items);
               }); // end .each
               console.log(table1_dataSet);

            $("#table1").DataTable( {
                data: table1_dataSet,
                retrieve: true,
                columns: [
                    { title: "書名",
                      defaultContent:""},
                    { title: "基本信息",
                      defaultContent:"" },
                    { title: "簡介",
                      defaultContent:""},
                   { title: "鏈結",
                          defaultContent:"" },
                ]
            } ); // end dataTable
          }); // end .getJSON
        }); // end button
      }); // document ready
