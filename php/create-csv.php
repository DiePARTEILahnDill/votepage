<?php
if (isset($_POST['submit'])) {
    // Collect the form data.
    $formmail = isset($_POST['formmail']) ? $_POST['formmail'] : '';
    $formcontent1 = isset($_POST['formcontent1']) ? $_POST['formcontent1'] : '';
    $formcontent2 = isset($_POST['formcontent2']) ? $_POST['formcontent2'] : '';
    $formcontent3 = isset($_POST['formcontent2']) ? $_POST['formcontent3'] : '';
    $formcontent4 = isset($_POST['formcontent2']) ? $_POST['formcontent4'] : '';
    $formcontent5 = isset($_POST['formcontent2']) ? $_POST['formcontent5'] : '';
    $formcontent6 = isset($_POST['formcontent2']) ? $_POST['formcontent6'] : '';
    $formcontent7 = isset($_POST['formcontent2']) ? $_POST['formcontent7'] : '';
    $formcontent8 = isset($_POST['formcontent2']) ? $_POST['formcontent8'] : '';
    $formcontent9 = isset($_POST['formcontent2']) ? $_POST['formcontent9'] : '';


    // Check E-Mail match pattern
    $pattern = '/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,})$/i';
    if (!preg_match($pattern, $formmail)) {
        $errors[] = 'Bitte trage eine gültige E-Mail-Adresse ein';
    }
    
    if (!$formcontent1 == '') {
        $formcontent1 = str_replace(array("\r", "\n"), ' ', $formcontent1);
    } 

    if (!$formcontent2 == '') {
	$formcontent2 = str_replace(array("\r", "\n"), ' ', $formcontent2);
    } 

    if (!$formcontent3 == '') {
        $formcontent3 = str_replace(array("\r", "\n"), ' ', $formcontent3);
    } 

    if (!$formcontent4 == '') {
        $formcontent4 = str_replace(array("\r", "\n"), ' ', $formcontent4);
    } 

    if (!$formcontent5 == '') {
        $formcontent5 = str_replace(array("\r", "\n"), ' ', $formcontent5);
    } 

    if (!$formcontent6 == '') {
        $formcontent6 = str_replace(array("\r", "\n"), ' ', $formcontent6);
    } 

    if (!$formcontent7 == '') {
        $formcontent7 = str_replace(array("\r", "\n"), ' ', $formcontent7);
    } 

    if (!$formcontent8 == '') {
        $formcontent8 = str_replace(array("\r", "\n"), ' ', $formcontent8);
    } 

    if (!$formcontent9 == '') {
        $formcontent9 = str_replace(array("\r", "\n"), ' ', $formcontent9);
    } 

    // If no errors carry on.
    if (!isset($errors)) {
        // The header row of the CSV.
        $header = "###################\n";
        // The data of the CSV.
        $data = "Verkehr;$formcontent1;\nGesundheit;$formcontent2;\nKinder;$formcontent3;\nFreizeit;$formcontent4;\nWohnungsmarkt;$formcontent5;\nEinzelhandel;$formcontent6;\nDigitalisierung;$formcontent7;\nArbeitsmarkt;$formcontent8;\nSonstiges;$formcontent9;\n";

        $fileName = dirname(__DIR__) . "/output/formdata-" . date("d-m-y-h-i-s") . ".csv";

        if (file_exists($fileName)) {
            // Add only data. The header is already added in the existing file.
            file_put_contents($fileName, $data, FILE_APPEND);
        } else {
            // Add CSV header and data.
            file_put_contents($fileName, $header . $data);
        }
	{
	    header("Location:https://vote.partei-ldk.de/thx.html");
	}
    }
}
