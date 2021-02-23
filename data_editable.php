<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
    <title>Document</title>
    <style>
        table th:nth-child(3),
        td:nth-child(3) {
            display: none;
        }
    </style>
</head>

<body>
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Visible</th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Visible</th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
        <tbody>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
            <tr class="custId">
                <td><span data-editable data-id="31" data-field-name="visible">0</span></td>
                <td><span data-editable data-id="31" data-field-name="name">Brock Lee</td>
                <td><span data-editable data-id="31" data-field-name="post">Customer Support</span></td>
                <td><span data-editable data-id="31" data-field-name="office">Tampa</span></td>
                <td><span data-editable data-id="31" data-field-name="age">27</span></td>
                <td><span data-editable data-id="31" data-field-name="start_date">2011/01/25</span></td>
                <td><span data-editable data-id="31" data-field-name="salary">$112,000</span></td>
            </tr>
        </tbody>
    </table>
    <div id="textchange"></div>
</body>
<script>
    $(document).ready(function() {

        $('#example').DataTable();

        jQuery('body').on('click', '.custId [data-editable]', function() {
            var cur_text = jQuery(this).text();
            var el = jQuery(this);
            var input = jQuery('<input/>').val(el.text());
            var cust_id = el.attr("data-id");
            var field_name = el.attr("data-field-name");
            el.replaceWith(input);

            var save = function() {
                var p = jQuery('<span/>').text(input.val());
                input.replaceWith(p);
                jQuery('#textchange').text(" Text Change :" + p.text() + "|| ID :" + cust_id + " || Fiel Name :" + field_name);
            };
            input.one('blur', save).focus();
            // similar to above one.()
            // input.on('blur',function(event){
            //   save;
            //   jQuery( this ).off( event );
            // })
        })
    });
</script>

</html>