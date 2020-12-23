<!DOCTYPE html>
<!--
https://jsfiddle.net/fubpoz2q/1/
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Anthony JSON Test</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script type="text/javascript">
          var data = [
              {"company_name": "Lycos", "company_id": "25577673899", "company_phone": "101-418-2044", "company_email": "sagittis.felis.Donec@odiosagittissemper.org"},
              {"company_name": "Chami", "company_id": "28612162199", "company_phone": "822-754-3235", "company_email": "metus@euultrices.org"},
              {"company_name": "Altavista", "company_id": "29276753899", "company_phone": "686-446-4713", "company_email": "ullamcorper.eu.euismod@odio.co.uk"},
              {"company_name": "Yahoo", "company_id": "19439356099", "company_phone": "381-294-4077", "company_email": "ac.metus@rhoncus.co.uk"},
              {"company_name": "Borland", "company_id": "28548999599", "company_phone": "420-212-1325", "company_email": "dolor.Nulla@felis.co.uk"},
              {"company_name": "Microsoft", "company_id": "79979719499", "company_phone": "348-792-6435", "company_email": "eu.placerat@nullavulputate.edu"},
              {"company_name": "Apple Systems", "company_id": "28782768699", "company_phone": "205-480-0404", "company_email": "Proin.nisl.sem@semegestasblandit.com"},
              {"company_name": "Cakewalk", "company_id": "93424258899", "company_phone": "663-973-5556", "company_email": "Donec.sollicitudin.adipiscing@nisiAenean.co.uk"},
              {"company_name": "Lavasoft", "company_id": "67952243899", "company_phone": "654-752-9825", "company_email": "mi.lacinia.mattis@molestietellus.com"},
              {"company_name": "Adobe", "company_id": "20446597999", "company_phone": "856-549-9623", "company_email": "et@Uttinciduntvehicula.net"},
              {"company_name": "Macromedia", "company_id": "68665651199", "company_phone": "335-779-8191", "company_email": "tellus.eu@neceuismod.edu"},
              {"company_name": "Google", "company_id": "23675109099", "company_phone": "587-421-7076", "company_email": "aliquet.Phasellus@Nullam.net"},
              {"company_name": "Sibelius", "company_id": "64969630399", "company_phone": "691-307-5254", "company_email": "risus.Donec.egestas@eueleifend.org"},
              {"company_name": "Altavista", "company_id": "15210382699", "company_phone": "618-526-6795", "company_email": "dapibus.ligula@utdolordapibus.com"},
              {"company_name": "Finale", "company_id": "82598530799", "company_phone": "869-544-5956", "company_email": "ullamcorper.Duis@eget.edu"}
          ];
          //console.log(data[0].company_name);
          //console.log(jQuery);
          jQuery(document).ready(function () {
              data.forEach(function (obj) {
                  $("#company-data-table > tbody").append("<tr>" + 
                    "<td>" + obj.company_name + "</td>" + 
                    " <td>" + obj.company_id + "</td>" + 
                    "<td>" + obj.company_phone + "</td>" + 
                    "<td>" + obj.company_email + "</td>" +
                  "</tr>");
              });
          });
        </script>
    </head>
    <body>

        <table id="company-data-table" width="100%">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Company ID</th>
                    <th>Company Phone</th>
                    <th>Company Email</th>
                </tr>
            </thead>

            <tbody>
                <!-- Insert Data Here -->
            </tbody>
        </table>

    </body>
</html>
