<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<table class="table">
    <tr>
        <th>Sl.No.</th>
        <th>FirstNAme</th>
        <th>LastName</th>
        <th>EmailAddress</th>
    </tr>

<?php 
    $i = 1;
    foreach($sheetData as $entry){

        //GET FIRSTNAME ARRAY SET
        $firstNameData = (array)$entry->title;

        //GET FIRSTNAME
        $firstName = $firstNameData['$t'];

        //GET OTHERS DATA ARRAY SET
        $othersDatas = (array)$entry->content;
        $othersData = $othersDatas['$t'];    

        $others = explode(',',$othersData);

        //GET LAST NAME ARRAY
        $lastNAmeArr = explode(':',$others[0]);
        
        //GET EMAIL ARRAY
        $emailArr = explode(':',$others[1]);

        //GET LAST NAME
        $lastName = $lastNAmeArr[1];

        //GET EMAIL ADDRESS
        $emailAddress = $emailArr[1];

        echo
            "
            <tr>
                <td>".$i."</td>
                <td>".$firstName."</td>
                <td>".$lastName."</td>
                <td>".$emailAddress."</td>
            </tr>
            ";

        $i++;
    }
    
?>  

</table>