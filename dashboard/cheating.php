<?php

include('../code/connect.php');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_POST['save_excel_data_cheating'])) {
    // Check if file was uploaded without errors
    if (isset($_FILES['Cheating_file']) && $_FILES['Cheating_file']['error'] == 0) {
        $fileName = $_FILES['Cheating_file']['name'];
        $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowed_ext = ['xls', 'csv', 'xlsx'];

        // Check if the file extension is allowed
        if (in_array($file_ext, $allowed_ext)) {
            $inputFileNamePath = $_FILES['Cheating_file']['tmp_name'];

            // Load the uploaded spreadsheet file
            $spreadsheet = IOFactory::load($inputFileNamePath);
            $data = $spreadsheet->getActiveSheet()->toArray();

            $count = 0;
            foreach ($data as $row) {
                if ($count > 0) { // Skip the header row
                    $student_name = $row[0];
                    //$course_id = $row[1];
                    $status = $row[1];

                    // Prepare and execute the insert query
                    $ins = $con->prepare("INSERT INTO cheating_report (student_name, exam_id, `status`) VALUES (:student_name,:exam_id, :status)");
                    $ins->bindParam("student_name", $student_name);
                    $ins->bindParam("exam_id", $_POST['exam_id']);
                    $ins->bindParam("status", $status);
                    $ins->execute();
                } else {
                    $count = 1; // Skip the first row (header)
                }
            }

            // If we reach here, it means data was processed successfully
            header('Location: ShowSection.php?id=' . $_POST['course_id'] . '');
            exit();
            $msg = true;
        } else {
            echo "Error: Please upload a valid Excel file.";
        }
    } else {
        echo "Error: " . $_FILES['Cheating_file']['error'];
    }
}
