<html>
<head>
	<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel='stylesheet' type='text/css'>
</head>
<body>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody><tr class="odd">
            <td>Airi</td>
            <td>Satou</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>28th Nov 08</td>
            <td>$162,700</td>
        </tr>
        <tr class="even">
            <td>Angelica</td>
            <td>Ramos</td>
            <td>Chief Executive Officer (CEO)</td>
            <td>London</td>
            <td>9th Oct 09</td>
            <td>$1,200,000</td>
        </tr>
        <tr class="odd">
            <td>Ashton</td>
            <td>Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>12th Jan 09</td>
            <td>$86,000</td>
        </tr>
        <tr class="even">
            <td>Bradley</td>
            <td>Greer</td>
            <td>Software Engineer</td>
            <td>London</td>
            <td>13th Oct 12</td>
            <td>$132,000</td>
        </tr>
        <tr class="odd">
            <td>Brenden</td>
            <td>Wagner</td>
            <td>Software Engineer</td>
            <td>San Francisco</td>
            <td>7th Jun 11</td>
            <td>$206,850</td>
        </tr>
        <tr class="even">
            <td>Brielle</td>
            <td>Williamson</td>
            <td>Integration Specialist</td>
            <td>New York</td>
            <td>2nd Dec 12</td>
            <td>$372,000</td>
        </tr>
        <tr class="odd">
            <td>Bruno</td>
            <td>Nash</td>
            <td>Software Engineer</td>
            <td>London</td>
            <td>3rd May 11</td>
            <td>$163,500</td>
        </tr>
        <tr class="even">
            <td>Caesar</td>
            <td>Vance</td>
            <td>Pre-Sales Support</td>
            <td>New York</td>
            <td>12th Dec 11</td>
            <td>$106,450</td>
        </tr>
        <tr class="odd">
            <td>Cara</td>
            <td>Stevens</td>
            <td>Sales Assistant</td>
            <td>New York</td>
            <td>6th Dec 11</td>
            <td>$145,600</td>
        </tr>
        <tr class="even">
            <td>Cedric</td>
            <td>Kelly</td>
            <td>Senior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>29th Mar 12</td>
            <td>$433,060</td>
        </tr>
        </tbody><tfoot>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
</body>
<script>
	$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "scripts/server_processing.php",
        "deferLoading": 57
    } );
} );
</script>
</html>